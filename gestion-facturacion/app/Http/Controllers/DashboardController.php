<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClientes = Cliente::count();
        return view('dashboard.index', compact('totalClientes'));
    }
}
