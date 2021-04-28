@extends('layouts.base')

@section('css')

@endsection

@section('body')



<!--home post-->
<div class="home-post">
    <div class="container-home-post">
        <div class="wepper-image-post">
            <!--figer1-->
            <div class="container-figer1-home-post">
                <figure>
                    <img src="{{$post1->featured}}" alt="">
                </figure>
                <div class="informtion-home-post">
                    @foreach ($post1->tags as $tage)
                    <p class="tag-home-post">{{ $tage->name}}</p>
                    @endforeach
                    <p class="post-name-home-post">{{$post1->title}}</p>
                    <div class="auther-created-home-post">
                        <p class="auther-home-post">Ammar alazii</p>
                        <p class="created-home-post">&#9679; &ThinSpace;{{$post1->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            </div>
            <!--/figer1-->

            <!--figer2-->
            <div class="container-figer2-home-post">
                <figure>
                    <img src="{{$post2->featured}}" alt="">
                </figure>
                <div class="informtion2-home-post">
                    @foreach ($post2->tags as $tage)
                    <p class="tag2-home-post">{{ $tage->name}}</p>
                    @endforeach
                    <p class="post2-name-home-post">{{$post2->title}}</p>
                    <div class="authe2r-created-home-post">
                        <p class="auther2-home-post">Ammar alazii</p>
                        <p class="created2-home-post">&#9679; &ThinSpace;{{$post1->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            </div>
            <!--/figer2-->

            <!--figer3-->
            <div class="container-figer3-home-post">
                <figure>
                    <img src="{{$post3->featured}}" alt="">
                </figure>
                <div class="informtion3-home-post">
                    @foreach ($post3->tags as $tage)
                    <p class="tag3-home-post">{{ $tage->name}}</p>
                    @endforeach
                    <p class="post3-name-home-post">{{$post3->title}}</p>
                    <div class="auther3-created-home-post">
                        <p class="auther3-home-post">Ammar alazii</p>
                        <p class="created3-home-post">&#9679; &ThinSpace;{{$post1->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            </div>
            <!--/figer3-->

        </div>
    </div>
</div>
<!--/home post-->

<!--cards-->
<div class="card-container">
    <div class="card-wepper">
    @foreach ($posts as $post)
    <a href="{{route('home.detail',['slug'=>$post->slug])}}" style="text-decoration: none">
        <div class="card-cards">
            <div class="avater-card">
                <img src="{{$post->featured}}" alt="">
            </div>
            <div class="crad-tags">
                @foreach ($post->tags as $tag)
                    {{$tag->name}}
                @endforeach
            </div>
            <div class="card-name">
                {{$post->title}}
            </div>
            <div class="card-auther-created">
                <p>auther name</p>
                <p>&#9679; &ThinSpace;{{$post1->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </a>

    @endforeach
    </div>
</div>
<!--/cards-->
@endsection
