{{-- resources/views/products/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">商品詳細</h1>

    <div class="mb-4">
        <strong>ID:</strong> {{ $product->id }}
    </div>

    <div class="mb-4">
        <strong>商品名:</strong> {{ $product->product_name }}
    </div>

    <div class="mb-4">
        <strong>価格:</strong> {{ $product->price }} 円
    </div>

    <div class="mb-4">
        <strong>在庫数:</strong> {{ $product->stock }} 個
    </div>

    <div class="flex gap-2 mt-4">
        <a href="{{ route('products.edit', $product) }}" 
           class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
            編集
        </a>
        <a href="{{ route('products.index') }}" 
           class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            一覧へ戻る
        </a>
    </div>
</div>
@endsection