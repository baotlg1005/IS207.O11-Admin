@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('flight.create') }}" class="btn btn-primary">Add Flight</a>
        </div>
        <div class="col-10 mb-3">
                <form action="{{ route('flight.search') }}" method="GET">
                    <div class="row justify-content-end">
                        <div class="col-2 d-flex align-items-center gap-2">
                            <div>Name: </div>
                            <input type="text" name="Name" class="form-control" placeholder="Name" value="{{ request()->get('Name') }}">
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <div>From: </div>
                            <input type="text" name="From" class="form-control" placeholder="From" value="{{ request()->get('From') }}">
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <div>To: </div>
                            <input type="text" name="To" class="form-control" placeholder="To" value="{{ request()->get('To') }}">
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
            @if ($flights->total() > 0)
                {{ $flights->total() }} flight(s) found.
            @else
                No flight found
            @endif
        </caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>From</th>
            <th>To</th>
            <th>DepartureTime</th>
            <th>ArrivalTime</th>
            <th>Stop/Direct</th>
            <th>SeatClass</th>
            <th>NumSeat</th>
            <th>Price</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        @foreach ($flights as $flight)
        <tr>
            <td>{{ $flight->ID }}</td>
            <td>{{ $flight->Name }}</td>
            <td>{{ $flight->From }}</td>
            <td>{{ $flight->To }}</td>
            <td>{{ $flight->DepartureTime }}</td>
            <td>{{ $flight->ArrivalTime }}</td>
            <td>{{ $flight['Stop/Direct'] }}</td>
            <td>{{ $flight->SeatClass }}</td>
            <td>{{ $flight->NumSeat }}</td>
            <td>{{ $flight->Price }}</td>
            <td>{{ $flight->created_at }}</td>
            <td>{{ $flight->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('flight.edit', $flight->ai_id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('flight.destroy', $flight->ai_id) }}" method="POST">
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
        {!! $flights->links() !!}
    </div>
</div>
</div>
@endsection
