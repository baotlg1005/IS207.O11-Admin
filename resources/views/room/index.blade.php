@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('room.create') }}" class="btn btn-primary">Add Room</a>
        </div>
        <div class="col-10 mb-3">
            <form action="{{ route('room.search') }}" method="GET">
                <div class="row justify-content-end">
                    <div class="col-4 d-flex align-items-center gap-2">
                        <div>Name: </div>
                        <input type="text" name="Name" class="form-control" placeholder="Name"
                            value="{{ request()->get('Name') }}">
                    </div>
                    <div class="col-2 d-flex align-items-center gap-2">
                        <div>State: </div>
                        <select name="State" class="form-select">
                            <option selected value="">All</option>
                            <option value="Free">Free</option>
                            <option value="Rented">Rented</option>
                        </select>
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
            @if ($rooms->total() > 0)
            {{ $rooms->total() }} room(s) found.
            @else
            No room found
            @endif
        </caption>
        <tr>
            <th>ID</th>
            <th>Hotel_id</th>
            <th>Name</th>
            <th>Max</th>
            <th>Price</th>
            <th>State</th>
            <th>Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ $room->Id }}</td>
            <td>{{ $room->Hotel_id }}</td>
            <td>{{ $room->Name }}</td>
            <td>{{ $room->Max }}</td>
            <td>{{ $room->Price }}</td>
            <td>{{ $room->State }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('room.edit', $room->Id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('room.destroy', $room->Id) }}" method="POST">
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
        {!! $rooms->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection