<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Events\Newev;
use App\Commentss;


class FormfilterController extends Controller
{
    public function formfilter(Commentss $commentss,Request $request)
{	
		$doulod2=$request->keywords3;

	$doulod=$request->keywords2;
		$send2=$doulod2;
				$send3=$request->keywords4;


	$send='Год выпуска: '.$doulod;
    // $posts = $commentss::where('year',$send)->WhereLike('country',$send2)->get();
 // $posts = $commentss::WhereLike('country',$send2)->get();
	 $posts = DB::table('commentsses')
	 ->where(function ($query) use($send,$send2,$send3) {
                $query->where('year',$send)->where('country','like','%'.$send2.'%')->where('ganrrr','like','%'.$send3.'%');
                      
            })
	 ->get();

// ->where(function ($query) {
//                 $query->WhereLike('country',$send2)
//                       ->where('year',$send);
//             })
// 
    return response()->json($posts);
}
}
