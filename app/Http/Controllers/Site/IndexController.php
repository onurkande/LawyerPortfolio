<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceSetting;
use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Blog;
use App\Models\BlogSetting;
use App\Models\Contact;
use App\Models\UsefulLink;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $siteSettings = SiteSetting::first();
        $serviceSettings = ServiceSetting::first();
        $services = Service::latest()->take(3)->get();
        $abouts = About::first();
        $aboutFeatures = AboutFeature::latest()->get();
        $blogs = Blog::latest()->take(3)->get();
        $blogSettings = BlogSetting::first();
        $contact = Contact::first();
        $usefulLinks = UsefulLink::latest()->get();

        return view('site.index', compact(
            'siteSettings',
            'serviceSettings',
            'services',
            'abouts',
            'aboutFeatures',
            'blogs',
            'blogSettings',
            'contact',
            'usefulLinks'
        ));
    }
}
