@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('customer.update', $customer->PassportID) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <h2>Cập nhật người dùng</h2>
        <br />
        <div class="col">
        <div class="form-group mb-2">
                <label for="txtName">Tên người dùng</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="" required
                value="{{ $customer->Name }}">
            </div>
            <div class="form-group mb-2">
                <label for="txtSex">Giới tính</label>
                <select name="Sex" class="form-select" id="txtSex">
                    <option value="Male" {{ $customer->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $customer->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtBirthday">Ngày sinh</label>
                <input type="date" class="form-control" name="Birthday" id="txtBirthday" placeholder="" required
                value="{{ $customer->Birthday }}">
            </div>
            <div class="form-group mb-2">
                <label for="txtPhone">Số điện thoại</label>
                <input type="text" class="form-control" name="Phone" id="txtPhone" placeholder="" required
                value="{{ $customer->Phone }}">
            </div>
            <div class="form-group mb-4">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" name="Email" id="txtEmail" placeholder="" required
                value="{{ $customer->Email }}">
            </div>
            <div class="input-group-btn mt-auto">
                <button id="update-btn" class="btn btn-success w-25 fw-bold" type="submit">Cập Nhật</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <div class="col d-flex flex-column">
        <div class="form-group mb-2">
                <label for="txtNationality">Quốc tịch</label>
                <input type="text" class="form-control" name="Nationality" id="txtNationality" placeholder="" required
                value="{{ $customer->Nationality }}">
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportNumber">Số passport</label>
                <input type="text" class="form-control" name="PassportNumber" id="txtPassportNumber" placeholder="" required
                value="{{ $customer->PassportNumber }}">
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportNation">Quốc gia cấp passport</label>
                <input type="text" class="form-control" name="PassportNation" id="txtPassportNation" placeholder="" required
                value="{{ $customer->PassportNation }}">
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportExpiration">Ngày hết hạn passport</label>
                <input type="date" class="form-control" name="PassportExpiration" id="txtPassportExpiration"
                    placeholder="" required value="{{ $customer->PassportExpiration }}">
            </div>
            <div class="form-group">
                <label for="txtPassword">Mật khẩu</label>
                <input type="text" class="form-control" name="Password" id="txtPassword" placeholder="" required
                value="{{ $customer->Password }}">
            </div>
        </div>

        <br />
    </form>
</div>
@endsection