@extends('layouts.singlepage')

@section('content')

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$data->title}}</h1>
    </div>
</div>

<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{$data->featured}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">{{$data->user->name}}</a>
                                    <!--data hocche post er data 
                                        every post have one user and user has name
                                    -->
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                            <time class="published" datetime="2016-03-20 12:00:00">
                                {{$data->created_at->diffForHumans()}}
                            </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>   
                        <a href="{{route('category.allpost',['id'=>$data->category->id])}}" class="w-tags-item">{{$data->category->name}}</a>
                            </span>

                        </div>

                        <div class="post__content-info">
                            
                           
                            <p class="post__text">
                                
                                {!!$data->content!!}
                               
                            </p>
                            <div class="widget w-tags">
                                <div class="tags-wrap">
                            
                            @foreach($data->tags as $tag)
                            
                        <a href="{{route('tag.allpost',['id'=>$tag->id])}}" class="w-tags-item">{{$tag->tag_name}}</a>
                            
                            @endforeach
                        </div>

                            </div>
                            

                        </div>
                    </div>

                    <div class="socials">Share:
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                    </div>

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                        <img src="{{asset($data->user->profile->avatar)}}" alt="Author" width="100" height="100">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{$data->user->name}}</h5>
                           
                        </div>
                        <p class="text">{{$data->user->profile->about}}
                        </p>
                        <div class="socials">
                        @if($data->user->profile->facebook)
                        <a href="{{$data->user->profile->facebook}}" class="social__item">
                                <img src="/app/svg/circle-facebook.svg" alt="facebook">
                        </a>
                        @endif
                         @if($data->user->profile->twitter)
                         <a href="{{$data->user->profile->twitter}}" class="social__item">
                                <img src="/app/svg/twitter.svg" alt="twitter">
                        </a>
                        @endif

                        <!--every user must have a mail so i dont have to check it-->

                        <a href="{{$data->user->mail}}" class="social__item">
                                <img src="/app/svg/google.svg" alt="google">
                        </a>
                        

                         @if($data->user->profile->youtube)
                         <a href="{{$data->user->profile->youtube}}" class="social__item">
                                <img src="/app/svg/youtube.svg" alt="youtube">
                         </a>
                         @endif

                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">

                    

                    @if($next_post)
                    <a href="{{route('post.description',['slug'=>$next_post->slug,'id'=>Crypt::encrypt($next_post->id)])}}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">{{$next_post->title}}</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                    @endif

                    @if($prev_post)

                    <a href="{{route('post.description',['slug'=>$prev_post->slug,'id'=>Crypt::encrypt($prev_post->id)])}}" class="btn-prev-wrap">

                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">{{$prev_post->title}}</p>
                        </div>
                    </a>
                    @endif
                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                   <!-- FOR COMMENTING  add disqus -->

                   <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                    var disqus_config = function () {
                    this.page.url = "{{route('post.description', ['slug'=>$data->slug,'id'=>Crypt::encrypt($data->id)])}}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "{{$data->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://sondips-laravel-blog-1.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                








                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                            
                                @foreach($data->tags as $tag)
                            
                            
                                <a href="{{route('tag.allpost',['id'=>$tag->id])}}" class="w-tags-item">{{$tag->tag_name}}</a>
                            
                                  @endforeach
                                  
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>
</div>
 

@stop