<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogSetting;
use App\Models\BlogCategory;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->paginate(6);
        $blogSettings = BlogSetting::first();
        $blogCategories = BlogCategory::all();
        return view('site.blogs', compact('blogs', 'blogSettings', 'blogCategories'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogCategories = BlogCategory::all();
        $blogs = Blog::latest()->take(3)->get();
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();
        return view('site.blog-details', compact('blog', 'blogCategories', 'blogs', 'relatedBlogs'));
    }
}
