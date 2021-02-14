<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = DB::table('footer_contents')->get();

        return response()->json($contents);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['userId'] = $request->userId;
        $data['lang'] = $request->lang;
        $data['desc'] = $request->desc;
        $data['callus'] = $request->callus;
        $data['addrs'] = $request->addrs;

        DB::table('footer_contents')->insert($data);

        return response()->json('Success');
    }

    public function storeFooterImage(Request $request)
    {
        $name = time().".jpeg";
        $img = Image::make($request->image)->resize(240, 200);
        $upload_path = 'backend/footer_images/';
        $image_url = $upload_path.$name;
        $img->save($image_url);

        $data = array();
        $data['userId'] = $request->userId;
        $data['image'] = $image_url;

        DB::table('footer_images')->insert($data);

        return response()->json('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = DB::table('footer_contents')->where('id', $id)->first();

        return response()->json($content);
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
        $data['lang'] = $request->lang;
        $data['desc'] = $request->desc;
        $data['callus'] = $request->callus;
        $data['addrs'] = $request->addrs;

        DB::table('footer_contents')->where('id', $id)->update($data);

        return response()->json('Success');
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
