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


class MainController extends Controller {

public function store(Request $request){
	$name=$request->input('name');
	$email=$request->input('email');
	$mobile=$request->input('mobile');
	$password=$request->input('password');

	$result=DB::insert('insert into registration (id, name,email,mobile_number,password) value(?,?,?,?,?)',[ null,$name,$email,$mobile,$password]);
	if ($result==true){

		return Redirect::back()->with('msg', 'The Message');
	}
}

    public function Categories(){
		$users = DB::select('select * from Categories');
		return view('nav',['users'=>$users]);
        }

				public function cityfunct(){
	            $cat=Categories::all();
	            $prod=CityCat::all();//get data from table
	            return view('e-shop/home',compact('prod','cat'));//sent data to view

	        }

	        public function findArea(Request $request){


	            //if our chosen id and products table prod_cat_id col match the get first 100 data

	            //$request->id here is the id of our chosen option id
	            $data=Area::select('area_name','id')->where('city_id',$request->id)->take(100)->get();
	            return response()->json($data);//then sent this data to ajax success
			}



		public function about(Request $request){
			$area_name=$request->input('area_name');
			session()->put('area_name',$area_name);
			//return Redirect::to('/')->with('msg',$name);

			
			return Redirect::back();
			//$request->session()->keep("msg",$name);
		}

		 public function shopname($cat_id){
			 $cat_id=$cat_id;
			 $sess=(Session()->get('area_name'));
			 $data=ShopName::select('*')->where('cat_id',$cat_id )->where('area_name', $sess)->get();
			 		
		 	return view('e-shop/shopname',compact('data'));
		}

		public function product($shop_id){
			$shop_id2=$shop_id;
						

			//$cat=Categories::all();
			//$check2 = $request->input('check');
			 //$sess=(Session()->get('area_name'));
			 $data=Product::select('*')->where('shop_id',$shop_id2 )->get();
			// $data2=Product::select('*')->where('sub_cat_name',$check2 )->get();
    
          
			return view('e-shop/product')->with(compact('data','shop_id2'));

	   }

	    public function filter($id){
			
        $products=Product::select('*')->where('sub_cat_name',$id)->get();
       
        return view('e-shop.product_cat',compact('products'));
	}
	
	public function detialpro($id){
        $detail_product=Product::select('*')->where('id',$id)->get();
        return view('e-shop.product_disc',compact('detail_product'));
    }
	
	
	
	
	public function cart()
    {
        return view('e-shop/cart');
    }

    public function addToCart($id)
    {
		
		 
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->product_name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->product_pic_name
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->product_pic_name
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
	
	public function login(){
		return view('e-shop/login');
		
	}	

}