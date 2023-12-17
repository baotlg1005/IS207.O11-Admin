@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('taxiarea.update', $taxiArea->Id) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2 class="mb-4">Cập nhật khu vực</h2>
        <br />
        <div class="col">
            <div class="form-group">
                <label for="txtPickPoint">Khu vực hoạt động</label>
                <input type="text" class="form-control" id="txtPickPoint" name="PickPoint"
                    value="{{ $taxiArea->PickPoint }}">
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="input-group-btn mt-auto">
                <button id="update-btn" class="btn btn-success w-25 fw-bold" type="submit">Cập Nhật</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <br />
    </form>
</div>
@endsection