<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminKelolaSampahController extends Controller
{
    public function index()
    {
        return view('admin.kelolaSampah.kelolaSampah');
    }

    public function create()
    {
        return view('admin.kelolaSampah.create');
    }
}
