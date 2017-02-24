<?php /*<div class="timeline-cover-section">*/ ?>
<?php /*<div class="timeline-cover">*/ ?>
<?php /*<img src=" <?php if($timeline->cover_id): ?> <?php echo e(url('user/cover/'.$timeline->cover->source)); ?> <?php else: ?> <?php echo e(url('user/cover/default-cover-user.png')); ?> <?php endif; ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">*/ ?>
<?php /*<?php if($timeline->id == Auth::user()->timeline_id): ?>*/ ?>
<?php /*<a href="#" class="btn btn-camera-cover change-cover"><i class="fa fa-camera" aria-hidden="true"></i><span class="change-cover-text"><?php echo e(trans('common.change_cover')); ?></span></a>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*<div class="user-cover-progress hidden">*/ ?>

<?php /*</div>*/ ?>
<?php /*<!-- <div class="cover-bottom">*/ ?>
<?php /*</div> -->*/ ?>
<?php /*<div class="user-timeline-name">*/ ?>
<?php /*<a href="<?php echo e(url($timeline->username)); ?>"><?php echo e($timeline->name); ?></a>*/ ?>
<?php /*<?php if($timeline->user->verified): ?>*/ ?>
<?php /*<span class="verified-badge bg-success">*/ ?>
<?php /*<i class="fa fa-check"></i>*/ ?>
<?php /*</span>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="timeline-list">*/ ?>
<?php /*<ul class="list-inline pagelike-links">*/ ?>
<?php /*<?php if($user_post == true): ?>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'posts' ? 'active' : ''); ?>"><a href="<?php echo e(url($timeline->username.'/posts')); ?>" ><span class="top-list"><?php echo e(count($timeline->posts)); ?> <?php echo e(trans('common.posts')); ?></span></a></li>*/ ?>
<?php /*<?php else: ?>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'posts' ? 'active' : ''); ?>"><a href="#"><span class="top-list"><?php echo e(count($timeline->posts)); ?> <?php echo e(trans('common.posts')); ?></span></a></li>*/ ?>
<?php /*<?php endif; ?>*/ ?>


<?php /*<li class="<?php echo e(Request::segment(2) == 'liked-pages' ? 'active' : ''); ?>"><a href="<?php echo e(url($timeline->username.'/liked-pages')); ?>" ><span class="top-list"><?php echo e(count($user->pageLikes)); ?> <?php echo e(trans('common.liked_pages')); ?></span></a></li>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'joined-groups' ? 'active' : ''); ?>"><a href="<?php echo e(url($timeline->username.'/joined-groups')); ?>" ><span class="top-list"><?php echo e($joined_groups_count); ?>  <?php echo e(trans('common.joined_groups')); ?></span></a></li>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'following' ? 'active' : ''); ?> smallscreen-report"><a href="<?php echo e(url($timeline->username.'/following')); ?>" ><span class="top-list"><?php echo e($following_count); ?> <?php echo e(trans('common.following')); ?></span></a></li>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'followers' ? 'active' : ''); ?> smallscreen-report"><a href="<?php echo e(url($timeline->username.'/followers')); ?>" ><span class="top-list"><?php echo e($followers_count); ?>  <?php echo e(trans('common.followers')); ?></span></a></li>*/ ?>




<?php /*<li class="dropdown largescreen-report"><a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="top-list"> <i class="fa fa-ellipsis-h"></i></span></a>*/ ?>
<?php /*<ul class="dropdown-menu  report-dropdown">*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'following' ? 'active' : ''); ?>">*/ ?>
<?php /*<a href="<?php echo e(url($timeline->username.'/following')); ?>" ><span class="top-list"><?php echo e($following_count); ?> <?php echo e(trans('common.following')); ?></span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>

<?php /*<li class="<?php echo e(Request::segment(2) == 'followers' ? 'active' : ''); ?>">*/ ?>
<?php /*<a href="<?php echo e(url($timeline->username.'/followers')); ?>" ><span class="top-list"><?php echo e($followers_count); ?>  <?php echo e(trans('common.followers')); ?></span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>

<?php /*<?php if($follow_confirm == "yes" && $timeline->id == Auth::user()->timeline_id): ?>*/ ?>
<?php /*<li class="<?php echo e(Request::segment(2) == 'follow-requests' ? 'active' : ''); ?>">*/ ?>
<?php /*<a href="<?php echo e(url($timeline->username.'/follow-requests')); ?>" ><span class="top-list"><?php echo e(count($followRequests)); ?> <?php echo e(trans('common.follow_requests')); ?></span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<?php endif; ?>*/ ?>

