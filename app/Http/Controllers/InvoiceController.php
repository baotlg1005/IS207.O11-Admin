<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightInvoice;
use App\Models\TaxiInvoice;
use App\Models\BusInvoice;
use App\Models\RoomInvoice;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_invoices = FlightInvoice::join('invoice', 'invoice.Id', '=', 'flight_invoice.Invoice_id')
            ->get()
            ->paginate(5);
        // dd($flight_invoices);
        $bus_invoices = BusInvoice::join('invoice', 'invoice.Id', '=', 'bus_invoice.Invoice_id')
            ->get()
            ->paginate(5);
        $room_invoices = RoomInvoice::join('invoice', 'invoice.Id', '=', 'room_invoice.Invoice_id')
            ->join('room', 'room.Id', '=', 'room_invoice.Room_id')
            ->join('hotel', 'hotel.Id', '=', 'room.Hotel_id')
            ->get()
            ->paginate(5);

        $taxi_invoices = TaxiInvoice::join('invoice', 'invoice.Id', '=', 'taxi_invoice.Invoice_id')
            ->get()
            ->paginate(5);

        return view('invoice.index', [
            'from_date' => null,
            'to_date' => null,
            'flight_invoices' => $flight_invoices,
            'bus_invoices' => $bus_invoices,
            'room_invoices' => $room_invoices,
            'taxi_invoices' => $taxi_invoices,
        ]);
    }

    public function filter(Request $request){
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $to_1_date = date('Y-m-d', strtotime($to_date . ' +1 day'));
        
        $flight_invoices = FlightInvoice::join('invoice', 'invoice.Id', '=', 'flight_invoice.Invoice_id')
            ->whereBetween('invoice.created_at', [$from_date, $to_1_date])
            ->get()
            ->paginate(5);
        // dd($flight_invoices);
        $bus_invoices = BusInvoice::join('invoice', 'invoice.Id', '=', 'bus_invoice.Invoice_id')
            ->whereBetween('invoice.created_at', [$from_date, $to_1_date])
            ->get()
            ->paginate(5);
        $room_invoices = RoomInvoice::join('invoice', 'invoice.Id', '=', 'room_invoice.Invoice_id')
            ->join('room', 'room.Id', '=', 'room_invoice.Room_id')
            ->join('hotel', 'hotel.Id', '=', 'room.Hotel_id')
            ->whereBetween('invoice.created_at', [$from_date, $to_1_date])
            ->get()
            ->paginate(5);
        
        $taxi_invoices = TaxiInvoice::join('invoice', 'invoice.Id', '=', 'taxi_invoice.Invoice_id')
            ->whereBetween('invoice.created_at', [$from_date, $to_1_date])
            ->get()
            ->paginate(5);

        return view('invoice.index', [
            'from_date' => $from_date,
            'to_date' => $to_date,
            'flight_invoices' => $flight_invoices,
            'bus_invoices' => $bus_invoices,
            'room_invoices' => $room_invoices,
            'taxi_invoices' => $taxi_invoices,
        ]);
    }
    public function changeStatus(string $id){
        $invoice = Invoice::find($id);
        $new_status = $invoice->pay_status == 0 ? 1 : 0;
        Invoice::where('Id', $id)
            ->update(['pay_status' => $new_status]);
            
        return redirect()->route('invoice.index');
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
