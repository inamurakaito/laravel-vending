<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
 <div class="p-6 bg-white text-black">
    <h1 class="text-xl font-bold mb-4">商品リスト</h1>

    <table class="table-auto w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">商品名</th>
                <th class="px-4 py-2">価格</th>
                <th class="px-4 py-2">在庫数</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->price }}</td>
                    <td class="border px-4 py-2">{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
            </div>
        </div>
    </div>
</x-app-layout>