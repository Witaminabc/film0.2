<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use Illuminate\Http\Request;

class TaskControllerController extends Controller
{
     public function index()
    {
    	$videostop=Video::where('ganr','three')->count();
        return view('layouts.task',compact('videostop'));
    }

    
}