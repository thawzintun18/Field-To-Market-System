<?php

namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;

class FarmerController extends Controller
{
    // dashboard
    public function farmerDashboard(){

        return view('farmer.dashboard.dashboard');

    }
}
