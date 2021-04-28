<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('mystyle\css\style.css')}}">
    <link rel="stylesheet" href="{{asset('mystyle\css\homePosts.css')}}">
    @yield('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

     <!--sidebar menu-->

<div class="sidbar-containser">
    <div class="sidebar-header">
        My App
    </div>
    <div class="sidebar-lists">
        <ul>
            <li id="category_list"> Category &ThinSpace;<i class="fas fa-sort-down"></i>

            <ul id="category-sid-bar">
                @foreach ($category as $i)
                    <li><a href="">{{$i->name}}</a></li>
                @endforeach
            </ul>
            </li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
            <li><a href="">1111111111111111111</a></li>
        </ul>
    </div>
</div>

<!--/sidebar menu-->
     @yield('body')
     <script src="{{asset('mystyle\js\main.js')}}"></script>
     @yield('script')
</body>
</html>
