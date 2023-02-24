<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use DB;


class RegisterController extends Controller
{
    public function signup(Request $request)
    {
        try {
            DB::beginTransaction();

            # BAGIAN INSERT
            $create_user = UserModel::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => $request->password
            ]);

            if ($create_user) {
                DB::commit();
                echo UserModel::get();
                die;
                // return view('login', [
                //     'data' => UserModel::get()
                // ]);
            } else {
                DB::rollBack();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

        // $table->string('first_name', 50);
        // $table->string('last_name', 50);
        // $table->string('email', 50);
        // $table->string('phone_number', 13);
        // $table->string('password', 50);

        // $response = UserModel::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'password' => $request->password
        // ]);
        // UserModel::where('id', '=', 'admin')->get();
        // $arr = DB::table("users")->where('id', '=', 'admin')->get();
        // return view('login', [
        //     'data' => $arr
        // ]);
        // return DB::table("users")->where('id', '=', 'admin')->get();

    }
}