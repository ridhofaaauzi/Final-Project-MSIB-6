<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.tentangKami');
    }
    public function contact()
    {
        return view('user.kontak');
    }
    public function penukaranSampah()
    {
        return view('user.penukaranSampah');
    }

    public function profile()
    {
        return view("user.profile");
    }

    public function pickup()
    {
        return view("user.pickup");
    }
    public function tukarPoin()
    {
        return view("user.tukarPoin");
    }
}
