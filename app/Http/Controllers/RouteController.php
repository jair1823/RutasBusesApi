<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Point;
use App\Distric;
class RouteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $all = Route::all();
        $all = Route::
            select('route.*','d.name as distric_name','ca.name as canton_name','p.name as province_name','c.name as company_name')
            ->join('distric as d','route.destination','=','d.id_distric')
            ->join('canton as ca','d.id_canton','=','ca.id_canton')
            ->join('province as p','ca.id_province','=','p.id_province')
            ->join('company as c','route.id_company','=','c.id_company')        
            ->get();
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
        $route->status = 1;
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
        //$route = Route::where('id_route', $id)->get();
        $route = Route::
            select('route.*','o.name as name_origin','d.name as name_destination', 'c.name as company_name')
            ->join('distric as o','route.origin','=','o.id_distric')
            ->join('distric as d','route.destination','=','d.id_distric')
            ->join('company as c','route.id_company','=','c.id_company')
            ->where('id_route', $id)            
            ->get();
        $points = Point::where('id_route', $id)->get();
        $origin = Route::
            select('o.id_distric','c.id_canton','p.id_province','o.name','c.name as pro_name')
            ->join('distric as o','route.origin','=','o.id_distric') 
            ->join('canton as c','o.id_canton','=','c.id_canton')
            ->join('province as p','c.id_province','=','p.id_province')
            ->where('id_route', $id)            
            ->get();

        $destination = Route::
            select('o.id_distric','c.id_canton','p.id_province','o.name','c.name as pro_name')
            ->join('distric as o','route.destination','=','o.id_distric') 
            ->join('canton as c','o.id_canton','=','c.id_canton')
            ->join('province as p','c.id_province','=','p.id_province')
            ->where('id_route', $id)            
            ->get();

        if($route->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$route,
            'points'=>$points,
            'origin' =>$origin,
            'destination'=>$destination
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
        $delete = Route::where('id_route',$id)->update(['status'=>0]);
        if($delete){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    public function by_company($id)
    {
        $routes = Route::
            select('route.*','o.name as name_origin','d.name as name_destination')
            ->join('distric as o','route.origin','=','o.id_distric')
            ->join('distric as d','route.destination','=','d.id_distric')
            //->join('company as c','route.id_company','=','c.id_company')
            ->where('status',1)
            ->where('id_company', $id)            
            ->get();
        if($routes->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$routes
        ]);
    }

    
    public function by_origin($id1,$id2)
    {
        $routes = Route::
            select('route.*','o.name as name_origin','d.name as name_destination')
            ->join('distric as o','route.origin','=','o.id_distric')
            ->join('distric as d','route.destination','=','d.id_distric')
            //->join('company as c','route.id_company','=','c.id_company')
            ->where('status',1)
            ->where('route.origin', $id1)
            ->where('route.destination', $id2)
            ->get();
        if($routes->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$routes
        ]);
    }
    public function by_destination($id)
    {
        $routes = Route::
            select('route.*','o.name as name_origin','d.name as name_destination')
            ->join('distric as o','route.origin','=','o.id_distric')
            ->join('distric as d','route.destination','=','d.id_distric')
            //->join('company as c','route.id_company','=','c.id_company')
            ->where('status',1)
            ->where('route.destination', $id)            
            ->get();
        if($routes->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$routes
        ]);
    }

    public function many_route(Request $request)
    {

        $routes = Route::
            select('route.*','o.name as name_origin','d.name as name_destination')
            ->join('distric as o','route.origin','=','o.id_distric')
            ->join('distric as d','route.destination','=','d.id_distric')
            //->join('company as c','route.id_company','=','c.id_company')
            ->where('status',1)
            ->whereIn('id_route', $request->ids)            
            ->get();
        if($routes->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$routes
        ]);
        
    }
    
    public function get_active(){
        $all = Route::
            select('route.*','d.name as distric_name','ca.name as canton_name','p.name as province_name','c.name as company_name')
            ->join('distric as d','route.destination','=','d.id_distric')
            ->join('canton as ca','d.id_canton','=','ca.id_canton')
            ->join('province as p','ca.id_province','=','p.id_province')
            ->join('company as c','route.id_company','=','c.id_company')     
            ->where('route.status',1)
            ->get();
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

    public function restore($id)
    {
        $delete = Route::where('id_route',$id)->update(['status'=>1]);
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
