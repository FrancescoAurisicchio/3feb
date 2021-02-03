<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
}
//import auth facades
use Illuminate\Support\Facades\Auth;


//Add this method to the Controller class
protected function respondWithToken($token)
  {
      return response()->json([
          'token' => $token,
          'token_type' => 'bearer',
          'expires_in' => Auth::factory()->getTTL() * 60
      ], 200);
  }
