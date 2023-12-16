<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxi;
use App\Models\TaxiArea;
use App\Models\TaxiType;
use App\Models\TaxiAreaDetail;

class TaxiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxis = Taxi::join('taxi_type', 'taxi_type.Id', '=', 'taxi.Type_id')
            ->join('taxi_area_detail', 'taxi_area_detail.Taxi_id', '=', 'taxi.Id')
            ->join('taxi_area', 'taxi_area.Id', '=', 'taxi_area_detail.Pickpoint_id')
            ->select('taxi.*', 'taxi_type.Type as Type', 'taxi_area.PickPoint as PickPoint')
            ->paginate(5);
        return view('taxi.index', [
            'taxis' => $taxis,
        ]);
    }

    public function search(Request $request)
    {
        $name = $request->get('Name');
        $type = $request->get('Type');
        $pickpoint = $request->get('PickPoint');
        $taxis = Taxi::join('taxi_type', 'taxi_type.Id', '=', 'taxi.Type_id')
            ->join('taxi_area_detail', 'taxi_area_detail.Taxi_id', '=', 'taxi.Id')
            ->join('taxi_area', 'taxi_area.Id', '=', 'taxi_area_detail.Pickpoint_id')
            ->select('taxi.*', 'taxi_type.Type as Type', 'taxi_area.PickPoint as PickPoint')
            ->where('taxi.Name', 'like', "%$name%")
            ->where('taxi_type.Id', 'like', "%$type%")
            ->where('taxi_area.PickPoint', 'like', "%$pickpoint%")
            ->paginate(5);
        return view('taxi.index', [
            'taxis' => $taxis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $TaxiAreas = TaxiArea::all();
        return view('taxi.create', [
            'TaxiAreas' => $TaxiAreas,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $taxiID = uniqid('TX');
        $taxi = new Taxi();
        $taxi->Name = $request->Name;
        $taxi->Luggage = $request->Luggage;
        $taxi->NumofSeat = $request->NumofSeat;
        $taxi->Price = $request->Price;
        $taxi->State = $request->State;
        $taxi->Type_id = $request->Type;
        $taxi->ID = $taxiID;
        $taxi->save();
        $taxiAreaDetail = new TaxiAreaDetail();
        $taxiAreaDetail->Taxi_id = $taxiID;
        $taxiAreaDetail->Pickpoint_id = $request->PickPoint;
        $taxiAreaDetail->save();
        return redirect()->route('taxi.index');
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
        $bus = Bus::where('ai_id', $id)->first();
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
        $bus = Bus::where('ai_id', $id)->update([
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
        Taxi::where('Id', $id)->delete();
        TaxiAreaDetail::where('Taxi_id', $id)->delete();
        return redirect()->route('taxi.index');
    }
}
