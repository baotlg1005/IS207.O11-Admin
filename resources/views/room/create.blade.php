@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('room.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm phòng khách sạn</h2>
        <br />
        <div class="col">
            <div class="form-group mb-3">
                <label for="txtName" class="form-label">Tên khách sạn</label>
                <select class="form-select" aria-label="Default select example" name="Hotel_id">
                    @foreach($hotels as $hotel)
                    <option value="{{ $hotel->Id }}">{{ $hotel->Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="txtName" class="form-label">Tên phòng</label>
                <input type="text" class="form-control" id="txtName" name="Name" placeholder="Tên khách sạn" required>
            </div>
            <div class="form-group">
                <label for="txtMax" class="form-label">Số lượng người</label>
                <input type="number" class="form-control" id="txtMax" name="Max" placeholder="Số lượng người" required>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-3">
                <label for="txtPrice" class="form-label">Giá</label>
                <input type="text" class="form-control" id="txtPrice" name="Price" placeholder="Giá" required>
            </div>
            <div class="form-group">
                <label for="txtState" class="form-label">Trạng thái</label>
                <select class="form-select" name="State">
                    <option value="Free">Free</option>
                    <option value="Rented">Rented</option>
                </select>
            </div>
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm phòng</button>
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