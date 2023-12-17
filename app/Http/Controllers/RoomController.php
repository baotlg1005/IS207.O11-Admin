<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Hotel;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::get()
            ->paginate(5);
        return view('room.index', [
            'rooms' => $rooms,
        ]);
    }

    public function search(Request $request){
        $name = $request->get('Name');
        $state = $request->get('State');
        $rooms = Room::where('Name', 'LIKE', '%'.$name.'%')
            ->where('State', 'LIKE', '%'.$state.'%')
            ->paginate(5);
        return view('room.index', [
            'rooms' => $rooms,
        ]);
    }

    public function searchHotel(string $id){
        $rooms = Room::where('Hotel_id', 'LIKE', '%'.$id.'%')
            ->paginate(5);
        return view('room.index', [
            'rooms' => $rooms,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $hotels = Hotel::get();
        return view('room.create'
        , [
            'hotels' => $hotels,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $room = new Room();
        $room->Hotel_id = $request->Hotel_id;
        $room->Name = $request->Name;
        $room->Max = $request->Max;
        $room->Price = $request->Price;
        $room->State = $request->State;
        $room->ID = uniqid('RM');
        $room->save();
        return redirect()->route('room.index');
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
        $room = Room::where('Id', $id)->first();
        $hotels = Hotel::get();
        return view('room.edit', [
            'room' => $room,
            'hotels' => $hotels,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::where('Id', $id)->update([
            'Hotel_id' => $request->Hotel_id,
            'Name' => $request->Name,
            'Max' => $request->Max,
            'Price' => $request->Price,
            'State' => $request->State,
        ]);
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Room::where('Id', $id)->delete();
        return redirect()->route('room.index');
    }
}
