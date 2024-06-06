<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function kelolaSampah()
    {
        return view('admin.kelolaSampah');
    }
    public function kelolaPoin()
    {
        return view('admin.kelolaPoin');
    }
}
