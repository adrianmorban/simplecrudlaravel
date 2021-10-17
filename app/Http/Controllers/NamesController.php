<?php

namespace App\Http\Controllers;

use App\Models\names;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos["names"] = names::paginate(5);
        return view('names.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('names.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        names::Insert($datos);
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\names  $names
     * @return \Illuminate\Http\Response
     */
    public function show(names $names)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\names  $names
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $name = names::findOrFail($id);
        return view('names.edit', compact("name"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\names  $names
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token',"_method"]);
        names::where("id","=",$id)->update($datos);
        return response()->json($datos);
        //return $this->edit($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\names  $names
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        names::destroy($id);
        return redirect("names");
    }
}
