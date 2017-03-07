<div class="timeline-profile">
    <div class="col-xs-6 col-sm-3 col-md-3 first user-profile">
        @if($timeline->id == Auth::user()->timeline_id)
        <div class="chang-user-avatar">
            <a href="#" class="btn btn-camera change-profile">
                <i class="fa fa-camera" aria-hidden="true"></i>
                <span class="profile-text">{{ trans('common.update_profile') }}<span>{{ trans('common.picture') }}</span></span>
            </a>
        </div>
        @endif
        <img class="loading hidden" src="{{asset('themes/streetskope/assets/images/loading1.gif')}}">
        <img src="{{ $timeline->user->profile_pict }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}">
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 last user-avatar">
        @if($timeline->id == Auth::user()->timeline_id)
        <div class="chang-user-avatar">
            <a href="#" class="btn btn-camera change-avatar">
                <i class="fa fa-camera" aria-hidden="true"></i>
                <span class="avatar-text">{{ trans('common.update_avatar') }}<span>{{ trans('common.picture') }}</span></span>
            </a>
        </div>
        @endif
        <img class="loading hidden" src="{{asset('themes/streetskope/assets/images/loading1.gif')}}">
        <img src="{{ $timeline->user->avatar }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 video">
        <img class="loading hidden" src="{{asset('themes/streetskope/assets/images/loading1.gif')}}">
        <video width="100%" height="305px" controls>
            <source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/mp4">
            <source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/webm">
            Your browser does not support the video tag.
        </video>
        @if($timeline->id == Auth::user()->timeline_id)
        <a class="btn btn-camera-video change-cover" href="#">
            <i class="fa fa-play"></i><span class="change-cover-text">Change video</span>
        </a>
        @endif
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btntim">
        <div class="timeline-btn">
            <div class="profile-name">
                <a href="#">{{ $timeline->name }}</a>
            </div>
            <ul class="list-inline pagelike-links">
                @if($user_post == true)
                <li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/posts') }}" ><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>
                @else
                <li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="#"><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>
                @endif
                <li class="{{ Request::segment(2) == 'liked-pages' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/liked-pages') }}" ><span class="top-list">{{ count($user->pageLikes) }} {{ trans('common.liked_pages') }}</span></a></li>
                <li class="{{ Request::segment(2) == 'joined-groups' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/joined-groups') }}" ><span class="top-list">{{ $joined_groups_count }}  {{ trans('common.joined_groups') }}</span></a></li>
                <li class="{{ Request::segment(2) == 'following' ? 'active' : '' }} smallscreen-report"><a href="{{ url($timeline->username.'/following') }}" ><span class="top-list">{{ $following_count }} {{ trans('common.following') }}</span></a></li>
                <li class="{{ Request::segment(2) == 'follow-requests' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/follow-requests') }}" ><span class="top-list">{{count($followRequests)}} {{ trans('common.follow_requests') }}</span></a></li> </ul>
        </div> <!-- /timeline-list  -->
    </div>
</div>

<div id="single-img-modal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="single-img">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>

<div id="single-video-modal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <video class="modal-content" id="single-video" controls></video>

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>
