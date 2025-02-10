<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Create this view
    }

    public function manageTickets(){
        return view('admin.manage-tickets');
    }
}
