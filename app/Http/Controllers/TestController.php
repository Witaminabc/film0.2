<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index(Video $video, User $user)
    {
    	$videos=$video::all();
    	$videos2=$video::all();
    	
// $user = Auth::user()->email;
        return view('test',compact('videos','videos2','user'));
    }

    
}
