<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
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
        $data = array();
        $data['userId'] = $request->userId;
        $data['lang'] = $request->lang;
        $data['heading'] = $request->heading;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['case_study'] = $request->case_study;
        $data['product_1'] = $request->product_1;
        $data['product_2'] = $request->product_2;
        $data['product_3'] = $request->product_3;
        $data['product_4'] = $request->product_4;
        $data['product_5'] = $request->product_5;
        $data['product_6'] = $request->product_6;
        $data['product_7'] = $request->product_7;
        $data['product_8'] = $request->product_8;

        DB::table('services')->insert($data);

        $service = DB::table('services')->orderBy('id', 'desc')->first();
        $sid = $service->id;

        $descData = [];
        foreach($request->desc_items as $item){
            $descData[] = [
                'service_id' => $sid,
                'desc_item' => $item['desc_item']
            ];
        }
        DB::table('services_details')->insert($descData);

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
