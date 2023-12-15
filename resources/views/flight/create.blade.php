@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('flight.store') }}" method = "POST">
            @csrf
            <input type="hidden" name="action" value="create">
            <h2>Thêm chuyến bay</h2>
            <br />
            <div class="form-group">
                <label for="txtID">Mã chuyến bay</label>
                <input type="text" class="form-control" name="ID" id="txtID" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtFrom">Nơi đi</label>
                <input type="text" class="form-control" name="From" id="txtFrom" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtTo">Nơi đến</label>
                <input type="text" class="form-control" name="To" id="txtTo" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtDate">Ngày bay</label>
                <input type="date" class="form-control" name="Date" id="txtDate" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtDepartureTime">Giờ khởi hành</label>
                <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtArrivalTime">Giờ đến</label>
                <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtTravelTime">Thời gian bay</label>
                <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtStop">Trực tiếp</label>
                <input type="text" class="form-control" name="Stop" id="txtStop" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtName">Tên hãng bay</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtSeatClass">Hạng ghế</label>
                <input type="text" class="form-control" name="SeatClass" id="txtSeatClass" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtNumSeat">Số ghế</label>
                <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder="">
            </div>
            <div class="input-group-btn">
                <button class="btn btn-danger" type="submit">Thêm chuyến bay</button>
            </div>
            <br />
        </form>
    </div>
@endsection
