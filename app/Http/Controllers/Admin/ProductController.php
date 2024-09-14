<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',[
            'products' => $products
        ]);
    }
    public function create(){
        $categories = Category::all();
        return view('admin.product.create',[
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $name = $request->title . '_' .time(). '.' . $request->image->extension();
        $data = $request->all();
        $category = Category::where('id', $request->category_id)->first();
        $request->image->storeAs('products/', $name);
        $data['image'] = $name;
        Product::create($data);
        Alert::success('محصولات', 'محصول جدید به لیست اضافه شد.');
        return redirect()->route('product.index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        Alert::toast('محصول از لیست پاک شد.', 'success');
        return redirect()->route('product.index');
    }
}




