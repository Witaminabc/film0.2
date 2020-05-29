<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <script src="js/app.js" defer></script>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #submenu {
                width: 700px;
            }
        </style>
    </head>
    <body>
         <div class="container">
        

            <div class="content">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="" alt="">
                      <div class="dropdown" >
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Кнопка выпадающего списка
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
<div class="container-fluid" id="submenu"> 
    
             <div class="col">   
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
     <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
     </div>  
     <div class="col">   
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
     <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
     </div>  
     <div class="col">   
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
     <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
      
    </div></div>
  </div>
</div>   
                        <button type="button" class="btn btn-light">сериалы</button>
                    
                    <button type="button" class="btn btn-light">мультфильмы</button>
                    <button type="button" class="btn btn-light">новинки</button><button type="button" class="btn btn-light">скоро в кино</button>
                    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="поиск" aria-label="Search">
       <a href="/login"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">войти
  
</button></a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      @yield('content1')
    </div>
  </div>
</div>
    </form>


                   
                                    </nav>

                </div>



                <div class="container">
                    Лордфильм, смотреть фильмы онлайн

Киноманы найдут излюбленные картины на Лордфильме прошедших лет, могут насладиться просмотром победителей Оскара. Попивая чай, возможно делать паузу, если возникнет нужда оторваться от экрана. Прелесть посещения онлайн кинотеатра Лордфильм состоит в способности досмотреть наилучшие киноленты бесплатно в HD качестве при любой подходящей возможности и спокойной обстановке. Забудьте о поиске свободного места на устройстве, а новинки и классика жанров доступна без скачивания.
                </div>
                <div class="container">
                    
                    <nav class="navbar navbar-expand-lg ">
  
      <button type="button" class="btn btn-warning">последний</button>
  <button type="button" class="btn btn">последний</button>
  <button type="button" class="btn btn">популярные</button>
  <button type="button" class="btn btn">по рейтингу</button>
</nav>
                </div>
               
            </div>
        </div>

    </body>
</html>
