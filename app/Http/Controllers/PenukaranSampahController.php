<?php

namespace App\Http\Controllers;

use App\Models\Waste;
use Illuminate\Http\Request;

class PenukaranSampahController extends Controller
{
    public function index()
    {
        $wastes = Waste::latest()->get();
        return view('user.penukaranSampah.index', compact('wastes'));
    }

    public function pickup()
    {
        return view('user.penukaranSampah.pickup');
    }
}