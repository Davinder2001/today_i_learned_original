@extends('layouts.NewHomeLayout')

@section('page_title', __(":username post",['username'=>$post->user->name]))

@section('styles')
    {!!
        Minify::stylesheet([
            '/css/posts/post.css',
            '/libs/swiper/swiper-bundle.min.css',
            '/libs/photoswipe/dist/photoswipe.css',
            '/css/pages/checkout.css',
            '/libs/photoswipe/dist/default-skin/default-skin.css',
         ])->withFullUrl()
    !!}
    @if(getSetting('feed.post_box_max_height'))
        @include('elements.feed.fixed-height-feed-posts', ['height' => getSetting('feed.post_box_max_height')])
    @endif
@stop

@section('scripts')
    {!!
        Minify::javascript([
            '/libs/swiper/swiper-bundle.min.js',
            '/js/PostsPaginator.js',
            '/js/CommentsPaginator.js',
            '/js/Post.js',
            '/js/pages/lists.js',
            '/js/pages/checkout.js',
            '/js/plugins/media/photoswipe.js',
            '/libs/@joeattardi/emoji-button/dist/index.js',
            '/libs/photoswipe/dist/photoswipe-ui-default.min.js',
            '/js/plugins/media/mediaswipe.js',
            '/js/plugins/media/mediaswipe-loader.js',
            '/js/posts/view.js',
         ])->withFullUrl()
    !!}
@stop

@section('content')
    <div class="container">
        <div class="min-vh-100 col-12 border-right  pr-md-0 all-post-user-id">
            <div class="feed-box mt-0 pt-4 mb-3 posts-wrapper">
                @include('elements.message-alert',['classes'=>'pt-0 pb-4 px-2'])
                @include('elements.feed.post-box')                
            </div>
        </div>
        
    </div>
    @include('elements.photoswipe-container')
    @include('elements.feed.post-delete-dialog')
    @include('elements.checkout.checkout-box')

    @include('elements.standard-dialog',[
        'dialogName' => 'comment-delete-dialog',
        'title' => __('Delete comment'),
        'content' => __('Are you sure you want to delete this comment?'),
        'actionLabel' => __('Delete'),
        'actionFunction' => 'Post.deleteComment();',
    ])

@stop
