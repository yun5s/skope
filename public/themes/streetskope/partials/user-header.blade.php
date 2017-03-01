{{--<div class="timeline-cover-section">--}}
{{--<div class="timeline-cover">--}}
{{--<img src=" @if($timeline->cover_id) {{ url('user/cover/'.$timeline->cover->source) }} @else {{ url('user/cover/default-cover-user.png') }} @endif" alt="{{ $timeline->name }}" title="{{ $timeline->name }}">--}}
{{--@if($timeline->id == Auth::user()->timeline_id)--}}
{{--<a href="#" class="btn btn-camera-cover change-cover"><i class="fa fa-camera" aria-hidden="true"></i><span class="change-cover-text">{{ trans('common.change_cover') }}</span></a>--}}
{{--@endif--}}
{{--<div class="user-cover-progress hidden">--}}

{{--</div>--}}
{{--<!-- <div class="cover-bottom">--}}
{{--</div> -->--}}
{{--<div class="user-timeline-name">--}}
{{--<a href="{{ url($timeline->username) }}">{{ $timeline->name }}</a>--}}
{{--@if($timeline->user->verified)--}}
{{--<span class="verified-badge bg-success">--}}
{{--<i class="fa fa-check"></i>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="timeline-list">--}}
{{--<ul class="list-inline pagelike-links">--}}
{{--@if($user_post == true)--}}
{{--<li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/posts') }}" ><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>--}}
{{--@else--}}
{{--<li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="#"><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>--}}
{{--@endif--}}


{{--<li class="{{ Request::segment(2) == 'liked-pages' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/liked-pages') }}" ><span class="top-list">{{ count($user->pageLikes) }} {{ trans('common.liked_pages') }}</span></a></li>--}}
{{--<li class="{{ Request::segment(2) == 'joined-groups' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/joined-groups') }}" ><span class="top-list">{{ $joined_groups_count }}  {{ trans('common.joined_groups') }}</span></a></li>--}}
{{--<li class="{{ Request::segment(2) == 'following' ? 'active' : '' }} smallscreen-report"><a href="{{ url($timeline->username.'/following') }}" ><span class="top-list">{{ $following_count }} {{ trans('common.following') }}</span></a></li>--}}
{{--<li class="{{ Request::segment(2) == 'followers' ? 'active' : '' }} smallscreen-report"><a href="{{ url($timeline->username.'/followers') }}" ><span class="top-list">{{ $followers_count }}  {{ trans('common.followers') }}</span></a></li>--}}




{{--@if(Auth::user()->username != $timeline->username)--}}
{{--@if(!$timeline->reports->contains(Auth::user()->id))--}}
{{--<li>--}}
{{--<a href="#" class="page-report report" data-timeline-id="{{ $timeline->id }}"> <i class="fa fa-flag" aria-hidden="true"></i>{{ trans('common.report') }}--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="hidden">--}}
{{--<a href="#" class="page-report reported" data-timeline-id="{{ $timeline->id }}"> <i class="fa fa-flag" aria-hidden="true"></i>	{{ trans('common.reported') }}--}}
{{--</a>--}}
{{--</li>--}}
{{--@else--}}
{{--<li class="hidden">--}}
{{--<a href="#" class="page-report report" data-timeline-id="{{ $timeline->id }}"> <i class="fa fa-flag" aria-hidden="true"></i>{{ trans('common.report') }}--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="#" class="page-report reported" data-timeline-id="{{ $timeline->id }}"> <i class="fa fa-flag" aria-hidden="true"></i>	{{ trans('common.reported') }}--}}
{{--</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--@endif--}}
{{--</ul>--}}
{{--</li>--}}
{{--@if(Auth::user()->username != $timeline->username)--}}
{{--@if(!$timeline->reports->contains(Auth::user()->id))--}}
{{--<li class="smallscreen-report"><a href="#" class="page-report report" data-timeline-id="{{ $timeline->id }}">{{ trans('common.report') }}</a></li>--}}
{{--<li class="hidden smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="{{ $timeline->id }}">{{ trans('common.reported') }}</a></li>--}}
{{--@else--}}
{{--<li class="hidden smallscreen-report"><a href="#" class="page-report report" data-timeline-id="{{ $timeline->id }}">{{ trans('common.report') }}</a></li>--}}
{{--<li class="smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="{{ $timeline->id }}">{{ trans('common.reported') }}</a></li>--}}
{{--@endif--}}
{{--@endif--}}
{{--</ul>--}}
{{--<div class="status-button">--}}
{{--<a href="#" class="btn btn-status">{{ trans('common.status') }}</a>--}}
{{--</div>--}}
{{--<div class="timeline-user-avtar">--}}
{{--@if(strpos($timeline->user->avatar, '/image') !== false)--}}
{{--<img id="modal-image-1" src="{{ $timeline->user->avatar }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}">--}}
{{--@else--}}
{{--<img id="modal-image-2" src="{{ $timeline->user->avatar }}" data-video="{{ $timeline->user->avatar_video }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}">--}}
{{--@endif--}}
{{--@if($timeline->id == Auth::user()->timeline_id)--}}
{{--<div class="chang-user-avatar">--}}
{{--<a href="#" class="btn btn-camera change-avatar"><i class="fa fa-camera" aria-hidden="true"></i><span class="avatar-text">{{ trans('common.update_profile') }}<span>{{ trans('common.picture') }}</span></span></a>--}}
{{--</div>--}}
{{--@endif--}}
{{--<div class="user-avatar-progress hidden">--}}
{{--</div>--}}
{{--</div><!-- /timeline-user-avatar -->--}}

{{--</div><!-- /timeline-list -->--}}
{{--</div><!-- timeline-cover-section -->--}}

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
		<!-- <img src="{{ $timeline->user->profile_pict }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}"> -->
		<div class="prof" style="background-image: url('{{ $timeline->user->profile_pict }}');" title="{{ $timeline->name }}"></div>
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
		<!-- <img src="{{ $timeline->user->avatar }}" alt="{{ $timeline->name }}" title="{{ $timeline->name }}"> -->
		<div class="prof" style="background-image: url('{{ $timeline->user->avatar }}');" title="{{ $timeline->name }}"></div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 video">
		<img class="loading hidden" src="{{asset('themes/streetskope/assets/images/loading1.gif')}}">
		<video width="100%" height="305px" controls>
			<source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/mp4">
			<source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/webm">
			Your browser does not support the video tag.
		</video>
		{{--@if($timeline->cover_id)
			<video width="100%" height="305px" controls>
				<source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/mp4">
				<source src="@if($timeline->cover_id) {{ url('user/cover/video/'.$timeline->cover->source) }} @else {{ url('user/cover/video/default-video.mp4') }} @endif" type="video/webm">
				Your browser does not support the video tag.
			</video>
		@else
			<video width="100%" height="305px" controls>
				<source src="{{ url('user/cover/video/'.$timeline->cover->source) }}" type="video/mp4">
				<source src="{{ url('user/cover/video/'.$timeline->cover->source) }}" type="video/webm">
				Your browser does not support the video tag.
			</video>		@endif--}}
		<a class="btn btn-camera-video change-cover" href="#">
			<i class="fa fa-play"></i><span class="change-cover-text">Change video</span>
		</a>
	</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btntim">
	<div class="timeline-btn">
		<div class="profile-name">
			<a href="#">{{ $timeline->name }}</a>
		</div>
		<div class="btn-tools">
			<a href="#" class="btn btn-default">Add to my network</a>
			<a href="#" class="btn btn-default">Message</a>
			<span class="dropdown">
			  <a href="#" class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
			    <i class="fa fa-cog"></i>
			    <span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
			    <li role="presentation" class="divider"></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
			  </ul>
			</span><!-- /dropdown -->
		</div><!-- /btn-tools -->
		<ul class="list-inline pagelike-links">
			@if($user_post == true)
			<li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/posts') }}" ><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>
			@else
			<li class="{{ Request::segment(2) == 'posts' ? 'active' : '' }}"><a href="#"><span class="top-list">{{ count($timeline->posts) }} {{ trans('common.posts') }}</span></a></li>
			@endif
			<li class="{{ Request::segment(2) == 'liked-pages' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/liked-pages') }}" ><span class="top-list">{{ count($user->pageLikes) }} {{ trans('common.liked_pages') }}</span></a></li>
			<li class="{{ Request::segment(2) == 'joined-groups' ? 'active' : '' }}"><a href="{{ url($timeline->username.'/joined-groups') }}" ><span class="top-list">{{ $joined_groups_count }}  {{ trans('common.joined_groups') }}</span></a></li>
			<!-- <li class="{{ Request::segment(2) == 'following' ? 'active' : '' }} smallscreen-report"><a href="{{ url($timeline->username.'/following') }}" ><span class="top-list">{{ $following_count }} {{ trans('common.following') }}</span></a></li>
			<li class="{{ Request::segment(2) == 'followers' ? 'active' : '' }} smallscreen-report"><a href="{{ url($timeline->username.'/followers') }}" ><span class="top-list">{{ $followers_count }}  {{ trans('common.followers') }}</span></a></li> -->
			<li class="dropdown largescreen-report"><a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="top-list"> <i class="fa fa-ellipsis-h"></i></span></a>
				<ul class="dropdown-menu  report-dropdown">
					<li class="{{ Request::segment(2) == 'following' ? 'active' : '' }}">
						<a href="{{ url($timeline->username.'/following') }}" ><span class="top-list">{{ $following_count }} {{ trans('common.following') }}</span></a>
					</li>

					<li class="{{ Request::segment(2) == 'followers' ? 'active' : '' }}">
						<a href="{{ url($timeline->username.'/followers') }}" ><span class="top-list">{{ $followers_count }}  {{ trans('common.followers') }}</span></a>
					</li>

					@if($follow_confirm == "yes" && $timeline->id == Auth::user()->timeline_id)
					<li class="{{ Request::segment(2) == 'follow-requests' ? 'active' : '' }}">
						<a href="{{ url($timeline->username.'/follow-requests') }}" ><span class="top-list">{{count($followRequests)}} {{ trans('common.follow_requests') }}</span></a>
					</li>
					@endif

					<li class="{{ Request::segment(2) == 'event-guests' ? 'active' : '' }}">
						<a href="{{ url($timeline->username.'/event-guests') }}" ><span class="top-list">{{ count($guest_events) }}  {{ trans('common.guest-event') }}</span></a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- <div class="status-button">
			<a href="#" class="btn btn-status">{{ trans('common.status') }}</a>
		</div> -->
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
