<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSetting;
use Illuminate\Http\Request;

class BlogSettingController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $blogSetting = BlogSetting::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($blogSetting && $blogSetting->image && file_exists(public_path($blogSetting->image))) {
                unlink(public_path($blogSetting->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/blogs'), $imageName);
            $validated['image'] = 'uploads/blogs/' . $imageName;
        }

        if ($blogSetting) {
            $blogSetting->update($validated);
        } else {
            BlogSetting::create($validated);
        }

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog ayarları başarıyla güncellendi.');
    }
} 