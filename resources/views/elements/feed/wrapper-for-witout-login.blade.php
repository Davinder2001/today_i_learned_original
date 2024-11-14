@if(count($posts))
<div class="without-login-show posts">
    @foreach($posts as $post)          
        <div data-id="{{ $post->id }}">
                @include('elements.feed.post-box', ['is_visited' => $post->is_visited_post ? true : false])
        </div>
    @endforeach
</div>
@else
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-10">
            <img src="{{asset('/img/no-content-available.svg')}}">
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <h5 class="text-center mb-2 mt-2">{{__('No posts available')}}</h5>
    </div>
@endif
