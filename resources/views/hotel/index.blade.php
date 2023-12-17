@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('hotel.create') }}" class="btn btn-primary">Add Hotel</a>
        </div>
        <div class="col-10 mb-3">
                <form action="{{ route('hotel.search') }}" method="GET">
                    <div class="row justify-content-end">
                        <div class="col-4 d-flex align-items-center gap-2">
                            <div>Name: </div>
                            <input type="text" name="Name" class="form-control" placeholder="Name" value="{{ request()->get('Name') }}">
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <div>Area: </div>
                            <input type="text" name="Area" class="form-control" placeholder="Area" value="{{ request()->get('Area') }}">
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
            @if ($hotels->total() > 0)
                {{ $hotels->total() }} hotel(s) found.
            @else
                No hotel found
            @endif
        </caption>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Area</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </tr>
        @foreach ($hotels as $hotel)
        <tr>
            <td>{{ $hotel->Id }}</td>
            <td>{{ $hotel->Name }}</td>
            <td>{{ $hotel->Address }}</td>
            <td>{{ $hotel->Area }}</td>
            <td>{{ $hotel->created_at }}</td>
            <td>{{ $hotel->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('hotel.edit', $hotel->Id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('hotel.destroy', $hotel->Id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" 
                        onclick="return confirm('Are you sure you want to delete this item?')" 
                        type="submit">Delete</button>
                    </form>
                </div>
            </td>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
    {!! $hotels->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection
