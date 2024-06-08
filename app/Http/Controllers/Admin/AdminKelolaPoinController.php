<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PointCreateRequest;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminKelolaPoinController extends Controller
{
    public function index()
    {
        $points = Point::latest()->get();
        return view('admin.kelolaPoin.kelolaPoin', compact('points'));
    }

    public function create()
    {
        return view('admin.kelolaPoin.create');
    }

    public function store(PointCreateRequest $request)
    {
        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
            }

            Point::create([
                'name' => $request->input("name"),
                'poin' => $request->input("poin"),
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.kelolaPoin')->with('success', 'Reward added successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to add Reward', ['error' => $th->getMessage()]);

            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $point = Point::findOrFail($id);
        return view('admin.kelolaPoin.edit', compact('point'));
    }
    public function update(PointCreateRequest $request, $id)
    {
        try {
            $Point = Point::findOrFail($id);

            if ($request->hasFile('image')) {
                Storage::disk('public')->delete($Point->image);
                $imagePath = $request->file('image')->store('images', 'public');
                $Point->image = $imagePath;
            }

            $Point->name = $request->input("name");
            $Point->poin = $request->input("poin");
            $Point->save();

            return redirect()->route('admin.kelolaPoin')->with('success', 'Point updated successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to update Point', ['error' => $th->getMessage()]);

            return redirect()->back()->with([
                'error' => 'Failed to update Point',
                'info' => $th->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $point = Point::findOrFail($id);
            if ($point->image) {
                Storage::disk('public')->delete($point->image);
            }

            $point->delete();

            return redirect()->route('admin.kelolaPoin')->with('success', 'point deleted successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to delete point', ['error' => $th->getMessage()]);

            return redirect()->back()->with([
                'error' => 'Failed to delete point',
                'info' => $th->getMessage()
            ]);
        }
    }
}