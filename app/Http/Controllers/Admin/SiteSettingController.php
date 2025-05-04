<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        $siteSettings = SiteSetting::first();
        return view('admin.site-settings.index', compact('siteSettings'));
    }

    public function update(Request $request)
    {
        $settings = SiteSetting::first();
        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($settings && $settings->logo) {
                Storage::disk('public')->delete($settings->logo);
            }
            $data['logo'] = $request->file('logo')->store('site-settings', 'public');
        }

        if ($request->hasFile('hero_image')) {
            if ($settings && $settings->hero_image) {
                Storage::disk('public')->delete($settings->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('site-settings', 'public');
        }

        if ($settings) {
            $settings->update($data);
        } else {
            SiteSetting::create($data);
        }

        return redirect()->back()->with('success', 'Site ayarları başarıyla güncellendi.');
    }
} 