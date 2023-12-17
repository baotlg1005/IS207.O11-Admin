@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('hotel.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm khách sạn</h2>
        <br />
        <div class="col">
            <div class="form-group mb-3">
                <label for="txtName" class="form-label">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtName" name="Name" placeholder="Tên khách sạn" required>
            </div>
            <div class="form-group">
                <label for="txtAddress" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="txtAddress" name="Address" placeholder="Địa chỉ" required>
            </div>
        </div>
        <div class="col d-flex flex-column">
        <div class="form-group">
                <label for="txtArea" class="form-label">Khu vực</label>
                <input type="text" class="form-control" id="txtArea" name="Area" placeholder="Khu vực" required>
            </div>
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm chuyến bay</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <br />
    </form>
</div>
@endsection

<!-- Name	
Address	
Area-->