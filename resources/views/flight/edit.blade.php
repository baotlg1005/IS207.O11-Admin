@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('flight.update') }}" method = "POST">
        @csrf
        @method('PUT')
        <h2>Cập nhật chuyến bay</h2>
        <br />
        <div class="form-group">
            <label for="txtID">Mã chuyến bay</label>
            <input type="text" class="form-control" name="ID" id="txtID" placeholder="" value="{{$flight->ID}}">
        </div>
        <div class="form-group">
            <label for="txtFrom">Nơi đi</label>
            <input type="text" class="form-control" name="From" id="txtFrom" placeholder="" value="{{$flight->From}}">
        </div>
        <div class="form-group">
            <label for="txtTo">Nơi đến</label>
            <input type="text" class="form-control" name="To" id="txtTo" placeholder="" value="{{$flight->To}}">
        </div>
        <div class="form-group">
            <label for="txtDate">Ngày bay</label>
            <input type="date" class="form-control" name="Date" id="txtDate" placeholder="" value="{{$flight->Date}}">
        </div>
        <div class="form-group">
            <label for="txtDepartureTime">Giờ khởi hành</label>
            <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder="" value="{{$flight->DepartureTime}}">
        </div>
        <div class="form-group">
            <label for="txtArrivalTime">Giờ đến</label>
            <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder="" value="{{$flight->ArrivalTime}}">
        </div>
        <div class="form-group">
            <label for="txtTravelTime">Thời gian bay</label>
            <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder="" value="{{$flight->TravelTime}}">
        </div>
        <div class="form-group">
            <label for="txtStop">Trực tiếp</label>
            <input type="text" class="form-control" name="Stop/Direct" id="txtStop" placeholder="" value="{{$flight["Stop/Direct"]}}">
        </div>
        <div class="form-group">
            <label for="txtName">Tên hãng bay</label>
            <input type="text" class="form-control" name="Name" id="txtName" placeholder="" value="{{$flight->Name}}">
        </div>
        <div class="form-group">
            <label for="txtSeatClass">Hạng ghế</label>
            <input type="text" class="form-control" name="SeatClass" id="txtSeatClass" placeholder="" value="{{$flight->SeatClass}}">
        </div>
        <div class="form-group">
            <label for="txtNumSeat">Số ghế</label>
            <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder="" value="{{$flight->NumSeat}}">
        </div>
        <div class="form-group">
            <label for="txtPrice">Giá vé</label>
            <input type="text" class="form-control" name="Price" id="txtPrice" placeholder="" value="{{$flight->Price}}">
        </div>
        <div class="input-group-btn">
            <button id="update-btn" class="btn btn-danger" type="submit">Cập Nhật</button>
          </div>
        <br />
    </form>
</div>
@endsection
