@extends('layouts.app')


@section('content')









<div class="container" id="textcolorplayer">
    <div class="row">
       @foreach( $commentss as $video)
       <div class="jumbotron"  id="blok9"> 
        <div class="container-fluid">
                <div class="row">

            <div class="col-xs-3" >
                <div class="nav justify-content-center">{{$video->name}}</div>

              <a href="{{$video->id}}" > <img src="imgnew/{{$video->imglinkname}}" alt="" width="270px" height="370px"> </a>
              
              
          </div>
          <div class="col-7">
              <div>{{$video->country}}</div>
              <div>{{$video->year}}</div>
              <div>{{$video->folloing}}</div>
              <div>{{$video->producer}}</div>
            <div>{{$video->mainrole}}</div>
                                <div>{{$video->ganrrr}}</div>


          </div>
      </div>


  </div>


<div class="col-xs-3" >
  <h3> 
    {{$video->writing}}
</h3>
   

    <div class="plyr__video-embed" id="player"  playsinline controls>
        <iframe width="700px" height="400px" allowfullscreen
        src="{{$video->iframehref}}"
        ></iframe>
    </div>






</div>

</div>
@endforeach</div>
<div class="container">



<div id="commentsblok">
<form class="form" action="/videocomment" method="post">
  {{ csrf_field() }} 
    <div class="form-inline">
      <input type="text"  name="text" class="form-control" id="staticEmail" placeholder="name">
    
      <input type="text" name="email" class="form-control" id="inputPassword" placeholder="email">
     <input type="text" name="commentid"  class="form-control-plaintext" id="innumber" value="{{$video->id}}"> 
    </div>
       <textarea type="number" name="" class="form-control" id="commentid" cols="90" rows="5"      >{{$video->id}}</textarea>
  <button type="submit" class="btn btn-primary mb-2" id="formsend">отправить</button>
  
</form>
</div>

@foreach($comment as $comments)
<div class="col-xs-3 "><form action="/videocomment" method="post">
   {{ csrf_field() }}
  <textarea name="text" id="" cols="90" rows="5"    >{{$comments->text}}</textarea> 
<button>редактировать</button>  </form>
</div>


@endforeach

</div>


@endsection

