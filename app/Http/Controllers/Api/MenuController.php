<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function GetMenu(Request $request){
        $menus = DB::table('menus')
                ->where('lang', $request->langSM)
                ->get();

        return response()->json($menus);
    }

    // For Frontend
    public function GetMenuFront(Request $request){
        $menus = DB::table('menus')
                ->where('lang', 'English')
                ->get();

        $submenus = DB::table('submenus')
        ->where('lang', 'English')
        ->get();

        return response()->json([
            'menus' => $menus,
            'submenus' => $submenus
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMenu == 1){
            $data = array();
            $data['userId'] = $request->userId;
            $data['lang'] = $request->langM;
            $data['menu'] = $request->menu;
            $data['isMenu'] = $request->isMenu;

            DB::table('menus')->insert($data);

            return response()->json($data);

        }else if($request->isSubmenu == 1){
            $data = array();
            $data['menu_id'] = $request->menuId;
            $data['userId'] = $request->userId;
            $data['lang'] = $request->langSM;
            $data['submenu'] = $request->submenu;
            $data['isSubmenu'] = $request->isSubmenu;

            DB::table('submenus')->insert($data);

            return response()->json($data);

        }else if($request->isImageA == 1){
            $name = time().".jpeg";
            $img = Image::make($request->imageA)->resize(240, 200);
            $upload_path = 'backend/menu/menu_a_images/';
            $image_url = $upload_path.$name;
            $img->save($image_url);

            $data = array();
            $data['userId'] = $request->userId;
            $data['imageA'] = $image_url;

            DB::table('menu_aimages')->insert($data);

        }else if($request->isImageC == 1){
            $name = time().".jpeg";
            $img = Image::make($request->imageC)->resize(240, 200);
            $upload_path = 'backend/menu/menu_c_images/';
            $image_url = $upload_path.$name;
            $img->save($image_url);

            $data = array();
            $data['userId'] = $request->userId;
            $data['imageC'] = $image_url;

            DB::table('menu_cimages')->insert($data);
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
