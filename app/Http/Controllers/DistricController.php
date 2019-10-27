<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distric;

class DistricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Distric::select('id_canton','id_distric', 'name')->get();
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

    public function index_by_canton($id)
    {
        $distric = Distric::select('id_canton','id_distric', 'name')->where('id_canton', $id)->get();
        if($distric->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$distric
        ]);
    }
}
