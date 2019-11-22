<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_log;

class CompanyLogController extends Controller
{
    public function newCompany($id1,$id2){
        $log = new Company_log;
        $log->id_user = $id1;
        $log->id_company = $id2;
        $log->description = 'Creo una compañía';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    public function updateCompany($id1,$id2){
        $log = new Company_log;
        $log->id_user = $id1;
        $log->id_company = $id2;
        $log->description = 'Actualizo la información de la compañía';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }
    
    public function deleteCompany($id1,$id2){
        $log = new Company_log;
        $log->id_user = $id1;
        $log->id_company = $id2;
        $log->description = 'Dio de baja una compañía';
         if($log->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    public function restoreCompany($id1,$id2){
        $log = new Company_log;
        $log->id_user = $id1;
        $log->id_company = $id2;
        $log->description = 'Recupero una compañía';
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
