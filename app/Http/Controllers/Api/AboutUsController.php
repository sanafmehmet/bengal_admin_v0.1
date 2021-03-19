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

    public function GetAboutus(Request $request)
    {
       if($request->tab_name){
            $abs = DB::table('abouts')->where('lang', $request->tab_name)->first();

            return response()->json($abs);
       }else{
            $abs = DB::table('abouts')->where('lang','English')->first();

            return response()->json($abs);
       }
    }

    // For Frontend
    public function GetDocuments(Request $request){
        if($request->lang){
            $docs = DB::table('aboutus_documents')
                ->where('lang', $request->lang)
                //->get();
                ->paginate(3);

            return response()->json($docs);
        }else{
            $docs = DB::table('aboutus_documents')
                ->where('lang', 'English')
                //->get();
                ->paginate(3);

            return response()->json($docs);
        }
    }

    // About us content one
    public function GetAboutusOne(Request $request){
        if($request->lang){
            $docs = DB::table('aboutus_ones')
            ->where('lang', $request->lang)
            ->first();

            return response()->json( $docs);

        }else{
            $docs = DB::table('aboutus_ones')
            ->where('lang', 'English')
            ->first();

            return response()->json( $docs);
        }
       
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

    public function AboutusOne(Request $request)
    {
        $data = array();
        $data['userId'] = $request->userId;
        $data['lang'] = $request->lang;
        $data['heading'] = $request->heading;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['title_one'] = $request->title_one;
        $data['desc_one'] = $request->desc_one;
        $data['title_two'] = $request->title_two;
        $data['desc_two'] = $request->desc_two;
        $data['title_three'] = $request->title_three;
        $data['desc_three'] = $request->desc_three;

        DB::table('aboutus_ones')->insert($data);

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
