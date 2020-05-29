@extends('layouts.app')


@section('content2')
    <ul class="nav nav-tabs">
      <li role="presentation" @click="currentTab = 'home'"><a href="#" class="glyphicon glyphicon-star-empty"><img src="logo11.png" alt=""></a></li>
      <li role="presentation" @click="currentTab = 'profile'"><a href="#" class="glyphicon glyphicon-th"><img src="logo22.png" alt=""></a></li>
     
    </ul>

   <div class="tab-content">
    <div v-if="currentTab == 'home'"> 
 
  
<div class="container-fluid">
    <div class="row">
@foreach( $videos as $video)

<div class="jumbotron"  id="blok1"> 
        <div class="container">
          <div class="col-xs-3" >
               <a href="video{{$video->id}}" > <img src="imgnew/{{$video->imglinkname}}" alt="" width="170px" height="270px"> </a>
               
<div class="nav justify-content-center">{{$video->name}}</div>
<star-rating v-bind:star-points="[]"
            v-bind:increment="0.5"
             v-bind:max-rating="10"
             inactive-color="#000"
             active-color="#f00"
             v-bind:star-size="15">
            
</star-rating>
</div>
</div>
</div>
@endforeach
</div></div>  
</div>
    <div v-if="currentTab == 'profile'">
@foreach( $videos2 as $video)
        <div class="jumbotron" id="blok3"> 
<div class="container" id="blok2">
    <div class="row">
        
        <div class="col-md-2"><img src="imgnew/{{$video->imglinkname}}" alt=""  height="300px" width="200">  </div>
        <div class="col-md-7" id="textinblog3">
            <div class="col-12">
              <div>{{$video->country}}</div>
              <div>{{$video->year}}</div>
              <div>{{$video->folloing}}</div>
              <div>{{$video->producer}}</div>
            <div>{{$video->mainrole}}</div>
                <div>{{$video->ganrrr}}</div>


          </div>
<button type="button" class="btn btn-primary">смотреть онлайн</button> <br>
<star-rating @rating-selected="rating = $event" :rating="rating"></star-rating>

 


</div>
    </div>
</div> 
</div> 
@endforeach
</div>

{{ $videos2->links() }}

 </div>



@endsection
