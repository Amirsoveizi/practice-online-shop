@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('panel/style/custom.css') }}">
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">ویرایش محصول</h3>
    </div>
    <form role="form" action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">نام محصول</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="نام محصول را وارد کنید" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="یک مقدار slug وارد کنید" value="{{ $product->slug }}">
            </div>
            <div class="form-group">
                <label for="number">تعداد محصول</label>
                <input type="number" class="form-control" name="number" id="number" placeholder="تعداد را وارد کنید" value="{{ $product->number }}">
            </div>
            <div class="form-group">
                <label for="table_categories">دسته‌بندی محصول</label>
                <select class="form-control" name="table_categories" id="table_categories">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->table_categories == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="قیمت محصول را وارد کنید" value="{{ $product->price }}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        </div>
    </form>
</div>
@endsection
