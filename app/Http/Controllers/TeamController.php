<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Commentss;

use Illuminate\Http\Request;

class TeamController extends Controller
{
     public function select(Commentss $commentss,Video $video,$id){

   		$videos=$commentss::where(['country'=>$id])->get();
   		$videos2=$commentss::where(['country'=>$id])->paginate(5);
   		$commentss=$commentss::WhereLike('country',$id)->paginate(5);

   		return view('team',compact('videos','videos2','commentss'));
   }

 
            


}
