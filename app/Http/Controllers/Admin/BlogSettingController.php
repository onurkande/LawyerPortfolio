<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogSettingController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| '
        ]);

        $blogSetting = BlogSetting::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($blogSetting && $blogSetting->image) {
                Storage::disk('public')->delete($blogSetting->image);
            }

            $imagePath = $request->file('image')->store('blog-settings', 'public');
            $validated['image'] = $imagePath;
        }

        if ($blogSetting) {
            $blogSetting->update($validated);
        } else {
            BlogSetting::create($validated);
        }

        return redirect()->back()->with('success', 'Blog ayarları başarıyla güncellendi.');
    }
} 