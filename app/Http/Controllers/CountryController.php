<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\countries;

class CountryController extends Controller
{
    /**
     * Display a listing of the COUNTRIES.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = countries:: all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        countries::create([
            'name' =>  $request->name,
            'code' =>  $request->code,
            'currency_code' =>  $request->ccode,
            'country_symbol' =>  $request->symbol
        ]);
        return redirect()->route('countries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countries = countries::findOrFail($id);
        return view('countries.show', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = countries::findOrFail($id);
        return view('countries.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $countries = countries::findOrFail($id);
        $countries->update([
            'name' =>  $request->name_updated,
            'code' =>  $request->code_updated,
            'currency_code' =>  $request->ccode_updated,
            'country_symbol' =>  $request->symbol_updated
        ]);
        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = countries::findOrFail($id);
        $countries->delete();
        return redirect()->route('countries.index');
    }
}
