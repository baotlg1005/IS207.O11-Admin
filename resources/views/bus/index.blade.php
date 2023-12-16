@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('bus.create') }}" class="btn btn-primary">Add Bus</a>
        </div>
        <div class="col-10 mb-3">
                <form action="{{ route('bus.search') }}" method="GET">
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
            @if ($buses->total() > 0)
                {{ $buses->total() }} bus(es) found.
            @else
                No Bus found
            @endif
        </caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>From</th>
            <th>To</th>
            <th>DepartureTime</th>
            <th>ArrivalTime</th>
            <th>PickPoint</th>
            <th>DesPoint</th>
            <th>SeatCount</th>
            <th>NumSeat</th>
            <th>Price</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        @foreach ($buses as $bus)
        <tr>
            <td>{{ $bus->Id }}</td>
            <td>{{ $bus->Name }}</td>
            <td>{{ $bus->From }}</td>
            <td>{{ $bus->To }}</td>
            <td>{{ $bus->DepartureTime }}</td>
            <td>{{ $bus->ArrivalTime }}</td>
            <td>{{ $bus->PickPoint }}</td>
            <td>{{ $bus->DesPoint }}</td>
            <td>{{ $bus->SeatCount }}</td>
            <td>{{ $bus->NumSeat }}</td>
            <td>{{ $bus->Price }}</td>
            <td>{{ $bus->created_at }}</td>
            <td>{{ $bus->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('bus.edit', $bus->ai_id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('bus.destroy', $bus->ai_id) }}" method="POST">
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
    {!! $buses->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection
