<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Product;
use App\Categories;


class ProductController extends Controller
{
    public function create()
    {
	    if (Auth::check()) {
	    	$categories = Categories::all();
	    	return view('/product/upload', ['categories' => $categories]);
		}
		else{
			Session::flash('login.rule', 'Vui Long Dang Nhap Truoc khi Dang Bai');
		  	return redirect('/login');
		}
    	
    }

    public function createlibrary()
    {
        if (Auth::check()) {
            return view('/product/library/index');
        }
        else {
            Session::flash('login.rule', 'Vui Long Dang Nhap Truoc khi Dang Bai');
            return redirect('/login');
        }
        
    }

    public function store(Request $request)
    {
    	$rules = [
            'product_avatar' => 'required',
            'product_name' => 'required|string|max:255',
            'product_category' => 'required',
            'product_price' => 'required|string|max:255',
            'product_brand' => 'required|string|max:100',
            'size_product' => 'required',
            'describeproduct' => 'required|string|max:200',

        ];
        $messages = [
            'product_avatar.required' => 'product_avatar là trường bắt buộc',
            'product_category.required' => 'product_avatar là trường bắt buộc',
            'product_name.max' => 'product_name không quá 255 ký tự',
            'product_name.required' => 'product_name là trường bắt buộc',
            'product_brand.max' => 'product_name không quá 255 ký tự',
            'product_brand.required' => 'product_name là trường bắt buộc',
            'product_price.max' => 'product_price không quá 255 ký tự',
            'product_price.required' => 'product_price là trường bắt buộc',
            'size_product.required' => 'size_product là trường bắt buộc',
            'describeproduct.required' => 'describeproduct là trường bắt buộc',
            'describeproduct.max' => 'describeproduct không quá 200 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) 
        {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('/upload')->withErrors($validator)->withInput();
    	}	
    	else 
    	{
         	$img = $request->file('product_avatar');
            if (!empty($img)) 
            {
                Storage::put('upload/'.$img->getClientOriginalName(), file_get_contents($img));
            }
	        $user_id = Auth::user()->id;
	        $product = new Product();
	        $product->product_name = $request->input('product_name');
	        $product->user_id = $user_id;
	        $product->product_img = $img->getClientOriginalName();
	        $product->product_price = $request->input('product_price');
	        $product->brand_product = $request->input('product_brand');
	        $product->categories_id = $request->input('product_category');
	        $product->product_size = $request->input('size_product');
	        $product->describe_product = $request->input('describeproduct');
	        $product->percent_new = $request->input('range');
	        $product->save();

            Session::flash('success', 'Dang Bai Thanh Cong');
            return redirect('');
        }
	}

    
}
