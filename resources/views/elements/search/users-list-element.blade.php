<div class="user-search-box-item mb-4 search-user-wrap">
    <div class="row px-4 search-user-header">
        <div class="col-auto pr-0 search-image-top">
            <img src="{{$user->avatar}}" class="avatar rounded-circle shadow"/>
        </div>
        <div class="col search-content">
            <div class="d-flex justify-content-between">
                <div class="text-truncate user-search-box-info">
                    <div class="m-0 h6 text-truncate d-flex align-items-center">
                        <a href="{{route('profile',['username'=>$user->username])}}" class="text-bold text-{{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? 'white' : 'dark') : (Cookie::get('app_theme') == 'dark' ? 'white' : 'dark'))}} mr-2 d-flex align-items-center">
                            {{$user->name}}
                        </a>
                        @if($user->email_verified_at && $user->birthdate && ($user->verification && $user->verification->status == 'verified'))
                            <span class="" data-toggle="tooltip" data-placement="top" title="{{__('Verified user')}}">
                        @include('elements.icon',['icon'=>'checkmark-circle-outline','centered'=>true,'classes'=>'ml-1 text-primary'])
                    </span>
                        @endif
                    </div>
                    <div class="m-0 text-truncate small"><a href="{{route('profile',['username'=>$user->username])}}" class="text-muted">&commat;{{$user->username}}</a></div>
                </div>
                <div class="d-flex align-items-center search-user-button">
                    <a role="button" class="btn btn-round btn-outline-primary btn-sm px-3 mb-0" href="{{route('profile',['username'=>$user->username])}}">
                        {{__("View")}}
                    </a>
                </div>
            </div>

            <div class="mt-1 search-box-para">
                {{$user->bio ? $user->bio : __('No description available.')}}
            </div>

        </div>
    </div>

</div>
