<?php
namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CropController extends Controller
{
    // direct create page
    public function create()
    {
        return view('farmer.crop.create');
    }

    // list page
    public function list()
    {
        $crops = Crop::get();
        return view('farmer.farmer.list', compact('crops'));
    }

    // edit page
    public function edit($id)
    {
        $crop = Crop::findOrFail($id);

        return view('farmer.crop.edit', compact('crop'));
    }
    public function edition(Request $request)
    {
        $crop = Crop::findOrFail($request->id);

        $crop->name = $request->cropName;
        $crop->save();

        Alert::success('Success Title', 'သီးနှံပြင်ဆင်ခြင်းအောင်မြင်ပါသည်။');

        return to_route('farmer#list');
    }

    // creatation page
    public function creation(Request $request)
    {
        $this->CheckData($request);

        Crop::create([
            'name' => $request->cropName,
        ]);

        Alert::success('Success Title', 'သီးနှံထည့်ခြင်းအောင်မြင်ပါသည်။');

        return to_route('farmer#list');
    }

    public function deleteCrop($id)
    {
        $crop = Crop::findOrFail($id);

        $crop->delete();

        Alert::success('Success Title', 'သီးနှံဖျက်ခြင်းအောင်မြင်ပါသည်။');

        return to_route('farmer#list');
    }

    // CheckData
    private function CheckData($request)
    {
        $request->validate([
            'cropName' => 'required|string|unique:crops,name',
        ], [
            'cropName.required' => 'သီနှံအမည်ထည့်ရန်လိုအပ်သည်။',
            'cropName.unique'   => 'သီးနှံအမည်သည် ရှိပြီးဖြစ်သည်။',
        ]);
    }
}
