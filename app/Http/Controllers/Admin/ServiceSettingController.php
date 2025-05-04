<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceSettingController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'subtitle' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| '
        ]);

        $serviceSetting = ServiceSetting::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($serviceSetting && $serviceSetting->image) {
                Storage::disk('public')->delete($serviceSetting->image);
            }

            $imagePath = $request->file('image')->store('service-settings', 'public');
            $validated['image'] = $imagePath;
        }

        if ($serviceSetting) {
            $serviceSetting->update($validated);
        } else {
            ServiceSetting::create($validated);
        }

        return redirect()->back()->with('success', 'Hizmet ayarları başarıyla güncellendi.');
    }
} 