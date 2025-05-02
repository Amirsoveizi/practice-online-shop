@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('panel/style/custom.css') }}">
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">افزودن محصول</h3>
    </div>
    <form role="form" action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">نام محصول</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="نام محصول را وارد کنید">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="یک مقدار slug وارد کنید">
            </div>
            <div class="form-group">
                <label for="number">تعداد محصول</label>
                <input type="number" class="form-control" name="number" id="number" placeholder="تعداد را وارد کنید">
            </div>
            <div class="form-group">
                <label for="table_categories">دسته‌بندی محصول</label>
                <select class="form-control" name="table_categories" id="table_categories">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="قیمت محصول را وارد کنید">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </form>
</div>
@endsection
