<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_place;
use App;
use Illuminate\Support\Facades\DB;

class New_placeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = New_place::select(DB::raw('CONCAT(user.name, " ", last_name," ",second_last_name) AS full_name'),
                            'id_new_place',
                            'user.id_user',
                            //'new_place.name',
                            'description',
                            "lat",
                            "lng"
                            )
                            ->join('user','new_place.id_user','=','user.id_user')
                            ->get();
        if($all->isEmpty()){
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML('<h1>No hay puntos</h1>');
            return $pdf->stream('nuevos_lugares.pdf');

        }
        
        return $this->crearPDF($all,'pdf.reporte');
        /*return response()->json([
            'success'=>true,
            'data'=>$all
        ]);*/
    }

    public function crearPDF($datos,$vistairl)
    {
        
        $data = $datos;
        $date = date('Y-m-d');
        $view = \View::make($vistairl, compact('data','date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('nuevos_lugares.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new New_place;
        $place->id_user = $request->id_user;
        //$place->name = $request->name;
        $place->description = $request->description;
        $place->lat = $request->lat;
        $place->lng = $request->lng;
        if($place->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = New_place::select(DB::raw('CONCAT(user.name, " ", last_name," ",second_last_name) AS full_name'),
                                        'id_new_place',
                                        'user.id_user',
                                        //'new_place.name',
                                        'description'
                                        )
                                        ->join('user','new_place.id_user','=','user.id_user')
                                        ->where('id_new_place', $id)
                                        ->get();
        if($place->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$place
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = New_place::where('id_new_place',$id)->delete();
        if($delete){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

}
