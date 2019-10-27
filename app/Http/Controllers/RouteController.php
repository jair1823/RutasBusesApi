<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Point;
class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Route::all();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = new Route;

        $route->id_company = $request->id_company;
        $route->number = $request->number;
        $route->description = $request->description;
        $route->ticket_cost = $request->ticket_cost;
        $route->start_time = $request->start_time;
        $route->end_time = $request->end_time;
        $route->duration = $request->duration;
        $route->disability_system = $request->disability_system;
        $route->origin = $request->origin;
        $route->destination = $request->destination;

        if($route->save()){
            return response()->json([
                'success'=>true,
                'data'=>$route->id
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
        $route = Route::where('id_route', $id)->get();
        $points = Point::where('id_route', $id)->get();
        if($route->isEmpty() || $points->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$route,
            'points'=>$points
        ]);
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
        $update = Route::where('id_route',$id)->update($request->all());
        if($update){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
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
        $delete = Route::where('id_route',$id)->delete();
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
