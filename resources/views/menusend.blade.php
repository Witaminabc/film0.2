@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs">
      <li role="presentation" @click="currentTab = 'home'"><a href="#" class="glyphicon glyphicon-star-empty"><img src="logo11.png" alt=""></a></li>
      <li role="presentation" @click="currentTab = 'profile'"><a href="#" class="glyphicon glyphicon-th"><img src="logo22.png" alt=""></a></li>
      
       

    </ul>
        <div id="logo22"><span>ФИЛЬМЫ ОНЛАЙН В ХОРОШЕМ КАЧЕСТВЕ</span></div>

        <div id="logo22v">
        <img src="VK.png" alt="" width="30px">
        <img src="ok.png" alt="" width="30px">
        <img src="tvitter.png" alt="" width="30px">
        <img src="f.png" alt="" width="30px">
        <img src="Instagram_icon.png" alt="" width="30px">
    </div>
    </div>
</div>
    

   <div class="tab-content">
    <div v-if="currentTab == 'home'"> 
 
  
<div class="container-fluid">
    <div class="row">

        
<!-- <div class="container">

@foreach( $commentss as $commentsss)
            <div class="col-md-2" id="newtests"><img src="{{$commentsss->imglinkname}}" alt=""  height="300px" width="200"  >      {{$commentsss->imglinkname}}aaaaaaaaa
</div>
        @endforeach

</div> -->


@foreach( $commentss as $commentsss)

 <div class="jumbotron"  id="blok6"> 
        <div class="container">
          <div class="col-xs-3" >
               <a href="video{{$commentsss->id}}" > <img src="imgnew/{{$commentsss->imglinkname}}" alt="" width="170px" height="270px"> </a>
               
<div class="nav justify-content-center">{{$commentsss->name}}</div>
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
        <div class="col-md-4" id="textinblog3">ПРОБУЖДЕНИЕ (2019) <br>   
Год выпуска: 2019<br> 
Оригинальное название: Wake Up<br> 
Длительность: (92 мин. / 01:32)<br> 
Страна: США<br> 
Перевод: Многоголосый закадровый<br> 
Описание: Молодой парень после<br> 
<button type="button" class="btn btn-primary">смотреть онлайн</button> <br>
<star-rating v-bind:star-points="[]"
v-on:rating-selected="setRating"
            v-bind:increment="0.5"
             v-bind:max-rating="10"
             inactive-color="#000"
             active-color="#f00"
             v-bind:star-size="20">
            
</star-rating>
 
<h3>Selected Rating: @{{rating}}</h3>


</div>
    </div>
</div> 
</div> 
@endforeach
</div>


    
{{ $commentss->links() }}




 </div>



@endsection
