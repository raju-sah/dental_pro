<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Http\Requests\Admin\ContactUpdateRequest;


class ContactController extends Controller
{
    
    public function index() : View
    {
        return view('admin.contact.index', [
            'contacts' => Contact::query()->select(['id', 'name','email','subject'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.contact.create');
    }

    public function store(ContactRequest $request) : RedirectResponse
    {
        $contact = Contact::create($request->validated());

        return redirect()->route('admin.contacts.index')->with('success', 'Contact Created Successfully!');
    }

    public function show(Contact $contact) : View
    {
        return view('admin.contact.show', compact('contact'));
    }

    public function edit(Contact $contact) : View
    {
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(ContactUpdateRequest $request, Contact $contact) : RedirectResponse
    {
        $contact->update($request->validated());

        return redirect()->route('admin.contacts.index')->with('success', 'Contact Updated Successfully!');
    }

    public function destroy(Contact $contact) : RedirectResponse
    {
        

        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('error', 'Contact Deleted Successfully!');
    }

    
}
