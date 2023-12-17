@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('hotel.update', $hotel->Id) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2>Cập nhật khách sạn</h2>
        <br />
        <div class="col">
            <div class="form-group mb-3">
                <label for="txtName" class="form-label">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtName" name="Name" placeholder="Tên khách sạn" required
                value="{{$hotel->Name}}">
            </div>
            <div class="form-group">
                <label for="txtAddress" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="txtAddress" name="Address" placeholder="Địa chỉ" required
                value="{{$hotel->Address}}">
            </div>
        </div>
        <div class="col d-flex flex-column">
        <div class="form-group">
                <label for="txtArea" class="form-label">Khu vực</label>
                <input type="text" class="form-control" id="txtArea" name="Area" placeholder="Khu vực" required
                value="{{$hotel->Area}}">
            </div>
            <div class="input-group-btn mt-auto">
                <button id="update-btn" class="btn btn-success w-25 fw-bold" type="submit">Cập Nhật</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>

        <br />
    </form>
</div>
@endsection