<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->fileFor == 'Document'){
            $data = array();
            $data['userId'] = $request->userId;
            $data['lang'] = $request->lang;
            $data['ym'] = $request->ym;
            $data['year'] = substr($request->ym, 0, 4);
            $month = substr($request->ym, 5, 7);
            if($month == (07 + 1)){
                $data['month'] = 'August';
            }else if($month == (07 + 2)){
                $data['month'] = 'September';
            }else if($month == 01){
                $data['month'] = 'January';
            }else if($month == 02){
                $data['month'] = 'February';
            }else if($month == 03){
                $data['month'] = 'March';
            }else if($month == 04){
                $data['month'] = 'April';
            }else if($month == 05){
                $data['month'] = 'May';
            }else if($month == 06){
                $data['month'] = 'June';
            }else if($month == 07){
                $data['month'] = 'July';
            }else if($month == 10){
                $data['month'] = 'October';
            }else if($month == 11){
                $data['month'] = 'November';
            }else{
                $data['month'] = 'December';
            }

            $data['title'] = $request->title;
            $data['desc'] = $request->desc;

            $name = time().".jpeg";
            $img = Image::make($request->image)->resize(156, 88);
            $upload_path = 'backend/aboutus/documents/';
            $image_url = $upload_path.$name;
            $img->save($image_url);
            $data['image'] = $image_url;

            DB::table('aboutus_documents')->insert($data);

            return response()->json($data);
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
