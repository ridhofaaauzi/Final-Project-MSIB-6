<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminKelolaPoinController extends Controller
{
    public function index()
    {
        return view('admin.kelolaPoin.kelolaPoin');
    }

    public function create()
    {
        return view('admin.kelolaPoin.create');
    }
}
