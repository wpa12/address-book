<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\AddressContact;
use App\Models\Contact;
use App\Models\AddressType;
use Illuminate\Support\Facades\DB;

class AddressBookController extends Controller
{

    /**
     * Property Declarations.
     */
    public $contact;
    public $address_types;
    public $countries;


    /**
     * Assign Class properties
     */
    public function __construct(AddressType $address_type) {
        
        $this->address_types = $address_type->all();
        
        //assigning countries Rinvex composer package for create form.
        $this->countries = \Rinvex\Country\CountryLoader::countries();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = AddressContact::whereHas('contact', function($query) {
            $query->where('deleted_at', null);
        })->get();

        return view('dashboard.address.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($contact_id)
    {

        $contact = Contact::find($contact_id);

        //assigning to save database transactions.
        $this->contact = $contact;
        $address_types = $this->address_types;
        $countries  = $this->countries;
        sort($countries);

        return view('dashboard.address.create', compact('contact', 'address_types', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request, $contact_id)
    {

        $address = Address::create([
            'address_type_id' => $request->address_type_id,
            'first_line' => $request->first_line,
            'second_line' => $request->second_line,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'region' => $request->region,
            'contact_id' => $contact_id,
        ]);

        $address->save();

        $added_address = DB::table('addresses')->where('contact_id', $contact_id)->latest()->first();
        
        $pivot = AddressContact::create([
            'address_id' => $added_address->id,
            'contact_id' => $contact_id,
        ]);

        $pivot->save();

        // dd($added_address);

        return redirect('/dashboard/address-book')->with('success', 'Address has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);
        $contact = Contact::where('id', $address->contact_id)->first();
        $address_types = $this->address_types;
        $countries = $this->countries;

        return view('dashboard.address.show', compact('address', 'address_types', 'countries', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request, $id)
    {
        $address = Address::find($id);
        $address->fill($request->all());
        $address->save();
        return redirect('/dashboard/address-book')->with('updated', 'Address updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *  Restore a deleted resource from.
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function restore($id)
     {
         // find with trashed.
     }
}
