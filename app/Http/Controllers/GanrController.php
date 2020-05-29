<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Events\Newev;
use App\Commentss;


class GanrController extends Controller
{
     public function select(Commentss $commentss,Video $video,$id){


   		$videos=$commentss::WhereLike('ganrrr',$id)->paginate(12);
   		$videos2=$commentss::WhereLike('ganrrr',$id)->paginate(12);
   		// event(new Newev($videos));
   		
   		return view('ganr',compact('videos','videos2'));
   }
}
