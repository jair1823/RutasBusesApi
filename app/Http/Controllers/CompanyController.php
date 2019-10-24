<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Company::where('status',1)->get();
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
        $company = new Company;

        $company->name = $request->name;
        $company->service_zone = $request->service_zone;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->lat = $request->lat;
        $company->lng = $request->lng;
        $company->start_time = $request->start_time;
        $company->end_time = $request->end_time;
        $company->status = 1;

        if($company->save()){
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
        $company = Company::where('id_company', $id)->get();
        if($company->isEmpty()){
            return response()->json([
                'success'=>false
            ]);
        }
        return response()->json([
            'success'=>true,
            'data'=>$company
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
        $update = Company::where('id_company',$id)->update($request->all());
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
        $update = Company::where('id_company',$id)->update(['status'=>0]);
        if($update){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }
}
