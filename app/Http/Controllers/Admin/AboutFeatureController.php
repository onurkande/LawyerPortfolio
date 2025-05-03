<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutFeature;
use Illuminate\Http\Request;

class AboutFeatureController extends Controller
{
    public function index()
    {
        $features = AboutFeature::latest()->get();
        return view('admin.about.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.about.features.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        AboutFeature::create($validated);

        return redirect()->route('admin.about-features.index')
            ->with('success', 'Özellik başarıyla oluşturuldu.');
    }

    public function edit(AboutFeature $aboutFeature)
    {
        return view('admin.about.features.edit', compact('aboutFeature'));
    }

    public function update(Request $request, AboutFeature $aboutFeature)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $aboutFeature->update($validated);

        return redirect()->route('admin.about-features.index')
            ->with('success', 'Özellik başarıyla güncellendi.');
    }

    public function destroy(AboutFeature $aboutFeature)
    {
        $aboutFeature->delete();

        return redirect()->route('admin.about-features.index')
            ->with('success', 'Özellik başarıyla silindi.');
    }
} 