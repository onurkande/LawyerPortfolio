<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsefulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif| '
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('useful-links', 'public');
            $validated['image'] = $imagePath;
        }

        UsefulLink::create($validated);

        return redirect()->route('admin.useful-links.index')
            ->with('success', 'Faydalı link başarıyla oluşturuldu.');
    }

    public function edit(UsefulLink $usefulLink)
    {
        return view('admin.useful-links.edit', compact('usefulLink'));
    }

    public function update(Request $request, UsefulLink $usefulLink)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif| '
        ]);

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($usefulLink->image) {
                Storage::disk('public')->delete($usefulLink->image);
            }

            $imagePath = $request->file('image')->store('useful-links', 'public');
            $validated['image'] = $imagePath;
        }

        $usefulLink->update($validated);

        return redirect()->route('admin.useful-links.index')
            ->with('success', 'Faydalı link başarıyla güncellendi.');
    }

    public function destroy(UsefulLink $usefulLink)
    {
        // Resmi sil
        if ($usefulLink->image) {
            Storage::disk('public')->delete($usefulLink->image);
        }

        $usefulLink->delete();

        return redirect()->route('admin.useful-links.index')
            ->with('success', 'Faydalı link başarıyla silindi.');
    }
} 