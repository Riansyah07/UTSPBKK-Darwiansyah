<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard(){
        return view('adminDashboard');
    }

    public function pegawaiDashboard(){
        return view('pegawaiDashboard');
    }

    public function memberDashboard(){
        return view('memberDashboard');
    }
}