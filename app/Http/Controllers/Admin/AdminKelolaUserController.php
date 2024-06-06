<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminKelolaUserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.kelolaUser.kelolaUser', compact('users'));
    }

    public function create()
    {
        return view('admin.kelolaUser.create');
    }
}
