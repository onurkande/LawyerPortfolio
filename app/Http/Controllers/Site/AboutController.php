<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;
class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $services = Service::latest()->take(6)->get();
        $contact = Contact::first();
        return view('site.about', compact('about', 'services', 'contact'));
    }
}
