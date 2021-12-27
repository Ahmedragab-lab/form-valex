<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\DataTables\ProductDataTable;

class ProductController extends Controller
{

    public function index(ProductDataTable $dataTable)
    {
        // return view('products.index');
        return $dataTable->render('products.index');
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
        $product = $request->all();
        Product::create($product);
        toastr()->success(__('تم اضافه المنتج بنجاح'));
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('products.edit',compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product= Product::findorfail($id);
        $product-> product_name = $request->product_name;
        $product->update();
        toastr()->success(__('تم تعديل المنتج بنجاح'));
        return redirect('product');
    }
    public function destroy($id)
    {
        $product = Product::destroy($id);
        toastr()->error(__('تم حذف المنتج بنجاح'));
        return redirect('product');
    }
}
