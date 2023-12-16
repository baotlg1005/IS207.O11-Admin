<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($flight = Flight::all());
        $buses = Bus::get()
            ->paginate(5);
        return view('bus.index', [
            'buses' => $buses,
        ]);
    }

    public function search(Request $request){
        $name = $request->get('Name');
        $from = $request->get('From');
        $to = $request->get('To');
        $buses = Bus::where('Name', 'LIKE', '%'.$name.'%')
            ->where('From', 'LIKE', '%'.$from.'%')
            ->where('To', 'LIKE', '%'.$to.'%')
            ->paginate(5);
        return view('Bus.index', [
            'buses' => $buses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('bus.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $bus = new Bus();
        $bus->From = $request->From;
        $bus->To = $request->To;
        $bus->Date = $request->Date;
        $bus->DepartureTime = $request->DepartureTime;
        $bus->ArrivalTime = $request->ArrivalTime;
        $bus->TravelTime = $request->TravelTime;
        $bus->PickPoint = $request->PickPoint;
        $bus->DesPoint = $request->DesPoint;
        $bus->Name = $request->Name;
        $bus->SeatCount = $request->SeatCount;
        $bus->NumSeat = $request->NumSeat;
        $bus->Price = $request->Price;
        $bus->Id = uniqid('BS');
        $bus->save();
        return redirect()->route('bus.index');
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
        $bus = Bus::where( 'Id', $id )->first();
        return view('bus.edit', [
            'bus' => $bus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $bus = Bus::where( 'Id', $id )->update([
            'From' => $request->From,
            'To' => $request->To,
            'Date' => $request->Date,
            'DepartureTime' => $request->DepartureTime,
            'ArrivalTime' => $request->ArrivalTime,
            'TravelTime' => $request->TravelTime,
            'PickPoint' => $request->PickPoint,
            'DesPoint' => $request->DesPoint,
            'Name' => $request->Name,
            'SeatCount' => $request->SeatCount,
            'NumSeat' => $request->NumSeat,
            'Price' => $request->Price,
        ]);
        return redirect()->route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Bus::where( 'Id', $id )->delete();
        return redirect()->route('bus.index');
    }
}
