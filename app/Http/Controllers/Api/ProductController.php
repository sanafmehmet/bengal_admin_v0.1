<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(request('search')){
        //     $products = DB::table('products')
        //             ->where('product_name', 'like', '%'. request('search') . '%')
        //             ->orderBy('id', 'desc')->paginate(5);

        //     return response()->json($products);
        // }else{
        //     $products = DB::table('products')->orderBy('id', 'desc')->paginate(5);

        //     return response()->json($products);
        // }

        // $products = DB::table('products')->get();
        // if(request('search')){
        //     $products
        //             ->where('product_name', 'like', '%'. request('search') . '%')
        //             ->orderBy('id', 'desc')->paginate(5);

        //     return response()->json($products);
        // }else{
        //     $products->orderBy('id', 'desc')->paginate(5);

        //     return response()->json($products);
        // }

        $products = DB::table('products');

        return $products->when(request('search'), function($query) {
            $query->where('product_name',  'like', '%'. request('search') . '%')
                  ->orWhere('category_name',  'like', '%'. request('search') . '%')
                  ->orWhere('selling_price',  'like', '%'. request('search') . '%');
        })->orderBy('id', 'desc')->paginate(5);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = time().".jpeg";
        $img = Image::make($request->product_image)->resize(240, 200);
        $upload_path = 'backend/product/';
        $image_url = $upload_path.$name;
        $img->save($image_url);

        $data = array();
        $data['userId'] = $request->userId;
        $data['product_name'] = $request->product_name;
        $data['category_name'] = $request->product_category;
        $data['buying_price'] = $request->buying_price;
        $data['selling_price'] = $request->selling_price;
        $data['buying_date'] = $request->buying_date;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_image'] =  $image_url;

        DB::table('products')->insert($data);

        return response()->json('done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['userId'] = $request->userId;
        $data['product_name'] =$request->product_name;
        $data['category_name'] =$request->category_name;
        $data['buying_price'] =$request->buying_price;
        $data['selling_price'] =$request->selling_price;
        $data['buying_date'] =$request->buying_date;
        $data['product_quantity'] =$request->product_quantity;

        DB::table('products')->where('id', $id)->update($data);

        $product_image= substr($request->product_image,0,1);

        if($product_image == 'd'){
            $position = strpos($request->product_image, ';');
            $sub = substr($request->product_image, 0, $position);
            $ext = explode('/', $sub)[1];
            $name = time().".".$ext;
            $img = Image::make($request->product_image)->resize(240, 200);
            $upload_path = 'backend/product/';
            $image_url = $upload_path.$name;
            $success = $img->save($image_url);

            if($success){
                $data['product_image'] = $image_url;
                $pImg = DB::table('products')->where('id', $id)->first();
                $image_path = $pImg->product_image;
                unlink($image_path);
                DB::table('products')->where('id', $id)->update($data);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
