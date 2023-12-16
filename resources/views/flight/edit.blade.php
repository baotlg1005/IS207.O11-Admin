@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('flight.update', $flight->ai_id) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2>Cập nhật chuyến bay</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtFrom">Nơi đi</label>
                <input type="text" class="form-control" name="From" id="txtFrom" placeholder=""
                    value="{{$flight->From}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtTo">Nơi đến</label>
                <input type="text" class="form-control" name="To" id="txtTo" placeholder="" value="{{$flight->To}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtDate">Ngày bay</label>
                <input type="date" class="form-control" name="Date" id="txtDate" placeholder=""
                    value="{{$flight->Date}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtDepartureTime">Giờ khởi hành</label>
                <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder=""
                    value="{{$flight->DepartureTime}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtArrivalTime">Giờ đến</label>
                <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder=""
                    value="{{$flight->ArrivalTime}}">
            </div>
            <div class="form-group">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder=""
                    value="{{$flight->Price}}">
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtTravelTime">Thời gian bay</label>
                <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder=""
                    value="{{$flight->TravelTime}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtStop">Trạm dừng</label>
                <input type="text" class="form-control" name="Stop/Direct" id="txtStop" placeholder=""
                    value="{{$flight['Stop/Direct']}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtName">Tên hãng bay</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder=""
                    value="{{$flight->Name}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtSeatClass">Hạng ghế</label>
                <input type="text" class="form-control" name="SeatClass" id="txtSeatClass" placeholder=""
                    value="{{$flight->SeatClass}}">
            </div>
            <div class="form-group mb-2">
                <label for="txtNumSeat">Số ghế</label>
                <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder=""
                    value="{{$flight->NumSeat}}">
            </div>
            <div class="input-group-btn mt-auto">
                <button id="update-btn" class="btn btn-success w-25 fw-bold" type="submit">Cập Nhật</button>
            </div>
        </div>

        <br />
    </form>
</div>
@endsection