@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('bus.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm chuyến xe</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtFrom">Điểm đi</label>
                <input type="text" class="form-control" name="From" id="txtFrom" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtTo">Điểm đến</label>
                <input type="text" class="form-control" name="To" id="txtTo" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtDate">Ngày đi</label>
                <input type="date" class="form-control" name="Date" id="txtDate" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtDepartureTime">Giờ khởi hành</label>
                <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtArrivalTime">Giờ đến</label>
                <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder="">
            </div>
            <div class="form-group mb-4">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder="">
            </div>
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm chuyến bay</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtTravelTime">Thời gian đi</label>
                <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtPickPoint">Điểm lên xe</label>
                <input type="text" class="form-control" name="PickPoint" id="txtPickPoint" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtDesPoint">Điểm xuống xe</label>
                <input type="text" class="form-control" name="DesPoint" id="txtDesPoint" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtName">Tên hãng xe</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtSeatCount">Loại xe</label>
                <input type="text" class="form-control" name="SeatCount" id="txtSeatCount" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="txtNumSeat">Số ghế</label>
                <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder="">
            </div>
        </div>
        <br />
    </form>
</div>
@endsection