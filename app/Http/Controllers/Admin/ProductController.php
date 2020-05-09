<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        $data['data'] = Product::all();
        return view('admin.products.view_products', $data);
    }

    public function create()
    {
        return view('admin.products.addproduct');
    }

    public function store(Request $request)
    {
        $temp = $request->all();
        /*them san pham*/
        $product = new Product;
        $product->name = $temp['product_name'];
        $product->code = $temp['product_code'];
        $product->color = $temp['product_color'];
        if (!empty($temp['product_des'])) {
            $product->description = $temp['product_des'];
        } else {
            $product->description = '';
        }
        $product->price = $temp['product_price'];
        /*tai anh len*/
        if ($request->hasFile('picture')) {
            $image_tmp = $request->picture;
            $file_name = time() . '.' . $image_tmp->clientExtension();
            $img_part = 'upload/products/' . $file_name;
            Image::make($image_tmp)->resize(300, 500)->rotate(90)->save($img_part);
            $product->image = $file_name;
            $product->save();
        } else {
            return redirect('admin/product/create')->with('mess', 'Ban tai anh len bi loi');
        }
        return redirect('admin/product/create')->with('mess', 'Ban da them thanh cong mot san pham');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('mess', 'Ban da xoa thanh cong mot san pham');
    }
}
