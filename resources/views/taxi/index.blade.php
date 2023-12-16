@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('taxi.create') }}" class="btn btn-primary">Add Taxi</a>
        </div>
        <div class="col-10 mb-3">
            <form action="{{ route('taxi.search') }}" method="GET">
                <div class="row justify-content-end">
                    <div class="col-4 d-flex align-items-center gap-2">
                        <div>Name: </div>
                        <input type="text" name="Name" class="form-control" placeholder="Name"
                            value="{{ request()->get('Name') }}">
                    </div>
                    <div class="col-4 d-flex align-items-center gap-2">
                        <div>PickPoint: </div>
                        <select name="PickPoint" class="form-select">
                            <option selected value="">All</option>
                            @foreach ($TaxiAreas as $TaxiArea)
                            <option value="{{ $TaxiArea->Id }}">{{ $TaxiArea->PickPoint }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 d-flex align-items-center gap-2">
                        <div>Type: </div>
                        <select name="Type" class="form-select">
                            <option selected value="">All</option>
                            <option value="0">Có tài xế</option>
                            <option value="1">Tự lái</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary">Search</button>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-danger" type="reset">Clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <caption>
            @if ($taxis->total() > 0)
            {{ $taxis->total() }} taxis(s) found.
            @else
            No taxi found
            @endif
        </caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Luggage</th>
            <th>NumofSeat</th>
            <th>Price</th>
            <th>State</th>
            <th>Type</th>
            <th>PickPoint</th>
            <th>Action</th>
        </tr>
        @foreach ($taxis as $taxi)
        <tr>
            <td>{{ $taxi->Id }}</td>
            <td>{{ $taxi->Name }}</td>
            <td>{{ $taxi->Luggage }}</td>
            <td>{{ $taxi->NumofSeat }}</td>
            <td>{{ $taxi->Price }}</td>
            <td>{{ $taxi->State }}</td>
            <td>{{ $taxi->Type }}</td>
            <td>{{ $taxi->PickPoint }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('taxi.edit', $taxi->Id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('taxi.destroy', $taxi->Id) }}" method="POST">
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
        {!! $taxis->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection