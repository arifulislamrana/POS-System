<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard.index');
    }

    
    public function table(Request $request)
    {
            return view('admin.dashboard.table');
    }

    public function chart(Request $request)
    {
            return view('admin.dashboard.chart');
    }


}
