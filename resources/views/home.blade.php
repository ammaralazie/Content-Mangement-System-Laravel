@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{asset('mystyle\css\homePosts.css')}}">
@endsection

@section('body')


<!--sidebar menu-->

<div class="sidbar-containser">
    <div class="sidebar-header">
        My App
    </div>
    <div class="sidebar-lists">
        <ul>
            <li id="category_list"> 1111111111111111111<i class="fas fa-sort-down"></i>

            <ul id="category-sid-bar">
                <li><a href="">kkkk</a></li>
                <li><a href="">kkkk</a></li>
                <li><a href="">kkkk</a></li>
                <li><a href="">kkkk</a></li>
                <li><a href="">kkkk</a></li>
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
<!--home post-->
<div class="home-post">
    <div class="container-home-post">
        <div class="wepper-image-post">
            <!--figer1-->
            <div class="container-figer1-home-post">
                <figure>
                    <img src="{{asset('media/avatar/1.jpg')}}" alt="">
                </figure>
                <div class="informtion-home-post">
                    <p class="tag-home-post">Tsg Name</p>
                    <p class="post-name-home-post">post Name ;jdgnfjhnfdjbhnfdj</p>
                    <div class="auther-created-home-post">
                        <p class="auther-home-post">Ammar alazii</p>
                        <p class="created-home-post">&#9679; &ThinSpace;Ammar alazii</p>
                    </div>
                </div>
            </div>
            <!--/figer1-->

            <!--figer2-->
            <div class="container-figer2-home-post">
                <figure>
                    <img src="{{asset('media/avatar/1.jpg')}}" alt="">
                </figure>
                <div class="informtion2-home-post">
                    <p class="tag2-home-post">Tsg Name</p>
                    <p class="post2-name-home-post">post Name ;jdgnfjhnfdjbhnfdj</p>
                    <div class="authe2r-created-home-post">
                        <p class="auther2-home-post">Ammar alazii</p>
                        <p class="created2-home-post">&#9679; &ThinSpace;Ammar alazii</p>
                    </div>
                </div>
            </div>
            <!--/figer2-->

            <!--figer3-->
            <div class="container-figer3-home-post">
                <figure>
                    <img src="{{asset('media/avatar/1.jpg')}}" alt="">
                </figure>
                <div class="informtion3-home-post">
                    <p class="tag3-home-post">Tsg Name</p>
                    <p class="post3-name-home-post">post Name ;jdgnfjhnfdjbhnfdj</p>
                    <div class="auther3-created-home-post">
                        <p class="auther3-home-post">Ammar alazii</p>
                        <p class="created3-home-post">&#9679; &ThinSpace;Ammar alazii</p>
                    </div>
                </div>
            </div>
            <!--/figer3-->

        </div>
    </div>
</div>
<!--/home post-->
@endsection
