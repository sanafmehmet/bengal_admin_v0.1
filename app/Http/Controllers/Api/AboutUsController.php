<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $abs = DB::table('abouts')->where('lang', $request->tab_name)->first();

        return response()->json($abs);
    }

    // For Frontend
    public function GetDocuments(Request $request){
        $docs = DB::table('aboutus_documents')
            ->where('lang', $request->lang)
            //->get();
            ->paginate(2);

        return response()->json($docs);
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
        $data['view_more'] = $request->view_more;
        $data['view_profile'] = $request->view_profile;

        DB::table('abouts')->insert($data);

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
