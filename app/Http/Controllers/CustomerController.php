<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = DB::table('customers')
            ->get();
        return view('customers.index',['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
    $request->validate([
        'ime' => 'required|string|max:255',
    ]);
    DB::table('customers')->insert([
        'ime' => $request->ime,
        'prezime' => $request->prezime,
        'korisnicko_ime' => $request->korisnicko_ime,
        
    ]);
    return redirect()->route('customers');
    }

    public function create()
    {
        

        return view('customers.add');
    }
    public function edit(Request $request)
    {
        $id = $request->id;

        $customers = DB::table('customers')
        ->where('id',$id)
        ->get();

        return view('customers.edit',['customers' => $customers]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Customer::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'ime' => 'required|string|max:255',
            
        ]);

        $update_query = DB::table('customers')
        ->where('id', $id)
        ->update([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'korisnicko_ime' => $request->korisnicko_ime,
            

        ]);
        return redirect()->route('customers');
    }

    public function delete(Request $request){
        $id=$request->id;

        Customer::destroy($id);

        return redirect()->route('customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Customer::destroy($id);
    }
}
