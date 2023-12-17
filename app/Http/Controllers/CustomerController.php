<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Passport;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::join('passport', 'user.Passport_id', '=', 'passport.Id')
            ->select('user.*', 'passport.Id as PassportID', 'passport.Number as PassportNumber', 'passport.Expiration as PassportExpiration', 'passport.Nation as PassportNation')
            ->paginate(5);
        return view('customer.index', [
            'customers' => $customers,
        ]);
    }

    public function search(Request $request)
    {
        $name = $request->get('Name');
        $phone = $request->get('Phone');
        $email = $request->get('Email');
        $customers = Customer::join('passport', 'user.Passport_id', '=', 'passport.Id')
            ->select('user.*', 'passport.Id as PassportID', 'passport.Number as PassportNumber', 'passport.Expiration as PassportExpiration', 'passport.Nation as PassportNation')
            ->where('user.Name', 'LIKE', '%' . $name . '%')
            ->where('user.Phone', 'LIKE', '%' . $phone . '%')
            ->where('user.Email', 'LIKE', '%' . $email . '%')
            ->paginate(5);
        return view('customer.index', [
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $passportId = uniqid('PS');

        $passport = new Passport();
        $passport->Number = $request->PassportNumber;
        $passport->Nation = $request->PassportNation;
        $passport->Expiration = $request->PassportExpiration;
        $passport->Id = $passportId;
        $passport->save();

        $customer = new Customer();
        $customer->Name = $request->Name;
        $customer->Phone = $request->Phone;
        $customer->Email = $request->Email;
        $customer->Sex = $request->Sex;
        $customer->Birthday = $request->Birthday;
        $customer->Nationality = $request->Nationality;
        $customer->Password = $request->Password;
        $customer->Passport_id = $passportId;
        $customer->Id = uniqid('U');
        $customer->save();

        return redirect()->route('customer.index');
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
        $customer = Customer::join('passport', 'user.Passport_id', '=', 'passport.Id')
            ->select('user.*', 'passport.Id as PassportID', 'passport.Number as PassportNumber', 'passport.Expiration as PassportExpiration', 'passport.Nation as PassportNation')
            ->where('user.Passport_id', '=', $id)
            ->first();
        return view('customer.edit', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::where('Passport_id', $id)->update([
            'Name' => $request->Name,
            'Phone' => $request->Phone,
            'Sex' => $request->Sex,
            'Birthday' => $request->Birthday,
            'Email' => $request->Email,
            'Nationality' => $request->Nationality,
            'Password' => $request->Password,
        ]);

        $passport = Passport::where('Id', $id)->update([
            'Number' => $request->PassportNumber,
            'Nation' => $request->PassportNation,
            'Expiration' => $request->PassportExpiration,
        ]);

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Flight::where( 'ai_id', $id )->delete();
        // return redirect()->route('flight.index');
        Customer::where('Passport_id', $id)->delete();
        Passport::where('Id', $id)->delete();
        return redirect()->route('customer.index');
    }
}
