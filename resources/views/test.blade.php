@extends('layouts.app')


@section('content')
	<ul class="nav nav-tabs">
      <li role="presentation" @click="currentTab = 'home'"><a href="#" class="glyphicon glyphicon-star-empty">asdads</a></li>
      <li role="presentation" @click="currentTab = 'profile'"><a href="#" class="glyphicon glyphicon-th">ddddddd 
</a></li>
     
    </ul>

   <div class="tab-content">
    <div v-if="currentTab == 'home'"> 

 
  
<div class="container-fluid">
	<div class="row">
@foreach( $videos as $video)

 <div class="jumbotron"  id="blok1"> 
        <div class="container">
          <div class="col-xs-3" >
               <a href="video{{$video->id}}" > <img src="{{$video->img}}" alt="" width="170px" height="270px"> </a>
               <div class="nav justify-content-center">{{$video->name}}({{$video->year}})</div>
      <star-rating v-bind:star-points="[]"
            v-bind:increment="0.5"
             v-bind:max-rating="10"
             inactive-color="#000"
             active-color="#f00"
             v-bind:star-size="15">
            
</star-rating>

<!-- v-on:rating-selected="setRating"
 -->


</div>
</div>
</div>

@endforeach
</div></div>  
</div>
    <div v-if="currentTab == 'profile'">
@foreach( $videos2 as $video)
    	<comp4 value="{{$video->img}}"></comp4>
@endforeach
</div>


 </div>



@endsection


