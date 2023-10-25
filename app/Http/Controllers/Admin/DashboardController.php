<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('admin.dashboard.index')->with([
            'role' => $role,
            'product' => Product::count(),
        ]);
    }
}
