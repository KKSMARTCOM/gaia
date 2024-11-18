<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderTest;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $orders = OrderTest::all();
        $services = Service::all();
        $recettes = OrderTest::sum('price');

        return view('admin.dashboard', compact('orders', 'users', 'services', 'recettes'));
    }
}
