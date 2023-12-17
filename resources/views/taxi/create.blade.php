@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('taxi.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm taxi</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtName">Tên taxi</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtLuggage">Số lượng hành lý</label>
                <input type="text" class="form-control" name="Luggage" id="txtLuggage" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtNumofSeat">Số lượng ghế</label>
                <input type="text" class="form-control" name="NumofSeat" id="txtNumofSeat" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder="">
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtState">Trạng thái</label>
                <select name="State" class="form-select" id="txtState">
                    <option value="Free">Free</option>
                    <option value="Rented">Rented</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtType">Loại taxi</label>
                <select name="Type" class="form-select" id="txtType">
                    <option value="0">Có tài xế</option>
                    <option value="1">Tự lái</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtPickPoint">Khu vực</label>
                <select name="PickPoint" class="form-select" id="txtPickPoint">
                    @foreach ($TaxiAreas as $TaxiArea)
                    <option value="{{ $TaxiArea->Id }}">{{ $TaxiArea->PickPoint }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm taxi</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <br />
    </form>
</div>
@endsection