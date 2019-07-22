<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboradController extends Controller
{
    function index(Request $request){

        return view('admin.dashboard');
    }
}
