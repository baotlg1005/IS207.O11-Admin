@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Hoá đơn vé máy bay</h1>
    </div>
    <table class="table table-striped">
        <caption>
            @if ($flight_invoices->total() > 0)
                {{ $flight_invoices->total() }} flight(s) found.
            @else
                No flight found
            @endif
        </caption>
        <thead>
            <tr>
                <th>Mã hoá đơn</th>
                <th>Mã chuyến bay</th>
                <th>Mã người đặt</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flight_invoices as $invoice)
            <tr>
                <td>{{ $invoice->Id }}</td>
                <td>{{ $invoice->Flight_Id }}</td>
                <td>{{ $invoice->User_id }}</td>
                <td>{{ $invoice->Total }}</td>
                <td> Chưa thanh toán </td>
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
                    {{ $bus_invoices->total() }} flight(s) found.
                @else
                    No flight found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã xe khách</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bus_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Bus_Id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td> Chưa thanh toán </td>
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
                    {{ $taxi_invoices->total() }} flight(s) found.
                @else
                    No flight found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã xe khách</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taxi_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Taxi_Id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td> Chưa thanh toán </td>
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
                    {{ $room_invoices->total() }} flight(s) found.
                @else
                    No flight found
                @endif
            </caption>
            <thead>
                <tr>
                    <th>Mã hoá đơn</th>
                    <th>Mã phòng</th>
                    <th>Mã người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($room_invoices as $invoice)
                <tr>
                    <td>{{ $invoice->Id }}</td>
                    <td>{{ $invoice->Room_Id }}</td>
                    <td>{{ $invoice->User_id }}</td>
                    <td>{{ $invoice->Total }}</td>
                    <td> Chưa thanh toán </td>
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
