<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index()
    {
        $services = Service::all();
        $serviceSettings = ServiceSetting::first();
        return view('site.services', compact('services', 'serviceSettings'));
    }

    function show($slug)
    {
        $services = Service::latest()->take(3)->get();
        $service = Service::where('slug', $slug)->first();
        return view('site.service-details', compact('service', 'services'));
    }
}
