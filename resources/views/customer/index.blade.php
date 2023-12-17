@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
        </div>
        <div class="col-10 mb-3">
            <form action="{{ route('customer.search') }}" method="GET">
                <div class="row justify-content-end">
                    <div class="col-3 d-flex align-items-center gap-2">
                        <div>Name: </div>
                        <input type="text" name="Name" class="form-control" placeholder="Name"
                            value="{{ request()->get('Name') }}">
                    </div>
                    <div class="col-3 d-flex align-items-center gap-2">
                        <div>Phone: </div>
                        <input type="text" name="Phone" class="form-control" placeholder="Phone"
                            value="{{ request()->get('Phone') }}">
                    </div>
                    <div class="col-3 d-flex align-items-center gap-2">
                        <div>Email: </div>
                        <input type="text" name="Email" class="form-control" placeholder="Email"
                            value="{{ request()->get('Email') }}">
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <caption>
            @if ($customers->total() > 0)
            {{ $customers->total() }} customer(s) found.
            @else
            No customer found
            @endif
        </caption>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Nationality</th>
            <th>PassortID</th>
            <th>PassortNumber</th>
            <th>Passport Nation</th>
            <th>Passport Expiration</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->Id }}</td>
            <td>{{ $customer->Name }}</td>
            <td>{{ $customer->Sex }}</td>
            <td>{{ $customer->Birthday }}</td>
            <td>{{ $customer->Phone }}</td>
            <td>{{ $customer->Email }}</td>
            <td>{{ $customer->Nationality }}</td>
            <td>{{ $customer->PassportID }}</td>
            <td>{{ $customer->PassportNumber }}</td>
            <td>{{ $customer->PassportNation }}</td>
            <td>{{ $customer->PassportExpiration }}</td>
            <td>{{ $customer->Password }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('customer.edit', $customer->PassportID) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->PassportID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this item?')"
                            type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $customers->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection