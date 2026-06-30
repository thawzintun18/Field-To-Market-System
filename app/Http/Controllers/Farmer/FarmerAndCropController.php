<?php
namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Farmer;
use App\Models\Farmer_Crop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FarmerAndCropController extends Controller
{
    //directPage
    public function directPage(Request $request)
    {
        $selected_farmer_id = $request->farmer_id;

        $farmer = Farmer::select('id', 'farm_size_acre')
            ->where('user_id', Auth::user()->id)
            ->get()
            ->map(function ($item) {
                $item->farm_size_acre = $this->enToMmNumber($item->farm_size_acre);
                return $item;
            });

        // dd($farmer);

        $crop = Crop::select('id', 'name')->get();

        return view('farmer.farmer_crop.create', compact('farmer', 'crop', 'selected_farmer_id'));
    }

    //create
    public function create(Request $request)
    {

        $this->CheckData($request);

        $data = $this->GetData($request);

        Farmer_Crop::create($data);

        Alert::success('Success Title', 'သီးနှံစိုက်ပျိုးမှု အောင်မြင်စွာ ထည့်သွင်းပြီးပါပြီ။');

        return to_route('farmer-crop#list');

    }

    //update
    public function update(Request $request , $id)
    {
        // dd($request->toArray());

        $this->UpdateCheckData($request);

        $Updatedata = $this->UpdateGetData($request);

        // dd($Updatedata);

        Farmer_Crop::where('id', $id)
            ->update($Updatedata);

        Alert::success('Success Title', 'သီးနှံစိုက်ပျိုးမှုအချက်အလက်များကို အောင်မြင်စွာ ပြင်ဆင်ပြီးပါပြီ။');

        return to_route('farmer-crop#list');

    }

    //CheckData
    private function CheckData($request)
    {
        $request->validate([
            'farmer_id'     => 'required',
            'crop_id'       => 'required',
            'planting_date' => 'required',
            'harvest_date'  => 'required',
        ]);
    }

    //UpdateCheckData
    private function UpdateCheckData($request){
        $request->validate([
            'crop_id'       => 'required',
            'planting_date' => 'required',
            'harvest_date'  => 'required',
        ]);
    }

    //GetData
    private function GetData($request)
    {
        return [
            'farmer_id'              => $request->farmer_id,
            'crop'                   => $request->crop_id,
            'planting_date'          => $request->planting_date,
            'estimated_harvest_date' => $request->harvest_date,
            'status'                 => 'PLANTED',
        ];
    }

    //UpdateGetData
    private function UpdateGetData($request)
    {
        return [
            'crop'                   => $request->crop_id,
            'planting_date'          => $request->planting_date,
            'estimated_harvest_date' => $request->harvest_date,
        ];
    }

    //list
    public function list(Request $request)
    {

        $query = Farmer_Crop::leftJoin('farmers', 'farmer__crops.farmer_id', 'farmers.id')
            ->leftJoin('crops', 'farmer__crops.crop', 'crops.id')
            ->select('farmer__crops.*', 'farmers.farm_size_acre', 'farmers.image', 'crops.name');

        if ($request->filled('farmer_id')) {
            $query->where('farmer__crops.farmer_id', $request->farmer_id);
        }

        $FarmerCrop = $query->get()
            ->map(function ($item) {
                $item->farm_size_acre         = $this->enToMmNumber($item->farm_size_acre);
                $item->planting_date          = $this->enToMmNumber(Carbon::parse($item->planting_date)->format('d-m-Y'));
                $item->estimated_harvest_date = $this->enToMmNumber(Carbon::parse($item->estimated_harvest_date)->format('d-m-Y'));
                return $item;
            });

        $farmer = Farmer::select('id', 'farm_size_acre')
            ->where('user_id', Auth::user()->id)
            ->get()
            ->map(function ($item) {
                $item->farm_size_acre = $this->enToMmNumber($item->farm_size_acre);
                return $item;
            });

        return view('farmer.farmer_crop.list', compact('FarmerCrop', 'farmer'));
    }

    //detail
    public function detail($id)
    {

        $farmer_crop = Farmer_Crop::leftJoin('farmers', 'farmer__crops.farmer_id', 'farmers.id')
            ->leftJoin('crops', 'farmer__crops.crop', 'crops.id')
            ->select('farmer__crops.*', 'farmers.farm_size_acre', 'farmers.image', 'farmers.latitude', 'farmers.longitude', 'farmers.address', 'farmers.region', 'crops.name')
            ->where('farmer__crops.id', $id)
            ->get()
            ->map(function ($item) {
                $item->farm_size_acre         = $this->enToMmNumber($item->farm_size_acre);
                $item->latitude               = $this->enToMmNumber($item->latitude);
                $item->longitude              = $this->enToMmNumber($item->longitude);
                $item->total_quantity         = $this->enToMmNumber($item->total_quantity);
                $item->planting_date          = $this->enToMmNumber(Carbon::parse($item->planting_date)->format('d-m-Y'));
                $item->estimated_harvest_date = $this->enToMmNumber(Carbon::parse($item->estimated_harvest_date)->format('d-m-Y'));
                return $item;
            });

        // dd($farmer_crop[0]->toarray());

        return view('farmer.farmer_crop.detail', compact('farmer_crop'));

    }

    //select
    public function select(Request $request)
    {

        $farmer_crop = Farmer_Crop::findOrFail($request->id);

        $farmer_crop->status = $request->status;
        $farmer_crop->save();

        return response()->json([
            'success' => true,
            'message' => 'သီးနှံအခြေအနေကို အောင်မြင်စွာ ပြောင်းလဲပြီးပါပြီ။',
        ]);

    }

    public function enToMmNumber($number)
    {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $mm = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'];

        return str_replace($en, $mm, (string) $number);
    }

    //delete
    public function delete($id)
    {

        Farmer_Crop::where('id', $id)->delete();

        return back();

    }

    //edit
    public function edit($id)
    {

        $farmer_crop = Farmer_Crop::where('id', $id)
            ->select('id', 'crop', 'planting_date', 'estimated_harvest_date')
            ->get();

        $crop = Crop::select('id', 'name')->get();

        return view('farmer.farmer_crop.edit', compact('farmer_crop', 'crop'));
    }
}
