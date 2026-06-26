<?php
namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Models\Farmer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FarmerCropController extends Controller
{

    //directPage
    public function directPage()
    {
        return view('farmer.farmer.create');
    }

    // create
    public function create(Request $request)
    {

        $this->CheckData($request, 'create');

        $data = $this->GetData($request);

        if ($request->hasFile('image')) {
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/FarmerImages/', $fileName);
            $data['image'] = $fileName;
        }

        Farmer::create($data);

        Alert::success('Success Title', 'စိုက်ပျိုးမြေ အောင်မြင်စွာ ထည့်သွင်းပြီးပါပြီ။');

        return back();

    }

    //update
    public function update(Request $request, $id)
    {

        $this->CheckData($request, 'update');

        $data = $this->GetData($request);

        if ($request->hasFile('image')) {

            $image_name = Farmer::where('id', $id)->value('image');

            unlink(public_path('FarmerImages/' . $image_name));

            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/FarmerImages/', $fileName);
            $data['image'] = $fileName;

        } else {

            $image_name = Farmer::where('id', $id)->value('image');

            $data['image'] = $image_name;
        }

        Farmer::where('id', $id)
            ->update($data);

        Alert::success('Success Title', 'စိုက်ပျိုးမြေအချက်အလက်များကို အောင်မြင်စွာ ပြင်ဆင်ပြီးပါပြီ။');

        return back();

    }

    // CheckData
    private function CheckData($request, $action)
    {
        $checkData = [
            'acre'    => 'required|numeric|min:0',
            'lat'     => 'required|numeric|min:0',
            'long'    => 'required|numeric|min:0',
            'address' => 'required',
            'region'  => 'required',
        ];

        $checkData['image'] = $action == 'create' ? 'required|file|mimes:jpg,jpeg,png,svg' : 'file|mimes:jpg,jpeg,png,svg';

        $request->validate($checkData);

    }

    // GetData
    private function GetData($request)
    {

        return [
            'user_id'        => Auth::user()->id,
            'latitude'       => $request->lat,
            'longitude'      => $request->long,
            'address'        => $request->address,
            'region'         => $request->region,
            'farm_size_acre' => $request->acre,
            'image'          => $request->image,
        ];

    }

    //list
    public function list()
    {

        $farmer = Farmer::where('user_id', Auth::user()->id)
            ->get();

        return view('farmer.farmer.list', compact('farmer'));
    }

    //delete
    public function delete($id)
    {
        $image_name = Farmer::where('id', $id)->value('image');

        unlink(public_path('FarmerImages/' . $image_name));

        Farmer::where('id', $id)->delete();

        return back();

    }

    //edit
    public function edit($id)
    {

        $farmer = Farmer::where('id', $id)
            ->first();

        return view('farmer.farmer.edit', compact('farmer'));

    }

    //detail
    public function detail($id)
    {

        $farmer = $farmer = Farmer::where('id', $id)
            ->first();

        return view('farmer.farmer.detail', compact('farmer'));

    }
}
