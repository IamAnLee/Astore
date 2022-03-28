<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Redirect;


session_start();
class CheckoutController extends Controller
{
    public function check_out(Request $request){
        return view('pages.login_user');
    }
    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->name;
        $data['customer_phone'] = $request->phone;
        $data['customer_email'] = $request->email;
        $data['customer_password'] = $request->password;

        $customer = DB::table('tbl_customers')->insertGetId($data);
        Session::put('customer_id',$customer);
        Session::put('customer_name',$request->name);
        return Redirect::to('/thanh_toan_gio_hang');
    }
    public function add_address(Request $request){
        $data = array();
        $data['name'] = $request->full_name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['note'] = $request->order;

        $id = DB::table('tbl_order')->insertGetId($data);
        Session::put('id',$id);
        return Redirect::to('/cash_on_delevery');

    }
    public function payment(){
        return view('pages.cart.checkout');
    }
    public function cash_delevery(){
        return view('pages.cart.cash_delevery');
    }
}
