<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('mystyle\css\style.css')}}">
    @yield('css')
    <title>navbar</title>
</head>
<body>
    <!--  navbar  -->
    <div class="container_nav">

         <!--  wepper  -->
        <div class="wepper">

             <!--  logo  -->
            <div class="logo">
                <div class="title_nav">
                   <a href=""> {{$user}}</a>
                </div>
                <div class="social_nav">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-github"></i></a>
                </div>
            </div>
             <!--  /logo  -->

             <!--  /serach  -->
            <div class="search_nav">
                <i class="far fa-search"></i>
                <div class="spans_nav">
                <span></span>
                <span></span>
                <span></span>
                </div>
            </div>
            <!--  /serach  -->

        </div>
        <!--  /wepper  -->
        <div class="wepper2">
            <div class="category-nav">
                <ul id='category'>
                    @foreach ($category as $i)
                    <li><a href="">{{$i->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
     <!--  /navbar  -->
     @yield('body')
     <script src="{{asset('mystyle\js\main.js')}}"></script>
     @yield('script')
</body>
</html>
