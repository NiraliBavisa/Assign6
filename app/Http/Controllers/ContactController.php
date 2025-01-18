<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact=Contact::all();
        return view('/index',compact('contact'));
    }
    public function contact()
    {
        return view('/contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        contact::create($request->validated());
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        if($img=$request->file('image'))
        {
            $path='images/';
            $file=time().".".$img->getClientOriginalExtension();
            $img->move($path,$file);
            $contact->image=$file;
        }
        $contact->save(); 
        return redirect()->route('/index')->with('success','Product Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
