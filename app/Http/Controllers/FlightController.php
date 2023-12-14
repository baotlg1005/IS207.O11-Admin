<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($flight = Flight::all());
        $flights = Flight::get()
            ->paginate(5);
        return view('flight.index', [
            'flights' => $flights,
        ]);
    }

    public function search(Request $request){
        $name = $request->get('Name');
        $from = $request->get('From');
        $to = $request->get('To');
        $flights = Flight::where('Name', 'LIKE', '%'.$name.'%')
            ->where('From', 'LIKE', '%'.$from.'%')
            ->where('To', 'LIKE', '%'.$to.'%')
            ->paginate(5);
        return view('flight.index', [
            'flights' => $flights,
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
