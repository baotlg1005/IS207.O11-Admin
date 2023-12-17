@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-2 mb-3">
            <a href="{{ route('taxiarea.create') }}" class="btn btn-primary">Add Taxi Area</a>
        </div>
        <div class="col-10 mb-3">
            <form action="{{ route('taxiarea.search') }}" method="GET">
                <div class="row justify-content-end">
                    <div class="col-4 d-flex align-items-center gap-2">
                        <div>PickPoint: </div>
                        <input type="text" name="PickPoint" class="form-control" placeholder="PickPoint"
                            value="{{ request()->get('PickPoint') }}">
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
            @if ($taxiAreas->total() > 0)
            {{ $taxiAreas->total() }} taxi area(s) found.
            @else
            No taxi area found
            @endif
        </caption>
        <tr>
            <th>ID</th>
            <th>PickPoint</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </tr>
        @foreach ($taxiAreas as $taxiArea)
        <tr>
            <td>{{ $taxiArea->Id }}</td>
            <td>{{ $taxiArea->PickPoint }}</td>
            <td>{{ $taxiArea->created_at }}</td>
            <td>{{ $taxiArea->updated_at }}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <a href="{{ route('taxiarea.edit', $taxiArea->Id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('taxiarea.destroy', $taxiArea->Id) }}" method="POST">
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
        {!! $taxiAreas->appends(request()->input())->links() !!}
    </div>
</div>
</div>
@endsection