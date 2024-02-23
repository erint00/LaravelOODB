<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = DB::table('brands')
            ->orderBy('drzava')
            ->get();
        return view('brands.index',['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view('brands.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
    $request->validate([
        'naziv' => 'required|string|max:255',
    ]);
    DB::table('brands')->insert([
        'naziv' => $request->naziv,
        'drzava' => $request->drzava,
        
        
    ]);
    return redirect()->route('brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $brands = DB::table('brands')
        ->where('id',$id)
        ->get();

        return view('brands.edit',['brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'naziv' => 'required|string|max:255',
            
        ]);

        $update_query = DB::table('brands')
        ->where('id', $id)
        ->update([
            'naziv' => $request->naziv,
            'drzava' => $request->drzava,
            
            

        ]);
        return redirect()->route('brands');
    }
    public function delete(Request $request){
        $id=$request->id;

        Brand::destroy($id);

        return redirect()->route('brands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
