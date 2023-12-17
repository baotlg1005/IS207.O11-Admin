@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('flight.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm chuyến bay</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtFrom">Nơi đi</label>
                <input type="text" class="form-control" name="From" id="txtFrom" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtTo">Nơi đến</label>
                <input type="text" class="form-control" name="To" id="txtTo" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtDate">Ngày bay</label>
                <input type="date" class="form-control" name="Date" id="txtDate" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtDepartureTime">Giờ khởi hành</label>
                <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtArrivalTime">Giờ đến</label>
                <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder="" required>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtTravelTime">Thời gian bay</label>
                <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtStop">Trạm dừng</label>
                <input type="text" class="form-control" name="StopDirect" id="txtStop" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtName">Tên hãng bay</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtSeatClass">Hạng ghế</label>
                <input type="text" class="form-control" name="SeatClass" id="txtSeatClass" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtNumSeat">Số ghế</label>
                <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder="" required>
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