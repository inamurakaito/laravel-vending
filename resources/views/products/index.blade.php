@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">商品一覧</h1>
    <a href="{{ route('products.create') }}" 
       class="bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600">新規追加</a>

    <table class="table-auto border-collapse w-full mt-4">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">商品名</th>
                <th class="border px-4 py-2">価格</th>
                <th class="border px-4 py-2">在庫数</th>
                <th class="border px-4 py-2">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border px-4 py-2">{{ $product->id }}</td>
                <td class="border px-4 py-2">{{ $product->product_name }}</td>
                <td class="border px-4 py-2">{{ $product->price }}</td>
                <td class="border px-4 py-2">{{ $product->stock }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:underline">編集</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('本当に削除しますか？');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline ml-2">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection