<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Settings;


class SettingsController extends Controller
{

    public function index(){

        $user = auth()->user();

        if($user==null){
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized attempt',
            ], 401);
        }

       $user_id =  $user->id;

       return "Hello";
    }



}
