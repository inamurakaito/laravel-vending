{{-- resources/views/products/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">商品登録</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">商品名</label>
            <input type="text" name="product_name" 
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                   placeholder="商品名を入力">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">価格</label>
            <input type="number" name="price" 
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                   placeholder="価格を入力">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">在庫数</label>
            <input type="number" name="stock" 
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                   placeholder="在庫数を入力">
        </div>

<button type="submit" 
        class="bg-green-500 text-black px-4 py-2 rounded hover:bg-green-600">
            登録
        </button>
    </form>
</div>
@endsection