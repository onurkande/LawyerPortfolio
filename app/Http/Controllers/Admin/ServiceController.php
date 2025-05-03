<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $serviceSettings = ServiceSetting::first();
        return view('admin.service.index', compact('services', 'serviceSettings'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'icon' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $imageName);
            $validated['image'] = 'uploads/services/' . $imageName;
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Hizmet başarıyla oluşturuldu.');
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'icon' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $imageName);
            $validated['image'] = 'uploads/services/' . $imageName;
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Hizmet başarıyla güncellendi.');
    }

    public function destroy(Service $service)
    {
        // Resmi sil
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Hizmet başarıyla silindi.');
    }
} 