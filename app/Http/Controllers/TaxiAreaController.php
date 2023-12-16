<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaxiArea;

class TaxiAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxiAreas = TaxiArea::get()
            ->paginate(5);
        return view('taxiarea.index', [
            'taxiAreas' => $taxiAreas,
        ]);
    }

    public function search(Request $request)
    {
        $pickPoint = $request->get('PickPoint');
        $taxiAreas = TaxiArea::where('PickPoint', 'LIKE', '%'.$pickPoint.'%')
            ->paginate(5);
        return view('taxiarea.index', [
            'taxiAreas' => $taxiAreas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taxiarea.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $taxiArea = new TaxiArea();
        $taxiArea->PickPoint = $request->PickPoint;
        $taxiArea->save();
        return redirect()->route('taxiarea.index');
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
        $taxiArea = TaxiArea::where('Id', $id)->first();
        return view('taxiarea.edit', [
            'taxiArea' => $taxiArea
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $taxiArea = TaxiArea::where('Id', $id)->update([
            'PickPoint' => $request->PickPoint,
        ]);
        return redirect()->route('taxiarea.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // if (TaxiArea::where('Id', $id)->delete()) {
        //     alert("Không thể xóa khu vực hoạt động này vì có taxi đang hoạt động ở khu vực này");
        //     return redirect()->route('taxiarea.index');
        // }
        // else {
        //     return redirect()->route('taxiarea.index');
        // }
        try {
            TaxiArea::where('Id', $id)->delete();
            return redirect()->route('taxiarea.index');
        } catch (\Throwable $th) {
            return redirect()->route('taxiarea.index');
        }

    }
}
