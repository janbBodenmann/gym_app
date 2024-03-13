<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Exercise;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $userCount = DB::table('users')->count();
        return view('dashboard', compact('userCount', ));
    }
    
}
