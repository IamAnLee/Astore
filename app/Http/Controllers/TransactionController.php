<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Database;
use Session;
// use Cart;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Redirect;


session_start();
class TransactionController extends Controller
{
    public function detail_product($product_id,$category_id,$brand_id){
        $get_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->where('product_id',$product_id)->get();
        foreach($get_by_id as $key => $values){
            $category_id = $values->category_id;
        }
        $related = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();
        return view('pages.product.detail')->with('get_product_by_id',$get_by_id)->with('related',$related);
    }
    public function cart(Request $request){
        $product_id = $request->product_id;
        $quantity = $request->qty;
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        $product_info = DB::table('tbl_product')->where('product_id',$product_id)->first();
        $data['id'] = $product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = '1';
        $data['options']['image'] = $product_info->product_images;
        Cart::add($data);
        Cart::setGlobalTax(5);
        // Cart::Destroy();
        return Redirect::to('/gio_hang');
    }
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        return view ('pages.cart.cart')->with('cate',$cate_product)->with('brand',$brand_product);
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/gio_hang');
    }
    public function update_cart(Request $request){
        $rowId = $request->rowId;
        $qty = $request->qty_pro;
        Cart::update($rowId,$qty);
        return Redirect::to('/gio_hang');
    }
}
