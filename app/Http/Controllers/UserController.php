<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = User::where('status',1)->get();
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
        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->second_last_name = $request->second_last_name;
        $user->username = $request->username;
        $user->password = password_hash($request->password,PASSWORD_DEFAULT);
        $user->status = 1;
        if($user->save()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
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
        $update = User::where('id_user',$id)->update(['status'=>0]);
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
     * Validate unique user
     */
    public function uniqueUsername(Request $request)
    {
        $user = User::where('username',$request->username)->get();
        if($user->isEmpty()){
            return response()->json([
                'success'=>true
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    /**
     * For sing in
     */

    public function authenticate(Request $request)
    {
        $user = User::where('username',$request->username)->first();
        if(($user != null) && (password_verify($request->password, $user->password)) && ($user->status==1)) {

            return response()->json([
                'success'=>true,
                'data'=>[
                    "name"=>$user->name.' '.$user->last_name.' '.$user->second_last_name,
                    "id_user"=>$user->id_user,
                    "username"=>$user->username
                    ]
            ]);
        }
        return response()->json([
            'success'=>false
        ]);
    }

    /**
     * For update password user
     */
    public function changePassword(Request $request)
    {
        $user = User::where('username',$request->username)->first();
        if(($user != null) && (password_verify($request->password, $user->password)) && ($user->status==1)) {
            $update = User::where('id_user',$user->id_user)->update(['password'=>password_hash($request->new_password,PASSWORD_DEFAULT)]);
            if($update){
                return response()->json([
                    'success'=>true
                ]);
            }
        }
        return response()->json([
            'success'=>false
        ]);
    }
}
