<!-- main-section -->
<!-- <div class="main-content"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="post-filters">
					<?php echo Theme::partial('usermenu-settings'); ?>

				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				
					<div class="panel-heading no-bg panel-settings">
					<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<h3 class="panel-title">
							<?php echo e(trans('common.general_settings')); ?>

						</h3>
					</div>
					<div class="panel-body nopadding">
						<div class="socialite-form">							
							<form method="POST" action="<?php echo e(url('/'.$username.'/settings/general/')); ?>">
								<?php echo e(csrf_field()); ?>

								<div class="row">
									<div class="col-md-6">

										<fieldset class="form-group required <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('username', trans('common.username'))); ?>

											<?php echo e(Form::text('new_username', Auth::user()->username, ['class' => 'form-control', 'placeholder' => trans('common.username')])); ?>

											<?php if($errors->has('username')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('username')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
										
									</div>
									<div class="col-md-6">
										<fieldset class="form-group required <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('name', trans('common.fullname'))); ?>

											<?php echo e(Form::text('name', Auth::user()->name, ['class' => 'form-control', 'placeholder' => trans('common.fullname')])); ?>

											<?php if($errors->has('name')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('name')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
									</div>
								</div>
								<fieldset class="form-group">
									<?php echo e(Form::label('about', trans('common.about'))); ?>

									<?php echo e(Form::textarea('about', Auth::user()->about, ['class' => 'form-control', 'placeholder' => trans('messages.about_user_placeholder')])); ?>

								</fieldset>

								<div class="row">
									<div class="col-md-6">
										<fieldset class="form-group required <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('email', trans('auth.email_address'))); ?>

											<?php echo e(Form::email('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => trans('auth.email_address')])); ?>

											<?php if($errors->has('email')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('email')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="form-group required">
											<?php echo e(Form::label('gender', trans('common.gender'))); ?>

											<?php echo e(Form::select('gender', array('male' => trans('common.male'), 'female' => trans('common.female'), 'other' => trans('common.none')), Auth::user()->gender, array('class' => 'form-control'))); ?>										
										</fieldset>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('country', trans('common.country'))); ?>

											<?php echo e(Form::text('country', Auth::user()->country, array('class' => 'form-control', 'placeholder' => trans('common.country')))); ?>

										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('city', trans('common.current_city'))); ?>

											<?php echo e(Form::text('city', Auth::user()->city, ['class' => 'form-control', 'placeholder' => trans('common.current_city')])); ?>

										</fieldset>
									</div>
								</div>

									<h3>
										<?php echo e(trans('common.personal')); ?>

									</h3>
									<hr>

									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('birthday', trans('common.birthday'))); ?>

												

												<div class="input-group date datepicker">

													<span class="input-group-addon addon-left calendar-addon">
														<span class="fa fa-calendar"></span>
													</span>
													<?php echo e(Form::text('birthday', Auth::user()->birthday, ['class' => 'form-control', 'id' => 'datepicker1'])); ?>

													<span class="input-group-addon addon-right angle-addon">
														<span class="fa fa-angle-down"></span>
													</span>
												</div>
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('designation', trans('common.designation'))); ?>

												<?php echo e(Form::text('designation', Auth::user()->designation, ['class' => 'form-control', 'placeholder' => trans('common.your_qualification')])); ?>

											</fieldset>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											
											<fieldset class="form-group">
												<?php echo e(Form::label('hobbies', trans('common.hobbies'))); ?>

												<?php echo e(Form::text('hobbies', Auth::user()->hobbies, ['class' => 'add_selectize', 'placeholder' => trans('common.mention_your_hobbies')])); ?>

											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('interests', trans('common.interests'))); ?>

												<?php echo e(Form::text('interests', Auth::user()->interests, ['class' => 'add_selectize', 'placeholder' => trans('common.add_your_interests')])); ?>

											</fieldset>
										</div>
									</div>
									<?php if(Setting::get('custom_option1') != NULL || Setting::get('custom_option2') != NULL): ?>
										<div class="row">
											<?php if(Setting::get('custom_option1') != NULL): ?>
											<div class="col-md-6">
												<fieldset class="form-group">
													<?php echo e(Form::label('custom_option1', Setting::get('custom_option1'))); ?>

													<?php echo e(Form::text('custom_option1', Auth::user()->custom_option1, ['class' => 'form-control'])); ?>

												</fieldset>
											</div>
											<?php endif; ?>

											<?php if(Setting::get('custom_option2') != NULL): ?>
											<div class="col-md-6">
												<fieldset class="form-group">
													<?php echo e(Form::label('custom_option2', Setting::get('custom_option2'))); ?>

													<?php echo e(Form::text('custom_option2', Auth::user()->custom_option2, ['class' => 'form-control'])); ?>

												</fieldset>
											</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>

									<?php if(Setting::get('custom_option3') != NULL || Setting::get('custom_option4') != NULL): ?>
										<div class="row">
											<?php if(Setting::get('custom_option3') != NULL): ?>
											<div class="col-md-6">
												<fieldset class="form-group">
													<?php echo e(Form::label('custom_option3', Setting::get('custom_option3'))); ?>

													<?php echo e(Form::text('custom_option3', Auth::user()->custom_option3, ['class' => 'form-control'])); ?>

												</fieldset>
											</div>
											<?php endif; ?>

											<?php if(Setting::get('custom_option4') != NULL): ?>
											<div class="col-md-6">
												<fieldset class="form-group">
													<?php echo e(Form::label('custom_option4', Setting::get('custom_option4'))); ?>

													<?php echo e(Form::text('custom_option4', Auth::user()->custom_option4, ['class' => 'form-control'])); ?>

												</fieldset>
											</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>

									<h3>
										<?php echo e(trans('common.be_social')); ?>

									</h3>
									<hr>
									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('facebook_link', trans('admin.facebook_link'))); ?>

												<div class="input-group facebook-input-group">
													<div class="input-group-addon fb-btn"><i class="fa fa-facebook"></i></div>
													<?php echo e(Form::text('facebook_link', Auth::user()->facebook_link, array('class' => 'form-control account-form', 'placeholder' => trans('admin.facebook_link')))); ?>

												</div>

											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('youtube_link', trans('admin.youtube_link'))); ?>

												<div class="input-group facebook-input-group youtube-input-group">
													<div class="input-group-addon youtube-btn"><i class="fa fa-youtube"></i></div>
													<?php echo e(Form::text('youtube_link', Auth::user()->youtube_link, array('class' => 'form-control', 'placeholder' => trans('admin.youtube_link')))); ?>

												</div>

											</fieldset>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('twitter_link', trans('admin.twitter_link'))); ?>

												<div class="input-group facebook-input-group twitter-input-group">
													<div class="input-group-addon twitter-btn"><i class="fa fa-twitter"></i></div>
													<?php echo e(Form::text('twitter_link', Auth::user()->twitter_link, array('class' => 'form-control', 'placeholder' => trans('admin.twitter_link')))); ?>

												</div>

											</fieldset>
										</div>			
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('instagram_link', trans('admin.instagram_link'))); ?>

												<div class="input-group facebook-input-group instagram-input-group">
													<div class="input-group-addon instagram-btn"><i class="fa fa-instagram"></i></div>
													<?php echo e(Form::text('instagram_link', Auth::user()->instagram_link, array('class' => 'form-control', 'placeholder' => trans('admin.instagram_link')))); ?>

												</div>

											</fieldset>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('dribbble_link', trans('admin.dribbble_link'))); ?>

												<div class="input-group facebook-input-group dribbble-input-group">
													<div class="input-group-addon dribbble-btn"><i class="fa fa-dribbble"></i></div>
													<?php echo e(Form::text('dribbble_link', Auth::user()->dribbble_link, array('class' => 'form-control', 'placeholder' => trans('admin.dribbble_link')))); ?>

												</div>

											</fieldset>
										</div>			
										<div class="col-md-6">
											<fieldset class="form-group">
												<?php echo e(Form::label('linkedin_link', trans('admin.linkedin_link'))); ?>

												<div class="input-group facebook-input-group linkedin-input-group">
													<div class="input-group-addon linkedin-btn"><i class="fa fa-linkedin"></i></div>
													<?php echo e(Form::text('linkedin_link', Auth::user()->linkedin_link, array('class' => 'form-control', 'placeholder' => trans('admin.linkedin_link')))); ?>

												</div>

											</fieldset>
										</div>
									</div>

									<div class="pull-right">
										<?php echo e(Form::submit(trans('common.save_changes'), ['class' => 'btn btn-success'])); ?>

									</div>
									<div class="clearfix"></div>
								</form>
							</div><!-- /Socialite-form -->
						</div>
					</div>
					<!-- End of first panel -->

					<div class="panel panel-default">
						<div class="panel-heading no-bg panel-settings">
							<h3 class="panel-title">
								<?php echo e(trans('common.update_password')); ?>

							</h3>
						</div>
						<div class="panel-body nopadding">
							<div class="socialite-form">								
								<form method="POST" action="<?php echo e(url('/'.Auth::user()->username.'/settings/password/')); ?>">
									<?php echo e(csrf_field()); ?>


									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group <?php echo e($errors->has('current_password') ? ' has-error' : ''); ?>">
												<?php echo e(Form::label('current_password', trans('common.current_password'))); ?>

												<input type="password" class="form-control" id="current_password" name="current_password" value="<?php echo e(old('current_password')); ?>" placeholder= "<?php echo e(trans('messages.enter_old_password')); ?>">

												<?php if($errors->has('current_password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('current_password')); ?></strong>
												</span>
												<?php endif; ?>
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group <?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
												<?php echo e(Form::label('new_password', trans('common.new_password'))); ?>

												<input type="password" class="form-control" id="new_password" name="new_password" value="<?php echo e(old('new_password')); ?>" placeholder="<?php echo e(trans('messages.enter_new_password')); ?>">

												<?php if($errors->has('new_password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('new_password')); ?></strong>
												</span>
												<?php endif; ?>
											</fieldset>
										</div>
									</div>

									<div class="pull-right">
										<?php echo e(Form::submit(trans('common.save_password'), ['class' => 'btn btn-success'])); ?>

									</div>
									<div class="clearfix"></div>
								</form>
							</div><!-- /Socialite-form -->
						</div>
					</div>
					<!-- End of second panel -->

				</div>
			</div><!-- /row -->
		</div>
	<!-- </div> --><!-- /main-content -->
