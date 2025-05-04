<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contacts.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif| ',
            'title' => 'required|max:255',
            'description' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required',
            'working_hours' => 'required',
            'iframe' => 'nullable'
        ]);

        $contact = Contact::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($contact && $contact->image) {
                Storage::disk('public')->delete($contact->image);
            }

            $imagePath = $request->file('image')->store('contacts', 'public');
            $validated['image'] = $imagePath;
        }

        if ($contact) {
            $contact->update($validated);
        } else {
            Contact::create($validated);
        }

        return redirect()->back()->with('success', 'İletişim bilgileri başarıyla güncellendi.');
    }
} 