<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function __invoke(Request $request )
    {
        //set validasi
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required',
        ]);

        //kalo validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        //buat user
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        //kasi respon kalo misalkan berhasil
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ],201);
        }

        //kasi respon kalo misalkan gagal
        return response()->json([
            'success' => false,
        ],409);




    }
}
