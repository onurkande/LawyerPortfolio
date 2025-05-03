<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsefulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsefulLinkController extends Controller
{
    public function index()
    {
        $links = UsefulLink::latest()->get();
        return view('admin.useful-links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.useful-links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/useful-links'), $imageName);
        }

        UsefulLink::create([
            'image' => 'uploads/useful-links/' . $imageName
        ]);

        return redirect()->route('admin.useful-links.index')->with('success', 'Faydalı link başarıyla eklendi.');
    }

    public function edit(UsefulLink $usefulLink)
    {
        return view('admin.useful-links.edit', compact('usefulLink'));
    }

    public function update(Request $request, UsefulLink $usefulLink)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if (File::exists(public_path($usefulLink->image))) {
                File::delete(public_path($usefulLink->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/useful-links'), $imageName);

            $usefulLink->update([
                'image' => 'uploads/useful-links/' . $imageName
            ]);
        }

        return redirect()->route('admin.useful-links.index')->with('success', 'Faydalı link başarıyla güncellendi.');
    }

    public function destroy(UsefulLink $usefulLink)
    {
        if (File::exists(public_path($usefulLink->image))) {
            File::delete(public_path($usefulLink->image));
        }

        $usefulLink->delete();

        return redirect()->route('admin.useful-links.index')->with('success', 'Faydalı link başarıyla silindi.');
    }
} 