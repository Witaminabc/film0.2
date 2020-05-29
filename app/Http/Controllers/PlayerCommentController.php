<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class PlayerCommentController extends Controller
{
     public function index(Comment $comment ,Request $request){
     	$text=$request->text;
     	$commentid=$request->commentid;
   		$comment=Comment::create(['text' => $text,'commentid'=>$commentid]);
   		return back();
   }
}
