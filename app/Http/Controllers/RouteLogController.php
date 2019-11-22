<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route_log;

class RouteLogController extends Controller
{
    public function newRoute($id1,$id2){
        $log = new Route_log;
        $log->id_user = $id1;
        $log->id_route = $id2;
        $log->description = 'Creo una routa';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }
    
    public function updateRoute($id1,$id2){
        $log = new Route_log;
        $log->id_user = $id1;
        $log->id_route = $id2;
        $log->description = 'Actualizo la información una ruta';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    public function deleteRoute($id1,$id2){
        $log = new Route_log;
        $log->id_user = $id1;
        $log->id_route = $id2;
        $log->description = 'Dio de baja una ruta';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    public function restoreRoute($id1,$id2){
        $log = new Route_log;
        $log->id_user = $id1;
        $log->id_route = $id2;
        $log->description = 'Recupero una ruta';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }
}
