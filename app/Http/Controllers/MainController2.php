

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Commentss;

use Illuminate\Http\Request;

class MainController extends Controller
{
     public function index(Commentss $commentss)
   		$commentss=$commentss->paginate(12);
        return view('layouts.app',compact('commentss'));
    }

    
}
