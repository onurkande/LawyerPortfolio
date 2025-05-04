<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        $blogSettings = BlogSetting::first();
        return view('admin.blogs.index', compact('blogs', 'blogSettings'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'description' => 'required',
            'content' => 'required',
            'tags' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| '
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['slug'] = Str::slug($validated['title']);

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog yazısı başarıyla oluşturuldu.');
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'description' => 'required',
            'content' => 'required',
            'tags' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| '
        ]);

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }

            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['slug'] = Str::slug($validated['title']);

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog yazısı başarıyla güncellendi.');
    }

    public function destroy(Blog $blog)
    {
        // Resmi sil
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog yazısı başarıyla silindi.');
    }
} 