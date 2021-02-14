<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->tab == null){
            $tabs = DB::table('tabs')
            ->where('lang', $request->tab_name)->first();
        }else{
            $tabs = DB::table('tabs')
            ->where('lang', $request->tab_name)
            ->where('tab', $request->tab)
            ->first();
        }
        
        return response()->json($tabs);
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
        $img = Image::make($request->image)->resize(240, 200);
        $upload_path = 'backend/tab/image/';
        $image_url = $upload_path.$name;
        $img->save($image_url);

        $name1 = time().".jpeg";
        $img1 = Image::make($request->sub_image)->resize(240, 200);
        $upload_path1 = 'backend/tab/subimage/';
        $image_url1 = $upload_path1.$name1;
        $img1->save($image_url1);

        $name2 = time().".jpeg";
        $img2 = Image::make($request->sub_image_two)->resize(240, 200);
        $upload_path2 = 'backend/tab/subimage_two/';
        $image_url2 = $upload_path2.$name2;
        $img2->save($image_url2);

        $data = array();
        $data['userId'] = $request->userId;
        $data['lang'] = $request->lang;
        $data['tab'] = $request->tab;
        $data['title'] = $request->title;
        $data['sort_title'] = $request->sort_title;
        $data['sub_title'] = $request->sub_title;
        $data['desc'] = $request->desc;
        $data['sub_title_two'] = $request->sub_title_two;
        $data['desc_two'] = $request->desc_two;
        $data['image'] = $image_url;
        $data['sub_image'] = $image_url1;
        $data['sub_image_two'] = $image_url2;

        DB::table('tabs')->insert($data);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
