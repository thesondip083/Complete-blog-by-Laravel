<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$setdata->site_name}}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>



     <!--ADDED CSS BY SONDIP FOR POPUP NOTIFICATION-->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">



    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">
    
    @include('auth.admin.includes.header')

    <div class="header-spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{$first_post->featured}}" alt="{{$first_post->title}}">
                            <div class="overlay"></div>
                            <a href="{{$first_post->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>


                            <a href="{{
                                        route('post.description',
                                        ['slug'=>$first_post->slug,
                                        'id'=>Crypt::encrypt($first_post->id)])
                                    }}"
                                     class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                        <a href="{{
                                        route('post.description',
                                        ['slug'=>$first_post->slug,
                                        'id'=>Crypt::encrypt($first_post->id)])}}">{{$first_post->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$first_post->created_at->diffForHumans()}}
                                            <!--diffForHumans() uses carbon a PHP Class-->
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.allpost',['id'=>$first_post->category->id])}}">{{$first_post->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{$second_post->featured}}" alt="{{$second_post->title}}">
                            <div class="overlay"></div>
                            <a href="{{$second_post->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                           <a href="{{route('post.description',['slug'=>$second_post->slug,'id'=>Crypt::encrypt($second_post->id)])}}" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                        <a href="{{route('post.description',['slug'=>$second_post->slug,'id'=>Crypt::encrypt($second_post->id)])}}">{{$second_post->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$second_post->created_at->diffForHumans()}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.allpost',['id'=>$second_post->category->id])}}">{{$second_post->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{$third_post->featured}}" alt="{{$third_post->title}}">
                            <div class="overlay"></div>
                            <a href="{{$third_post->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{route('post.description',['slug'=>$third_post->slug,'id'=>Crypt::encrypt($third_post->id)])}}" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                        <a href="{{route('post.description',['slug'=>$third_post->slug,'id'=>Crypt::encrypt($third_post->id)])}}">{{$third_post->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$third_post->created_at->toFormattedDateString()}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.allpost',['id'=>$third_post->category->id])}}">{{$third_post->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$cat1->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            <!--
                            one cat many posts..posts() mane method r sudhu posts mane property


                            If you issue the post count using the method as follows:
                            $count = $tag->posts()->count();
                            That will generate the proper SQL with the COUNT aggregate function.
                            In the other hand, if you issue the post count using the dynamic property (accessor) as follows:
                            $count = count($tag->posts);
                            That will fetch all the posts, convert them to an array of objects, then counting the number of element of the array.

                            https://stackoverflow.com/questions/17974806/method-vs-dynamic-property-in-eloquent-orm-with-laravel
                            -->
                            @foreach($cat1->posts()->orderBy('created_at','desc')->take(3)->get()  as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{route('post.description',[
                                       'slug'=>$post->slug,
                                       'id'=>Crypt::encrypt($post->id)
                                        ])}}">{{$post->title}}</a></h6>
                                </div>
                            </div>


                            @endforeach
                            
                            
                        </div>
                    </div>

                </div>

                @if($cat1->posts()->count()>3)
                <div class="tags-wrap" align="right">
                  <a href="{{route('category.allpost',['id'=>$cat1->id])}}" class="w-tags-item"><h3><b>+More</b></h3></a>
                </div>
                @endif

                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$cat2->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">

                             @foreach($cat2->posts()->orderBy('created_at','desc')->take(3)->get()  as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{route('post.description',[
                                       'slug'=>$post->slug,
                                       'id'=>Crypt::encrypt($post->id)
                                        ])}}">{{$post->title}}</a></h6>
                                </div>
                            </div>


                            @endforeach
                            
                        </div>
                    </div>
                </div>


                @if($cat2->posts()->count()>3)
                <div class="tags-wrap" align="right">
                  <a href="{{route('category.allpost',['id'=>$cat2->id])}}" class="w-tags-item"><h3><b>+More</b></h3></a>
                </div>
                @endif


                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$cat3->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                           @foreach($cat3->posts()->orderBy('created_at','desc')->take(3)->get()  as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{route('post.description',[
                                       'slug'=>$post->slug,
                                       'id'=>Crypt::encrypt($post->id)
                                        ])}}">{{$post->title}}</a></h6>
                                </div>
                            </div>


                            @endforeach
                       </div>
                    </div>
                </div>

                @if($cat3->posts()->count()>3)
                <div class="tags-wrap" align="right">
                  <a href="{{route('category.allpost',['id'=>$cat3->id])}}" class="w-tags-item"><h3><b>+More</b></h3></a>
                </div>
                @endif
                <div class="padded-50"></div>
            </div>
            </div>
        </div>
    </div>

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="/subscribe">
                            {{csrf_field()}}
                            <input class="email input-standard-grey input-white" name="mail" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn" type="submit">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new blog content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="app/img/subscr-gear.png" alt="gear" class="gear">
                        <img src="app/img/subscr1.png" alt="mail" class="mail">
                        <img src="app/img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>



<!-- Footer -->

@include('auth.admin.includes.footer')

<!-- Overlay Search -->

 @include('auth.admin.includes.search')

<!-- End Overlay Search -->



<!-- JS Script -->

<script src="{{ asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('app/js/theme-plugins.js')}}"></script>
<script src="{{ asset('app/js/main.js')}}"></script>
<script src="{{ asset('app/js/form-actions.js')}}"></script>

<script src="{{ asset('app/js/velocity.min.js')}}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js')}}"></script>


<!-- ...end JS Script -->

<script id="dsq-count-scr" src="//sondips-laravel-blog.disqus.com/count.js" async></script>
<!---->

<!--added for pop up notification by sondip-->
 <script src="{{ asset('js/toastr.min.js') }}"></script>


 <script>
        @if(Session::has('subscribed'))
           toastr.success("{{Session::get('subscribed')}}");
        @endif
</script>

</body>
</html>
