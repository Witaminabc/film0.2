<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;
use Event;
use App\Events\Newev;
use Log;
use App\Comment;
use App\Commentss;



class PlayerController extends Controller{




   public function index(Commentss $commentss,Video $video,Comment $comment,$idd){

   		      $comment=$comment::where(['commentid'=>$idd])->get();

      $commentss=$commentss::where(['id'=>$idd])->get();

     
      return view('player',compact('commentss','comment'));
   }

}