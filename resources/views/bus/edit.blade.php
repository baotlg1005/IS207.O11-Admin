@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('bus.update', $bus->Id) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2>Cập nhật chuyến xe</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtFrom">Điểm đi</label>
                <input type="text" class="form-control" name="From" id="txtFrom" placeholder=""
                    value="{{$bus->From}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtTo">Điểm đến</label>
                <input type="text" class="form-control" name="To" id="txtTo" placeholder="" value="{{$bus->To}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtDate">Ngày đi</label>
                <input type="date" class="form-control" name="Date" id="txtDate" placeholder=""
                    value="{{$bus->Date}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtDepartureTime">Giờ khởi hành</label>
                <input type="time" class="form-control" name="DepartureTime" id="txtDepartureTime" placeholder=""
                    value="{{$bus->DepartureTime}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtArrivalTime">Giờ đến</label>
                <input type="time" class="form-control" name="ArrivalTime" id="txtArrivalTime" placeholder=""
                    value="{{$bus->ArrivalTime}}" required>
            </div>
            <div class="form-group mb-4">
                <label for="txtPrice">Giá vé</label>
                <input type="text" class="form-control" name="Price" id="txtPrice" placeholder=""
                    value="{{$bus->Price}}" required>
            </div>
            <div class="input-group-btn mt-auto">
                <button id="update-btn" class="btn btn-success w-25 fw-bold" type="submit">Cập Nhật</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <div class="col d-flex flex-column">
        <div class="form-group mb-2">
                <label for="txtTravelTime">Thời gian đi</label>
                <input type="text" class="form-control" name="TravelTime" id="txtTravelTime" placeholder=""
                    value="{{$bus->TravelTime}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtPickPoint">Điểm lên xe</label>
                <input type="text" class="form-control" name="PickPoint" id="txtPickPoint" placeholder=""
                    value="{{$bus->PickPoint}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtDesPoint">Điểm xuống xe</label>
                <input type="text" class="form-control" name="DesPoint" id="txtDesPoint" placeholder=""
                    value="{{$bus->DesPoint}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtName">Tên hãng xe</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="" value="{{$bus->Name}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtSeatCount">Loại xe</label>
                <input type="text" class="form-control" name="SeatCount" id="txtSeatCount" placeholder=""
                    value="{{$bus->SeatCount}}" required>
            </div>
            <div class="form-group">
                <label for="txtNumSeat">Số ghế</label>
                <input type="text" class="form-control" name="NumSeat" id="txtNumSeat" placeholder=""
                    value="{{$bus->NumSeat}}" required>
            </div>
        </div>

        <br />
    </form>
</div>
@endsection