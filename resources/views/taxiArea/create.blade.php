@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('taxiarea.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2 class="mb-4">Thêm khu vực</h2>
        <br />
        <div class="col">
            <div class="form-group">
                <label for="txtPickPoint">Khu vực hoạt động</label>
                <input type="text" class="form-control" name="PickPoint" id="txtPickPoint" placeholder="" required>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm khu vực</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
</div>
<br />
</form>
</div>
@endsection