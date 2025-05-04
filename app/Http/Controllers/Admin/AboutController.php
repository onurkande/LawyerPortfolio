<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| '
        ]);

        $about = About::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($about && $about->image) {
                Storage::disk('public')->delete($about->image);
            }

            $imagePath = $request->file('image')->store('abouts', 'public');
            $validated['image'] = $imagePath;
        }

        if ($about) {
            $about->update($validated);
        } else {
            About::create($validated);
        }

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Hakkımızda bilgisi başarıyla güncellendi.');
    }

    public function destroy(About $about)
    {
        // Resmi sil
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Hakkımızda bilgisi başarıyla silindi.');
    }
} 