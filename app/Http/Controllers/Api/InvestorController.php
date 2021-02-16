<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;

class InvestorController extends Controller
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
        $name = time().".jpeg";
        $img = Image::make($request->image)->resize(455, 320);
        $upload_path = 'backend/investor/';
        $image_url = $upload_path.$name;
        $img->save($image_url);

        $data = array();
        $data['userId'] = $request->userId;
        $data['lang'] = $request->lang ;
        $data['title_one'] = $request->title_one;
        $data['desc_one'] = $request->desc_one;
        $data['amnt'] = $request->amnt;
        $data['title_two'] = $request->title_two;
        $data['desc_two'] = $request->desc_two;
        $data['year'] = substr($request->year, 0, 4);
        $data['image'] =  $image_url;

        DB::table('investors')->insert($data);

        $invst = DB::table('investors')->orderBy('id', 'desc')->first();
        $getId = $invst->id;

        $oneData = [];
        foreach($request->items_one as $item){
            $oneData[] = [
                'investor_id' => $getId,
                'item_one' => $item['item_one'],
            ];
        }
        DB::table('i_one_details')->insert($oneData);

        $twoData = [];
        foreach($request->items_two as $item){
            $twoData[] = [
                'investor_id' => $getId,
                'item_two' => $item['item_two'],
            ];
        }
        DB::table('i_two_details')->insert($twoData);

        $threeData = [];
        foreach($request->items_three as $item){
            $threeData[] = [
                'investor_id' => $getId,
                'item_three' => $item['item_three'],
            ];
        }
        DB::table('i_three_details')->insert($threeData);

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
