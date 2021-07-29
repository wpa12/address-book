<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Address;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('dashboard.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        $contact = Contact::create($request->all());
        $contact->save();

        return redirect('/dashboard/contacts')->with('success', 'Contact created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        
        return view('dashboard.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('dashboard.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->fill($request->all());
        $contact->save();

        return redirect('/dashboard/contacts')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        // $addresses = Address::where('contact_id', $id)->pluck('id')->toArray();
        
        $contact->delete();

        return redirect('/dashboard/contacts')->with('success', 'Item has been removed successfully.');
    }

    public function restore($id) 
    {
        $contact = Contact::withTrashed()->where('id', $id)->first();

        $contact->restore();

        return redirect('/dashboard/contacts/restore')->with('success','Item restored successfully.');
    }

    /**
     * Restore a deleted item.
     */
    public function show_trashed() 
    {
        $contacts = Contact::onlyTrashed()->get();

        return view('dashboard.contact.trashed', compact('contacts'));
    }

}