<?php /*<li class="<?php echo e(Request::segment(2) == 'event-guests' ? 'active' : ''); ?>">*/ ?>
<?php /*<a href="<?php echo e(url($timeline->username.'/event-guests')); ?>" ><span class="top-list"><?php echo e(count($guest_events)); ?>  <?php echo e(trans('common.guest-event')); ?></span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>

<?php /*<?php if(Auth::user()->username != $timeline->username): ?>*/ ?>
<?php /*<?php if(!$timeline->reports->contains(Auth::user()->id)): ?>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.report')); ?>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="hidden">*/ ?>
<?php /*<a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i>	<?php echo e(trans('common.reported')); ?>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<?php else: ?>*/ ?>
<?php /*<li class="hidden">*/ ?>
<?php /*<a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.report')); ?>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i>	<?php echo e(trans('common.reported')); ?>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*</ul>*/ ?>
<?php /*</li>*/ ?>
<?php /*<?php if(Auth::user()->username != $timeline->username): ?>*/ ?>
<?php /*<?php if(!$timeline->reports->contains(Auth::user()->id)): ?>*/ ?>
<?php /*<li class="smallscreen-report"><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.report')); ?></a></li>*/ ?>
<?php /*<li class="hidden smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.reported')); ?></a></li>*/ ?>
<?php /*<?php else: ?>*/ ?>
<?php /*<li class="hidden smallscreen-report"><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.report')); ?></a></li>*/ ?>
<?php /*<li class="smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.reported')); ?></a></li>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<div class="status-button">*/ ?>
<?php /*<a href="#" class="btn btn-status"><?php echo e(trans('common.status')); ?></a>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="timeline-user-avtar">*/ ?>
<?php /*<?php if(strpos($timeline->user->avatar, '/image') !== false): ?>*/ ?>
<?php /*<img id="modal-image-1" src="<?php echo e($timeline->user->avatar); ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">*/ ?>
<?php /*<?php else: ?>*/ ?>
<?php /*<img id="modal-image-2" src="<?php echo e($timeline->user->avatar); ?>" data-video="<?php echo e($timeline->user->avatar_video); ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*<?php if($timeline->id == Auth::user()->timeline_id): ?>*/ ?>
<?php /*<div class="chang-user-avatar">*/ ?>
<?php /*<a href="#" class="btn btn-camera change-avatar"><i class="fa fa-camera" aria-hidden="true"></i><span class="avatar-text"><?php echo e(trans('common.update_profile')); ?><span><?php echo e(trans('common.picture')); ?></span></span></a>*/ ?>
<?php /*</div>*/ ?>
<?php /*<?php endif; ?>*/ ?>
<?php /*<div class="user-avatar-progress hidden">*/ ?>
<?php /*</div>*/ ?>
<?php /*</div><!-- /timeline-user-avatar -->*/ ?>

<?php /*</div><!-- /timeline-list -->*/ ?>
<?php /*</div><!-- timeline-cover-section -->*/ ?>

<div class="timeline-profile">
	<div class="profile-name">
		<a href="#">Muhammad Syukri Khafidh</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3 first user-profile">
		<img src="<?php echo e($timeline->user->profile_pict); ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
		<?php if($timeline->id == Auth::user()->timeline_id): ?>
			<div class="chang-user-avatar">
				<a href="#" class="btn btn-camera change-profile">
					<i class="fa fa-camera" aria-hidden="true"></i>
					<span class="profile-text"><?php echo e(trans('common.update_profile')); ?><span><?php echo e(trans('common.picture')); ?></span></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3 last user-avatar">
		<img src="<?php echo e($timeline->user->avatar); ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
		<?php if($timeline->id == Auth::user()->timeline_id): ?>
			<div class="chang-user-avatar">
				<a href="#" class="btn btn-camera change-avatar">
					<i class="fa fa-camera" aria-hidden="true"></i>
					<span class="avatar-text"><?php echo e(trans('common.update_avatar')); ?><span><?php echo e(trans('common.picture')); ?></span></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 video">
		<?php if($timeline->cover_id): ?>
			<video width="100%" height="305px" controls>
				<source src="<?php echo e(url('user/cover/video/'.$timeline->cover->source)); ?>" type="video/mp4">
				<source src="<?php echo e(url('user/cover/video/'.$timeline->cover->source)); ?>" type="video/webm">
				Your browser does not support the video tag.
			</video>
		<?php else: ?>
			<img src="<?php echo e(url('user/cover/image/default-cover-user.png')); ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
		<?php endif; ?>
		<a class="btn btn-camera-video change-cover" href="#">
			<i class="fa fa-play"></i><span class="change-cover-text">Change video</span>
		</a>
	</div>

	<div class="timeline-btn">
		<ul class="list-inline pagelike-links">
			<li class=""><a href="http://localhost:9090/bootstrapguru/posts"><span class="top-list">0 Posts</span></a></li>
			<li class=""><a href="http://localhost:9090/bootstrapguru/liked-pages"><span class="top-list">0 Liked Pages</span></a></li>
			<li class=""><a href="http://localhost:9090/bootstrapguru/joined-groups"><span class="top-list">0  Joined Groups</span></a></li>
			<li class=" smallscreen-report"><a href="http://localhost:9090/bootstrapguru/following"><span class="top-list">0 Following</span></a></li>
			<li class=" smallscreen-report"><a href="http://localhost:9090/bootstrapguru/followers"><span class="top-list">0  Followers</span></a></li>
			<li class="dropdown largescreen-report"><a href="http://localhost:9090/bootstrapguru#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="top-list"> <i class="fa fa-ellipsis-h"></i></span></a>
				<ul class="dropdown-menu  report-dropdown">
					<li class="">
						<a href="http://localhost:9090/bootstrapguru/following"><span class="top-list">0 Following</span>
						</a>
					</li>
					<li class="">
						<a href="http://localhost:9090/bootstrapguru/followers"><span class="top-list">0  Followers</span>
						</a>
					</li>
					<li class="">
						<a href="http://localhost:9090/bootstrapguru/event-guests"><span class="top-list">0  Guest Events</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="status-button">
			<a href="http://localhost:9090/bootstrapguru#" class="btn btn-status">Status</a>
		</div>
	</div> <!-- /timeline-list  -->
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



