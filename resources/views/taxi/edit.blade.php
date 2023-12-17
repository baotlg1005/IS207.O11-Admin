@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('taxi.update', $taxi->Id) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2>Cập nhật taxi</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtName">Tên taxi</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder=""
                    value="{{ $taxi->Name }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtLuggage">Số lượng hành lý</label>
                <input type="text" class="form-control" name="Luggage" id="txtLuggage" placeholder=""
                    value="{{ $taxi->Luggage }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtNumofSeat">Số lượng ghế</label>
                <input type="text" class="form-control" name="NumofSeat" id="txtNumofSeat" placeholder=""
                    value="{{ $taxi->NumofSeat }}" required>
            </div>
            <div class="form-group">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder=""
                    value="{{ $taxi->Price }}" required>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtState">Trạng thái</label>
                <select name="State" class="form-select" id="txtState">
                    <option value="Free" {{ $taxi->State == 'Free' ? 'selected' : '' }}>Free</option>
                    <option value="Rented" {{ $taxi->State == 'Rented' ? 'selected' : '' }}>Rented</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtType">Loại taxi</label>
                <select name="Type" class="form-select" id="txtType">
                    <option value="0" {{ $taxi->Type_id == 0 ? 'selected' : '' }}>Có tài xế</option>
                    <option value="1" {{ $taxi->Type_id == 1 ? 'selected' : '' }}>Tự lái</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtPickPoint">Khu vực</label>
                <select name="PickPoint" class="form-select" id="txtPickPoint">
                    @foreach ($TaxiAreas as $TaxiArea)
                    <option value="{{ $TaxiArea->Id }}" {{ $taxi->PickPoint == $TaxiArea->Id ? 'selected' : '' }}>
                        {{ $TaxiArea->PickPoint }}</option>
                    @endforeach
                </select>
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