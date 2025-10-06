{{-- resources/views/products/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container bg-white p-4 rounded shadow">
    <h1>商品編集</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">商品名</label>
            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">価格</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label">在庫数</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection