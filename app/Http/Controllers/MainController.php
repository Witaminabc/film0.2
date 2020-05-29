<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use Illuminate\Http\Request;
use App\Commentss;


class MainController extends Controller
{
     public function index(Commentss $commentss)
    {
		$videos=$commentss->paginate(12);
   		$videos2=$commentss->paginate(12);
   		$commentss=$commentss->paginate(12);
   		        return view('playerr',compact('videos','videos2','commentss'));
    }

    
}