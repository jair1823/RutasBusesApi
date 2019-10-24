<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_log;

class CompanyLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
