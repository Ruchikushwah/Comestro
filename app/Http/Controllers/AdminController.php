<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        $todayLeadsCount = Lead::whereDate('created_at', today())->count();
        return view('admin.dashboard', compact('users', 'todayLeadsCount')); 
    }
    public function manageTickets()
    {
        return view('admin.manage-tickets');
    }
}
