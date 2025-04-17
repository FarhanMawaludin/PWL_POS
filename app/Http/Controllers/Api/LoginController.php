<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request ){
        //atur validasi
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        //atur kalo validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //ngambil kredensial dari request
        $credentials = $request->only('username', 'password');

        //kalo gagal autentikasi
        if(!$token = auth()->guard('api')->attempt($credentials)){
            return response()->json([
                'success' => false,
                'message' => 'Username dan Password salah'
            ]);
        }

        //kalo berhasil autentikasi
        return response()->json([
            'success' => true,
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ]);


    }
    
}
