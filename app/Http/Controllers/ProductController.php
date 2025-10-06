<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    // 入力チェック
    $request->validate([
        'product_name' => 'required|string|max:255',
        'price' => 'required|integer|min:0',
        'stock' => 'required|integer|min:0',
    ]);

    // DBに保存
Product::create([
    'product_name' => $request->product_name, // ← ここを修正
    'price' => $request->price,
    'stock' => $request->stock,
]);

    // 保存後は一覧に戻る
    return Redirect::route('products.index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 入力チェック
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return Redirect::route('products.index')->with('success', '商品情報を更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return Redirect::route('products.index')->with('success', '商品を削除しました。');
    }
}
