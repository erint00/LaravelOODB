<?php

namespace App\Http\Controllers;

use App\Models\computer;
use Illuminate\Http\Request;
use DB;
class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = DB::table('computers')
            ->get();
        return view('computers.index',['computers' => $computers]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = DB::table('brands')
            ->get();

        return view('computers.add', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
    $request->validate([
        'naziv' => 'required|string|max:255',
    ]);
    DB::table('computers')->insert([
        'naziv' => $request->naziv,
        'procesor' => $request->procesor,
        'graficka' => $request->graficka,
        'kuciste' => $request->kuciste,
        'ram' => $request->ram,
        'napojna' => $request->napojna,
        'brand' => $request->brand,
    ]);
    return redirect()->route('computers');
    }

    public function file_add(Request $request)
    {
        $id = $request->id;
    
        return view('computers.file_add', compact('id'));
    }

    public function process(Request $request)
    {
        $id=$request->id;

        $computers = Computer::find($id);

        $folder_to_save = $computers->naziv;

        $file = $request->file('file');

        $filename = $computers->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('computers');
    }

    /**
     * Display the specified resource.
     */
    public function show(computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $computers = DB::table('computers')
        ->where('id',$id)
        ->get();

        $brands = DB::table('brands')
        ->get();

        return view('computers.edit',['computers' => $computers, 'brands' => $brands]);
    }

    public function delete(Request $request){
        $id=$request->id;

        Computer::destroy($id);

        return redirect()->route('computers');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'naziv' => 'required|string|max:255',
            'procesor' => 'required|string',
        ]);

        $update_query = DB::table('computers')
        ->where('id', $id)
        ->update([
            'naziv' => $request->naziv,
            'procesor' => $request->procesor,
            'graficka' => $request->graficka,
            'kuciste' => $request->kuciste,
            'ram' => $request->ram,
            'napojna' => $request->napojna,
            'brand' => $request->brand,

        ]);
        return redirect()->route('computers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(computer $computer)
    {
        //
    }
}
