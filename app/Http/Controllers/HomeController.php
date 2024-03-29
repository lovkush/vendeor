<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use App\CityCat;
use App\Area;
use App\Categories;
use App\ShopName;
use App\Product;
use App\Category_model;
use App\SubCategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $data=DB::table('product')
        ->join('product_mang', 'product.product_id', '=', 'product_mang.product_id')
        ->select('*')->where('product_mang.shop_id', '=', Session::get('shop_id'))
        ->get();
        // $data2=Product::select('*')->where('sub_cat_name',$check2 )->get();

      
        return view('home')->with(compact('data',2));
			// $data2=Product::select('*')->where('sub_cat_name',$check2 )->get();
    
          
			//return view('home')->with(compact('data'));
		/*$id=$request->input('id');
		
		print_r($id);
        return view('home');
		*/
		 
    }
	public function submit(Request $request){		 
		 $id=$request->input('id');
		return view('student_crud/product');
	 }	
		
	public function checkout(){
		return view('/e-shop/checkout');		
	}
	
}
