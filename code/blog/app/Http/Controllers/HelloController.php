<?php

namespace App\Http\Controllers;
use App\Jobs\HelloJob;

class HelloControl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function HelloControl()
    {
        //
        dispatch(new HelloJob);
    }

    //
    
}