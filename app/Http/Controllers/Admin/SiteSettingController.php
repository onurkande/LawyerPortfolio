<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $siteSettings = SiteSetting::first();
        return view('admin.site-settings.index', compact('siteSettings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'required|max:255',
            'hero_description' => 'required',
            'bottom_description' => 'required',
            'bottom_info' => 'required',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $siteSettings = SiteSetting::first();

        if ($request->hasFile('hero_image')) {
            // Eski resmi sil
            if ($siteSettings && $siteSettings->hero_image && file_exists(public_path($siteSettings->hero_image))) {
                unlink(public_path($siteSettings->hero_image));
            }

            $image = $request->file('hero_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/site'), $imageName);
            $validated['hero_image'] = 'uploads/site/' . $imageName;
        }

        if ($request->hasFile('logo')) {
            // Eski logoyu sil
            if ($siteSettings && $siteSettings->logo && file_exists(public_path($siteSettings->logo))) {
                unlink(public_path($siteSettings->logo));
            }

            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path('uploads/site'), $logoName);
            $validated['logo'] = 'uploads/site/' . $logoName;
        }

        if ($siteSettings) {
            $siteSettings->update($validated);
        } else {
            SiteSetting::create($validated);
        }

        return redirect()->route('admin.site-settings.index')
            ->with('success', 'Site ayarları başarıyla güncellendi.');
    }
} 