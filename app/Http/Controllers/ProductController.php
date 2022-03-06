<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use Database;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')->orderBy('product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);

    }
    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_status'] = $request->product_status;
        $data['product_content'] = $request->product_content;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        // $data['product_images'] = $request->file('product_images');
        $get_image = $request->file('product_images');
        if($get_image){
        $get_name = $get_image->getClientOriginalName();
        $name_img = current(explode('.',$get_name));
        $new_image = $name_img.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/upload/product',$new_image);
        $data['product_images'] = $new_image;
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm thành công');
        return redirect::to('all_product');
        }

        $data['product_images'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thành công!');
        return redirect::to('all_product');
    }
    public function unactive($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status' =>0]);
        Session::put('message','Ẩn thành công');
        return Redirect::to('all_product');
    }
    public function active($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status' =>1]);
        Session::put('message','Hiển thị thành công');
        return Redirect::to('all_product');
    }
    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        return view('admin.edit_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('edit_product', $edit_product);

    }
    public function update_product(Request $request ,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_status'] = $request->product_status;
        $data['product_content'] = $request->product_content;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $get_image = $request->file('product_images');
        if($get_image){
        $get_name = $get_image->getClientOriginalName();
        $name_img = current(explode('.',$get_name));
        $new_image = $name_img.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/upload/product',$new_image);
        $data['product_images'] = $new_image;
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhập thành công');
        return redirect::to('all_product');
        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhập thành công!');
        return redirect::to('all_product');
    }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all_product');
    }
}
