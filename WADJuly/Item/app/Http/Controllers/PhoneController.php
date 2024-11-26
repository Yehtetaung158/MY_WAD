<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use App\Models\People;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones=Phone::all();
        return view('phone.index',compact("phones"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persons=People::all();
        return view('phone.create',compact("persons"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhoneRequest $request)
    {
        echo $request->phone;
        $phone=new Phone();
        $phone->phoneNumber=$request->phone;
        $phone->person_id=$request->person_id;
        $phone->save();
        return redirect()->route('phone.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhoneRequest $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
