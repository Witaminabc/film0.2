<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>#blok6{
            width: 210px;
            height: 320px;
            padding: 10px;
            margin: 10px;
            background-color:#2a2d34;
            color:white;
        }
        #blok9{
            
            padding: 10px;
            margin: 10px;
            background-color:#2a2d34;
            color:white;
        }
        #blok1{
            width: 210px;
            height: 320px;
            padding: 10px;
            margin: 10px;
            background-color:#2a2d34;
            color:white;
        }

        #textcolorplayer{
            color: white;
        }
        }
        #menubar1{
            background-color: #202328;
        }

        #menubar{
            background-color: #2a2d34;
            padding-left: 20px;
            margin: 20px;
            width: 340px;
        }

        #all{
            background-color: #202328;
        }

        #menubar2{
            padding-right:10px;
        }

        #menubar3{
            margin:0px; 
            padding: 0px;
        }


        #menubar4{
            padding-left: 60px;
        }
        #newtests{
            background-color: red;
        }
        #blok2{
            text-color:white;
            width: 900px;
            margin-left: -30px;
            margin-top:-50px;
            
        }

        #blok3{
            margin-left:20px;
            height: 330px; 
            background-color: #2a2d34;
            color:white;
        }

        #textinblog3{
            padding-left: 100px;
        }
        html, body {
           background-image: url(bg.png);}
           #app{
            color:green;
            background-color: #2a2d34;
            margin-bottom: -25px;

        }
        #slaider{
            margin-bottom: 0px;
            background-color: #2a2d34;
            padding-top:40px;
            padding-bottom:40px;
            margin-top:0px;
        }
        #player{
            color:white;
        }
        #staticEmail{
            width: 250px;
        }
        #inputPassword{
            width: 250px;
            margin-left:20px;
        }
        #commentid{
            margin-top: 10px;
        }
        #formsend{
            margin-top: 10px;
        }

        #player{
        color:white;
        }
        #commentsblok{
            margin: 0px;
            padding: 20px;
            background-color: #2a2d34;
        }
        #app4{

        }
        #add5{
            position:absolute;
            z-index:9999;
            width: 600px;
        }
        
        #tophead1{
            margin-left: 0px;
            padding-left: 20px;
            margin-bottom: 0px;

        }
        #tophead2{
            margin-top:20px;
        }

        #tophead3{
            margin-top:20px;
            padding-left: 50px;
        }

        #tophead4{
            margin-top:13px;
        }
        #header{
            background-color:         #2a2d34;
            margin-bottom: -24px;
        }
        #logo22{
            color:blue;
            margin-left: 20px;
            padding-top: 7px;
        }
        #logo22v{
            margin-left: 100px;
        }
        #formcolor{
            color: white;
        }
        #taskcolor{
            
            width: 500px   ;
            height: 500px;
            background-color: white;

        }
        #taskcolor >ul>li{
            display: inline-flex;
        }</style>
</head>
<body >
  <div class="container" id="app4">
            <div>
    <div class="container" id="header">
        <div class="row">
            <div class="col-3" id="tophead1">
                <img src="x-logo-top.png" alt="" width="180px">
            </div>

            <div class="col-3" id="tophead2">
                 <div class="input-group mb-2">
                <input type="text" v-model.lazy="keywords" v-debounce="300" placeholder="поиск...">
            
              <div class="input-group-text">@</div>
           @{{keywords}}
    </div>

                </div>


            

    
    <div class="col-3" id="tophead3">
        <img src="VK.png" alt="" width="30px">
        <img src="ok.png" alt="" width="30px">
        <img src="tvitter.png" alt="" width="30px">
        <img src="f.png" alt="" width="30px">
        <img src="Instagram_icon.png" alt="" width="30px">
    </div>

    <div class="col-3" id="tophead4">
        @include('shared')
    </div>
        </div>
    </div>

    <main class="what">
        <div class="container">  


            <ul class="nav nav-tabs nav-pills justify-content-center" id="menubar1">


              <li class="nav-item">
                <a class="btn btn-outline-primary" href="/">главная</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary " href="menusend2019" >новинки 2019</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="menusend2018">новинки 2018</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="menusend2017">новинки 2017</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="#">скоро</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="#">сериалы</a>
            </li>
            
        </ul>

    </div>

    <div class="container" id="slaider">
        <div class="col-md-12">
        <owl-carousel :autoplay="true" :nav="false" :items="6">
          <div ><img src="1563282597-697209690-shazam.jpg" alt="" height="150px" width="100" >   </div>
          <div> <img src="1530522804-1743140030-korol-lev-kino-go.mobi.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1562991051-94338796-ali-ruli.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1563425931-578595509-pirani-neapolya.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1563282597-697209690-shazam.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1562991051-94338796-ali-ruli.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1563425931-578595509-pirani-neapolya.jpg" alt=""  height="150px" width="200"> </div>
          <div> <img src="1562991051-94338796-ali-ruli.jpg" alt=""  height="150px" width="200"> </div>
      </owl-carousel>
      </div>
      
    </div>
               
    <div class="container " id="all">


        <div class="container " >
            <div class="row">
@include('menubar')
    
                        <div class="col-md-8" v-if="results.length >= 1">


                            <div class="container-fluid">
                                <div class="row">
                                    <div v-for="result in results" :key="result.id" class="jumbotron"  id="blok1"> 
                                        <div class="container">
                                          <div class="col-xs-3" >
                                             <a v-bind:href="'video'+ result.id " > <img :src="'imgnew/'+result.imglinkname" alt="" width="170px" height="270px"> </a>

                                             <div class="nav justify-content-center">@{{result.name}}(@{{result.year}})</div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>


                     </div>


                     <div class="col-md-8" v-else-if="results2.length >= 1">


                            <div class="container-fluid">
                                <div class="row">
                                    <div v-for="result in results2" :key="result.id" class="jumbotron"  id="blok1"> 
                                        <div class="container">
                                          <div class="col-xs-3" >
                                             <a v-bind:href="'video'+ result.id " > <img :src="'imgnew/'+result.imglinkname" alt="" width="170px" height="270px"> </a>

                                             <div class="nav justify-content-center">@{{result.name}}(@{{result.year}})</div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>


                     </div>




                     <div class="col-md-8"  v-else>
<!--       <div>@{{results.length}}</div>
 -->

                            @yield('content2')
                            @yield('content')

                        </div>








                    </div> 
                    </div> 










                </main>

     </div>
    </div>

    <script>
      </script>
</body>
</html>
