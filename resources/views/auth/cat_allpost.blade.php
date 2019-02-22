@extends('layouts.singlepage')


@section('content')

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$cat->name}}</h1>
    </div>
</div>

<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
               <div class="row">
                        <div class="case-item-wrap">

     
                        	@if($cat->posts)

                        	@foreach($cat->posts as $post)

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                       <img src="{{$post->featured}}" alt="{{$post->title}}">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{route('post.description',['slug'=>$post->slug,'id'=>Crypt::encrypt($post->id)])}}">{{$post->title}}</a></h6>
                                </div>
                            </div>

                            @endforeach

                            @else
                             <div class="text-center">
                             	There is no Post
                             </div>

                            @endif





                        </div>
            </div>

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
                            
                            @foreach($tags as $tag)
                            
                            	<a href="{{route('tag.allpost',['id'=>$tag->id])}}" class="w-tags-item">{{$tag->tag_name}}</a>
                            
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>


@stop

