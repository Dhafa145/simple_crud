<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;//add Kandidat Model - Data is coming from the database via Model.

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kandidat = Kandidat::all();
        return view ('kandidat.index')->with('kandidat',$kandidat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kandidat.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
       Kandidat::create($input);

        return redirect('kandidat')->with('flash_message', 'Kandidat Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kandidat = Kandidat::find($id);
        return view('kandidat.show')->with('kandidat', $kandidat);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $kandidat = Kandidat::find($id);
        return view('kandidat.edit')->with('kandidat', $kandidat);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $kandidat = Kandidat::find($id);
        $input =$request->all();
        $kandidat->update($input);
        return redirect('kandidat')->with('flash_message', 'kandidat Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Kandidat::destroy($id);
        return redirect('kandidat')->with('flash_message', 'Kandidat deleted!');

    }
}
