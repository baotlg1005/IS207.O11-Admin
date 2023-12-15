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
        return view('flight.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $flight = new Flight();
        $flight->From = $request->From;
        $flight->To = $request->To;
        $flight->Date = $request->Date;
        $flight->DepartureTime = $request->DepartureTime;
        $flight->ArrivalTime = $request->ArrivalTime;
        $flight->TravelTime = $request->TravelTime;
        $flight['Stop/Direct'] = $request['Stop/Direct'];
        $flight->Name = $request->Name;
        $flight->SeatClass = $request->SeatClass;
        $flight->NumSeat = $request->NumSeat;
        $flight->Price = $request->Price;
        $flight->ID = uniqid('FL');
        $flight->save();
        return redirect()->route('flight.index');
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
        $flight = Flight::find($id);
        return view('flight.edit', [
            'flight' => $flight,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $flight = Flight::where( 'ai_id', $id )->update([
            'From' => $request->From,
            'To' => $request->To,
            'Date' => $request->Date,
            'DepartureTime' => $request->DepartureTime,
            'ArrivalTime' => $request->ArrivalTime,
            'TravelTime' => $request->TravelTime,
            'Stop/Direct' => $request['Stop/Direct'],
            'Name' => $request->Name,
            'SeatClass' => $request->SeatClass,
            'NumSeat' => $request->NumSeat,
            'Price' => $request->Price,
        ]);
        // $flight->save();
        return redirect()->route('flight.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Flight::where( 'ai_id', $id )->delete();
        return redirect()->route('flight.index');
    }
}
