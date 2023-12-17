<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hotels = Hotel::get()
            ->paginate(5);
        return view('hotel.index', [
            'hotels' => $hotels,
        ]);
    }

    public function search(Request $request){
        $name = $request->get('Name');
        $area = $request->get('Area');
        $hotels = Hotel::where('Name', 'LIKE', '%'.$name.'%')
            ->where('Area', 'LIKE', '%'.$area.'%')
            ->paginate(5);
        return view('hotel.index', [
            'hotels' => $hotels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $hotel = new Hotel();
        $hotel->Name = $request->Name;
        $hotel->Address = $request->Address;
        $hotel->Area = $request->Area;
        $hotel->Id = uniqid("HT");
        $hotel->save();
        return redirect()->route('hotel.index');
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
        $hotel = Hotel::where('Id', $id)->first();
        return view('hotel.edit', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $hotel = Hotel::where('Id', $id)->update([
            'Name' => $request->Name,
            'Address' => $request->Address,
            'Area' => $request->Area,
        ]);
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hotel::where('Id', $id)->delete();
        return redirect()->route('hotel.index');
    }
}
