<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;

class ServiceSettingController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'subtitle' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $serviceSetting = ServiceSetting::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($serviceSetting && $serviceSetting->image && file_exists(public_path($serviceSetting->image))) {
                unlink(public_path($serviceSetting->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/service-settings'), $imageName);
            $validated['image'] = 'uploads/service-settings/' . $imageName;
        }

        if ($serviceSetting) {
            $serviceSetting->update($validated);
        } else {
            ServiceSetting::create($validated);
        }

        return redirect()->back()->with('success', 'Ayarlar başarıyla güncellendi.');
    }
} 