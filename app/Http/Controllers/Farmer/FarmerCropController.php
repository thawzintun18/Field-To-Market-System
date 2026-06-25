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

        $this->CheckData($request);

        $data = $this->GetData($request);

        if ($request->hasFile('image')) {
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/FarmerImages/', $fileName);
            $data['image'] = $fileName;
        }

        Farmer::create($data);

        Alert::success('Success Title', 'Success Message');

        return back();

    }

    // CheckData
    public function CheckData($request)
    {

        $request->validate([
            'image'   => 'required',
            'acre'    => 'required',
            'lat'     => 'required',
            'long'    => 'required',
            'address' => 'required',
            'region'  => 'required',
        ]);

    }

    // GetData
    public function GetData($request)
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
}
