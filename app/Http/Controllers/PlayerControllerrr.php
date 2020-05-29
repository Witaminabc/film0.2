<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;
use Event;
use App\Events\Newev;
use Log;
use App\Comment;
use App\Commentss;



class PlayerControllerrr extends Controller{




   public function index(Commentss $commentss,Video $video,Comment $comment,$iddd){
   		
      $commentss=$commentss::where(['id'=>$iddd])->get();
      $commentss2 = $commentss::pluck('title');

   		return view('playerr',compact('commentss','commentss2'));
   }

}