@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('panel/style/custom.css') }}">
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">ویرایش دسته‌بندی</h3>
    </div>
    <form role="form" action="{{ route('categories.update', $category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">نام دسته‌بندی</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="نام دسته‌بندی را وارد کنید" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="یک مقدار slug وارد کنید" value="{{ $category->slug }}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        </div>
    </form>
</div>
@endsection
