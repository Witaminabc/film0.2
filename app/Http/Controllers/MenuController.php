<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Commentss;

use Illuminate\Http\Request;

class MenuController extends Controller
{
     public function select(Commentss $commentss,Video $video,$id){
     	   		$yearfull='Год выпуска: '.$id;

   		$videos=$commentss::where(['year'=>$yearfull])->get();
   		$videos2=$commentss::where(['year'=>$yearfull])->get();
   		$commentss=$commentss::where(['year'=>$yearfull])->paginate(3);

   		return view('menusend',compact('videos','videos2','commentss'));
   }

 
            


}
