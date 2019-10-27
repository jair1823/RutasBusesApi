<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canton;

class CantonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Canton::select('id_province','id_canton', 'name')->get();
        if($all->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$all
        ]);
    }

    public function index_by_province($id)
    {
        $canton = Canton::select('id_province','id_canton', 'name')->where('id_province', $id)->get();
        if($canton->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$canton
        ]);
    }

}
