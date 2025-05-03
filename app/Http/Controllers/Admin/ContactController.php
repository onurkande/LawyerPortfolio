<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

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
            'title' => 'required|max:255',
            'description' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required',
            'working_hours' => 'required',
            'iframe' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $contact = Contact::first();

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($contact && $contact->image && file_exists(public_path($contact->image))) {
                unlink(public_path($contact->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/contacts'), $imageName);
            $validated['image'] = 'uploads/contacts/' . $imageName;
        }

        if ($contact) {
            $contact->update($validated);
        } else {
            Contact::create($validated);
        }

        return redirect()->route('admin.contacts.index')
            ->with('success', 'İletişim ayarları başarıyla güncellendi.');
    }
} 