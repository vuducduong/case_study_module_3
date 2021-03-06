<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countrys = Country::all();
        return view('Countrys.list', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Countrys.create');
    }


    public function store(Request $request)
    {
        $country = new Country();
        $country->name     = $request->input('name');
        $country->save();

        //tao moi xong quay ve trang danh sach phim
        return redirect()->route('country.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('Countrys.edit', compact('country'));
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
        $country = Country::find($id);
        $country->fill($request->all());
        $country->save();
        return redirect()->route('country.list');
    }


    public function destroy($id)
    {
        $country= Country::find($id);
        $country->delete();
        return redirect()->route('country.list');
    }
    public function showCountry(){
        $countries = Country::all();
        return view('font-end.core.header',compact('countries'));
    }
}
