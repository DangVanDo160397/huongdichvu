<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Provider;
use App\Http\Requests\ProductRequest;
use App\TblParent;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $provider = Provider::all();
        $parent = TblParent::all();
        return view('admin.product.add',compact('category','provider','parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->product_slug_name = changeTitle($request->product_name);
        if($request->hasFile("product_image"))
        {
            $file = $request->file('product_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG" )
            {
                return redirect()->route('product.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/product".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/product",$Hinh);
            $product->product_image = $Hinh;
        }
        else {
            $product->product_image = "";
        }
        $product->save();
        return redirect()->route('product.show',$product)->with('thongbao','Thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        $provider = Provider::all();
        return view('admin.product.edit',compact('product','category','provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'product_name' => 'required|min:3',
            'product_price' => 'required|min:3',
            'product_category_id' => 'required',
            'product_provider_id' => 'required',
        ],[
            'product_name.required' => 'Tên sản phẩm không được để trống.',
            'product_name.unique' => 'Tên sản phẩm đã tồn tại.',
            'product_name.min' => 'Tên sản phẩm không ít hơn 3 kí tự.',
            'product_price.required' => 'Giá sản phẩm không được để trống.',
            'product_price.min' => 'Giá sản phẩm không ít hơn 3 kí tự.',
            'product_category_id.required' => 'Tên thư mục không được để trống.',
            'product_provider_id.required' => 'Tên NCC không được để trống.',
        ]);
        $product->fill($request->all());
        $product->product_slug_name = changeTitle($request->product_name);
        if($request->hasFile("product_image"))
        {
            $file = $request->file('product_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
            {
                return redirect()->route('product.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/product".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/product",$Hinh);
            $product->product_image = $Hinh;
        }
        $product->save();
        return redirect()->route('product.show',$product)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('destroy_success');
        return redirect()->route('product.index')->with('thongbao','Xóa thành công.');
    }
}
