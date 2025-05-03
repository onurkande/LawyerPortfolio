<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SiteSetting;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Facades\View;

class SiteSettingsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Tüm view'lara site ayarlarını gönder
        View::composer(['site.layouts.partials.header', 'site.layouts.partials.footer', 'site.index'], function ($view) {
            $siteSettings = SiteSetting::first();
            $contact = Contact::first();
            $services = Service::latest()->take(5)->get();
            $view->with('siteSettings', $siteSettings);
            $view->with('contact', $contact);
            $view->with('services', $services);
        });
    }
} 