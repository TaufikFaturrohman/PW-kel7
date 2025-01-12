<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        return view('admin.index');
    }
}
