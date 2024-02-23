<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use DB;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = DB::table('purchases')
        ->get();
        


        //Ispisati racunare koje se najcesce kupuju
        $most_common_computers = DB::table('computers')
        ->select('computers.*',DB::raw('count(*) as brojac'))
        ->groupBy('computers.id','computers.naziv')
        ->join('purchases', 'computers.id', '=', 'purchases.racunar')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        //kupci amd racunara
        $AMD_computer_customers = DB::table("customers")
        ->select('customers.ime as customer_ime', 'customers.prezime as customer_prezime')
        ->groupBy('customers.id')
        ->join('purchases', 'customers.id', '=', 'purchases.kupac')
        ->join('computers', 'purchases.racunar', '=', 'computers.id')
        ->join('brands', 'computers.brand', '=', 'brands.id')
        ->where('brands.naziv', 'AMD')
        ->get();

        //kupovine od 1.9.2024 do 30.9.2024
        $from = '2024-09-1 00:00:00';
        $to = '2024-9-30 23:59:59';

        $number_of_purchases = DB::table('purchases')
        ->whereBetween('vrijeme',[$from, $to])
        ->count();

        //kupci koji su kupili racunar sa vise od 16 rama 
        $most_ram_customers = DB::table('customers')
        ->select('customers.ime as customer_ime', 'customers.prezime as customer_prezime')
        ->groupBy('customers.id')
        ->join('purchases', 'customers.id','=', 'purchases.kupac')
        ->join('computers', 'purchases.racunar','=', 'computers.id')
        ->where('computers.ram', '>', 16)
        ->get();

        //gaming racunari
        $gaming_computers = DB::table('computers')
        ->select('computers.naziv as computer_naziv', 'computers.procesor as computer_procesor', 'computers.graficka as computer_graficka', 'computers.ram as computer_ram')
        ->groupBy('computers.id')
        ->where('computers.procesor','Intel')->where('computers.ram','>',32)->where('computers.graficka','Nvidia')
        ->get();



        return view('purchases.index',
        ['most_common_computers' => $most_common_computers,
         'AMD_computer_customers' => $AMD_computer_customers,
         'number_of_purchases' => $number_of_purchases,
         'most_ram_customers' => $most_ram_customers,
         'gaming_computers' => $gaming_computers,

    ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
