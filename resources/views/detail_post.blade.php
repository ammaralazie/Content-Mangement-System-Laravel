@extends('layouts.base')
    @section('css')
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href/img/favicon.ico">

    <!-- CSS here -->

        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <style>
        .single_product_img {
            margin-top: 24px;
            /* margin: auto; */
            width: 100%;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .img-fluid {
            max-width: 100%;
            height: 100%;
            width: 100%;
            box-shadow: 2px 2px 2px #1a1a1a;
            border-radius: 6px;

        }
        .post-title-detail{
            position: absolute;
            top: 6px;
            left: 10px;
            text-align: left;
            background: #fff6;
            padding: 10px;
            border-radius: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .post-title-detail p{
            color: rgb(31, 31, 31);
            font-size: 24px;
            font-weight: 700;
        }
        .prvieose-post,.next-post{
            position: absolute;
            font-size: 20px;
            color: #fff;
            cursor: pointer;
        }
        .prvieose-post{
            left: 10px;
        }
        .next-post{
            right: 10px;
        }
        </style>
    @stop




@section('body')
        <!--================Single Product Area =================-->

        <div class="product_image_area">

            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_product_img">
                        <img src="{{$post->featured}}" alt="#" class="img-fluid">
                        <div class="post-title-detail">
                            <p>{{$post->title}}</p>
                        </div>
                        <div class="prvieose-post">
                            @if($previous)
                            <a href="{{route('home.detail',['slug'=>$previous->slug])}}">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            @endif
                        </div>
                        <div class="next-post">
                            @if($next)
                            <a href="{{route('home.detail',['slug'=>$next->slug])}}">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <p>
                       {{$post->content}}
                    </p>

                        @foreach ($post->tags as $tag)
                        <a href="#" class="badge badge-danger">Danger</a>
                        @endforeach

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
        <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://crm-3.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@stop

