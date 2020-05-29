<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Commentss;


class SearchController extends Controller
{
    public function search(Request $request,Commentss $commentss)
{
    $posts = $commentss::WhereLike('name', $request->keywords)->get();

    return response()->json($posts);
}
}
