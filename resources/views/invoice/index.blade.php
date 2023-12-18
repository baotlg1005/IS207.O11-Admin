@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <form action="{{ route('invoice.filter') }}" method="GET" role="filter">
            <div class="row justify-content-end">
                <div class="col-md-4 d-flex">
                    <div>From Date: </div>
                    <input type="date" class="form-control" name="from_date" placeholder="From Date" value="{{$from_date}}">
                </div>
                <div class="col-md-4 d-flex">
                    <div>To Date: </div>
                    <input type="date" class="form-control" name="to_date" placeholder="To Date" value="{{$to_date}}">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-success">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <div>
        <h1>Hoá đơn vé máy bay</h1>
    </div>
    <table class="table table-striped">
        <caption>
            @if ($flight_invoices->total() > 0)
                {{ $flight_invoices->total() }} invoice(s) found.
            @else
                No invoice found
            @endif
        </caption>
        <thead>
            <tr>
                <th>Mã hoá đơn</th>
                <th>Mã chuyến bay</th>
                <th>Mã người đặt</th>
                <th>Tổng tiền</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flight_invoices as $invoice)
            <tr>
                <td>{{ $invoice->Id }}</td>
                <td>{{ $invoice->Flight_id }}</td>
                <td>{{ $invoice->User_id }}</td>
                <td>{{ $invoice->Total }}</td>
                <td>{{ $invoice->created_at }}</td>
                <td>
                    @if ($invoice->pay_status == 0)
                        Chưa thanh toán
                    @else
                        Đã thanh toán
                    @endif
                </td>
                <td>
                    <a href="{{ route('invoice.changeStatus', $invoice->Id) }}" class="btn btn-primary">Chuyển trạng thái</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $flight_invoices->links() !!}
    </div>
    <div>
        <h1>Hoá đơn vé xe khách</h1>
        <table class="table table-striped">
            <caption>
                @if ($bus_invoices->total() > 0)
                    {{ $bus_invoices->total() }} invoice(s) found.
                @else
                    No invoice found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã xe khách</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bus_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Bus_id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td>{{ $invoice->created_at }}</td>
                    <td>
                        @if ($invoice->pay_status == 0)
                            Chưa thanh toán
                        @else
                            Đã thanh toán
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('invoice.changeStatus', $invoice->Id) }}" class="btn btn-primary">Chuyển trạng thái</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $bus_invoices->links() !!}
        </div>
    </div>
    <div>
        <h1>Hoá đơn xe dịch vụ</h1>
        <table class="table table-striped">
            <caption>
                @if ($taxi_invoices->total() > 0)
                    {{ $taxi_invoices->total() }} invoice(s) found.
                @else
                    No invoice found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã xe khách</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taxi_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Taxi_id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td>{{ $invoice->created_at }}</td>
                                    <td>
                    @if ($invoice->pay_status == 0)
                        Chưa thanh toán
                    @else
                        Đã thanh toán
                    @endif
                </td>
                <td>
                    <a href="{{ route('invoice.changeStatus', $invoice->Id) }}" class="btn btn-primary">Chuyển trạng thái</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $taxi_invoices->links() !!}
        </div>
    </div>
    <div>
        <h1>Hoá đơn phòng khách sạn</h1>
        <table class="table table-striped">
            <caption>
                @if ($room_invoices->total() > 0)
                    {{ $room_invoices->total() }} invoice(s) found.
                @else
                    No invoice found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã phòng</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($room_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Room_id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td>{{ $invoice->created_at }}</td>
                                    <td>
                    @if ($invoice->pay_status == 0)
                        Chưa thanh toán
                    @else
                        Đã thanh toán
                    @endif
                </td>
                <td>
                    <a href="{{ route('invoice.changeStatus', $invoice->Id) }}" class="btn btn-primary">Chuyển trạng thái</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $room_invoices->links() !!}
        </div>
    </div>
</div>
@endsection
