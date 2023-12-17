@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('customer.store') }}" method="POST" class="row">
        @csrf
        <input type="hidden" name="action" value="create">
        <h2>Thêm người dùng</h2>
        <br />
        <div class="col">
            <div class="form-group mb-2">
                <label for="txtName">Tên người dùng</label>
                <input type="text" class="form-control" name="Name" id="txtName" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtSex">Giới tính</label>
                <select name="Sex" class="form-select" id="txtSex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="txtBirthday">Ngày sinh</label>
                <input type="date" class="form-control" name="Birthday" id="txtBirthday" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtPhone">Số điện thoại</label>
                <input type="text" class="form-control" name="Phone" id="txtPhone" placeholder="" required>
            </div>
            <div class="form-group mb-4">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" name="Email" id="txtEmail" placeholder="" required>
            </div>
            <div class="input-group-btn mt-auto">
                <button class="btn btn-success fw-bold w-25" type="submit">Thêm người dùng</button>
                <button class="btn btn-danger fw-bold w-25 ms-2" type="reset">Hoàn tác</button>
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="form-group mb-2">
                <label for="txtNationality">Quốc tịch</label>
                <input type="text" class="form-control" name="Nationality" id="txtNationality" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportNumber">Số passport</label>
                <input type="text" class="form-control" name="PassportNumber" id="txtPassportNumber" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportNation">Quốc gia cấp passport</label>
                <input type="text" class="form-control" name="PassportNation" id="txtPassportNation" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="txtPassportExpiration">Ngày hết hạn passport</label>
                <input type="date" class="form-control" name="PassportExpiration" id="txtPassportExpiration"
                    placeholder="" required>
            </div>
            <div class="form-group">
                <label for="txtPassword">Mật khẩu</label>
                <input type="text" class="form-control" name="Password" id="txtPassword" placeholder="" required>
            </div>

        </div>
        <br />
    </form>
</div>
@endsection