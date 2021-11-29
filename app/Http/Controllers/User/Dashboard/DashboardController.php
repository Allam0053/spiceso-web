<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.user.dashboard');
    }

    public function home()
    {
        return view('layouts.user.home');
    }
}
