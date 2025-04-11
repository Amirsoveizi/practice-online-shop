@extends('admin.layout')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">ساخت حساب کاربری</h3>
    </div>
    <form role="form" action='{{ route('admin.user.create') }}' method="POST">
        @method('POST')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">نام و نام خانوادگی</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="نام و نام خانوادگی خود را وارد کنید">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="پسورد را وارد کنید">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </form>
</div>
@endsection
