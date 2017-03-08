<nav class="navbar socialite navbar-default bg-turqoise">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand socialite" href="{{ url('/') }}">
                <img class="socialite-logo" src="{!! url('setting/'.Setting::get('logo')) !!}" alt="{{ Setting::get('site_name') }}" title="{{ Setting::get('site_name') }}">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/p/construction') }}" title="Main Page">Main</a></li>
                <li><a href="{{ url('/') }}" title="Home Page">Home</a></li>
            </ul>
            @if (Auth::guest())
            <ul class="nav navbar-nav navbar-left">
                <li class="logout">
                    <a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> {{ trans('common.join') }}</a>
                </li>
                @if (Config::get('app.env') == 'demo')
                <li class="logout">
                    <a href="http://socialite-rtl.laravelguru.com" target="_blank">{{ trans('common.rtl_version') }}</a>
                </li>
                @endif
            </ul>
            @else
            <ul class="nav navbar-nav navbar-left" id="navbar-right" v-cloak>
                <li>
                    <ul class="list-inline notification-list">
                        <li class="dropdown message notification">
                            <a href="#" data-toggle="dropdown" @click.prevent="showNotifications" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell">
                                    @if(Auth::user()->notifications()->where('seen',0)->count() > 0)
                                    <span class="count hidden">{{ Auth::user()->notifications()->where('seen',0)->count() }}</span>
                                    <span class="count" v-if="unreadNotifications > 0" >@{{ unreadNotifications }}</span>
                                    @endif
                                </i>
                                <span class="small-screen">{{ trans('common.notifications') }}</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <span class="side-left">{{ trans('common.notifications') }}</span>
                                    <a v-if="unreadNotifications > 0" class="side-right" href="#" @click.prevent="markNotificationsRead" >{{ trans('messages.mark_all_read') }}</a>
                                    <div class="clearfix"></div>
                                </div>
                                @if(Auth::user()->notifications()->count() > 0)
                                <ul class="list-unstyled dropdown-messages-list scrollable" data-type="notifications">
                                    <li class="inbox-message"  v-bind:class="[ !notification.seen ? 'active' : '' ]" v-for="notification in notifications.data">
                                        <a href="{{ url(Auth::user()->username.'/notification/') }}/@{{ notification.id }}">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-icon" v-bind:src="notification.notified_from.profile_pict" alt="images">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <span class="notification-text"> @{{ notification.description }} </span>
                                                        <span class="message-time">
                                                            <span class="notification-type"><i class="fa fa-user"></i></span>
                                                            <time class="timeago" datetime="@{{ notification.created_at }}+00:00" title="@{{ notification.created_at }}+00:00">
                                                                @{{ notification.created_at }}+00:00
                                                            </time>
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-message" v-for="(key, followRequest) in followRequests">
                                        <a href="{{ url(Auth::user()->username.'/follow-requests/') }}">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-icon" v-bind:src="followRequest.profile_pict" alt="images">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <span class="notification-text"> @{{ followRequest.name }} request to connect </span>
                                                        <span class="message-time">
                                                            <span class="notification-type"><i class="fa fa-user"></i></span>
                                                            <time class="timeago" datetime="@{{ followRequest.pivot.created_at }}+00:00" title="@{{ followRequest.pivot.created_at }}+00:00">
                                                                @{{ followRequest.pivot.created_at }}+00:00
                                                            </time>
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pull-right btn-req">
                                            <a href="#" class="btn btn-to-follow accept-follow btn-success accept btn-xs" @click.prevent="followAccept(followRequest.id, key)">
                                                <i class="fa fa-thumbs-up"></i> {{ trans('common.accept') }} 
                                            </a>
                                            <a href="#" class="btn btn-to-follow reject-follow btn-danger reject btn-xs" @click.prevent="followReject(followRequest.id, key)">
                                                <i class="fa fa-thumbs-down"></i> {{ trans('common.decline') }}
                                            </a>
                                        </div>
                                        <!-- /btn request -->
                                    </li>
                                    <li v-if="notificationsLoading" class="dropdown-loading">
                                        <i class="fa fa-spin fa-spinner"></i>
                                    </li>
                                </ul>
                                @else
                                <div class="no-messages">
                                    <i class="fa fa-bell-slash-o"></i>
                                    <p>{{ trans('messages.no_notifications') }}</p>
                                </div>
                                @endif
                                <div class="dropdown-menu-footer">
                                    <a href="{{ url('allnotifications') }}">{{ trans('common.see_all') }}</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown message largescreen-message">
                            <a href="#" data-toggle="dropdown" @click="showConversations" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-comments">
                                    <span class="count" v-if="unreadConversations" >@{{ unreadConversations }}</span>
                                </i>
                                <span class="small-screen">{{ trans('common.messages') }}</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <span class="side-left">{{ trans('common.messages') }}</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="no-messages hidden">
                                    <i class="fa fa-commenting-o"></i>
                                    <p>{{ trans('messages.no_messages') }}</p>
                                </div>
                                <ul class="list-unstyled dropdown-messages-list scrollable" data-type="messages">
                                    <li class="inbox-message" v-for="conversation in conversations.data">
                                        <a href="#" onclick="chatBoxes.sendMessage(@{{ conversation.user.id }})">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-icon" v-bind:src="conversation.user.profile_pict" alt="images">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <span class="message-heading">@{{ conversation.user.name }}</span> 
                                                        <span class="online-status hidden"></span>
                                                        <time class="timeago message-time" datetime="@{{ conversation.lastMessage.created_at }}+00:00" title="@{{ conversation.lastMessage.created_at }}+00:00">
                                                            @{{ conversation.lastMessage.created_at }}+00:00
                                                    </h4>
                                                    <p class="message-text">
                                                        @{{ conversation.lastMessage.body }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li v-if="conversationsLoading" class="dropdown-loading">
                                        <i class="fa fa-spin fa-spinner"></i>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="{{ url('messages') }}">{{ trans('common.see_all') }}</a>
                                </div>
                            </div>
                        </li>
                        <li class="smallscreen-message">
                            <a href="{{ url('messages') }}">
                                <i class="fa fa-comments">
                                    <span class="count" v-if="unreadConversations" >@{{ unreadConversations }}</span>
                                </i>
                                <span class="small-screen">{{ trans('common.messages') }}</span>
                            </a>
                        </li>
                        <!-- <li class="chat-list-toggle">
                                <a href="#"><i class="fa fa-users"></i><span class="small-screen">chat-list</span></a>
                        </li> -->
                    </ul>
                </li>
                <li class="dropdown user-image socialite">
                    <a href="{{ url(Auth::user()->username) }}" class="dropdown-toggle no-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        <span class="small-screen">{{ Auth::user()->name }}</span>
                        <!-- <span class="user-name">{{ Auth::user()->name }}</span> -->
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        @if(Auth::user()->hasRole('admin'))
                        <li class="{{ Request::segment(1) == 'admin' ? 'active' : '' }}"><a href="{{ url('admin') }}"><i class="fa fa-user-secret"></i>{{ trans('common.admin') }}</a></li>
                        @endif
                        <li class="{{ (Request::segment(1) == Auth::user()->username && Request::segment(2) == '') ? 'active' : '' }}"><a href="{{ url(Auth::user()->username) }}"><i class="fa fa-user"></i>{{ trans('common.my_profile') }}</a></li>

                        <li class="{{ Request::segment(2) == 'pages-groups' ? 'active' : '' }}"><a href="{{ url(Auth::user()->username.'/pages-groups') }}"><i class="fa fa-bars"></i>{{ trans('common.my_pages_groups') }}</a></li>

                        <li class="{{ Request::segment(3) == 'events' ? 'active' : '' }}"><a href="{{ url(Auth::user()->username.'/events') }}"><i class="fa fa-calendar"></i>{{ trans('common.events') }}</a></li>

                        <li class="{{ Request::segment(3) == 'general' ? 'active' : '' }}"><a href="{{ url('/'.Auth::user()->username.'/settings/general') }}"><i class="fa fa-cog"></i>{{ trans('common.settings') }}</a></li>

                        <li><a href="{{ url('/logout') }}"><i class="fa fa-unlock"></i>{{ trans('common.logout') }}</a></li>
                    </ul>
                </li>
                <!--  <li class="logout">
                     <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i></a>
                 </li> -->
            </ul>
            @endif

            <form class="navbar-form navbar-right form-left" role="search">
                <div class="input-group no-margin">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                    <input type="text" id="navbar-search" data-url="{{ URL::to('api/v1/timelines') }}" class="form-control" placeholder="Search">
                </div><!-- /input-group -->
            </form>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>	


{!! Theme::asset()->container('footer')->usePath()->add('notifications', 'js/notifications.js') !!}

