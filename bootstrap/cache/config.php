<?php return array (
  'app' => 
  array (
    'env' => 'server',
    'debug' => false,
    'url' => 'http://streetskope.local/',
    'timezone' => 'Asia/Kolkata',
    'locales' => 
    array (
      'en' => 'English',
      'fr' => 'French',
      'es' => 'Spanish',
      'ar' => 'Arabic',
      'iw' => 'Hebrew',
      'it' => 'Italian',
      'pt' => 'Portuguese',
      'ru' => 'Russia',
      'ja' => 'Japanese',
      'nl' => 'Dutch',
      'zh' => 'Chines',
      'hi' => 'Hindi',
      'tr' => 'Turkish',
    ),
    'fallback_locale' => 'en',
    'key' => 'base64:b+Iqiw/rFX5EYeumpOI5EBfJGnJQvv6mimwQRA0Y5ME=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      13 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      14 => 'Illuminate\\Queue\\QueueServiceProvider',
      15 => 'Illuminate\\Redis\\RedisServiceProvider',
      16 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      17 => 'Illuminate\\Session\\SessionServiceProvider',
      18 => 'Illuminate\\Translation\\TranslationServiceProvider',
      19 => 'Illuminate\\Validation\\ValidationServiceProvider',
      20 => 'Illuminate\\View\\ViewServiceProvider',
      21 => 'App\\Providers\\AppServiceProvider',
      22 => 'App\\Providers\\AuthServiceProvider',
      23 => 'App\\Providers\\EventServiceProvider',
      24 => 'App\\Providers\\RouteServiceProvider',
      25 => 'Collective\\Html\\HtmlServiceProvider',
      26 => 'Laracasts\\Flash\\FlashServiceProvider',
      27 => 'Prettus\\Repository\\Providers\\RepositoryServiceProvider',
      28 => 'InfyOm\\Generator\\InfyOmGeneratorServiceProvider',
      29 => 'InfyOm\\CoreTemplates\\CoreTemplatesServiceProvider',
      30 => 'Teepluss\\Theme\\ThemeServiceProvider',
      31 => 'Alaouy\\Youtube\\YoutubeServiceProvider',
      32 => 'Intervention\\Image\\ImageServiceProvider',
      33 => 'Anhskohbo\\NoCaptcha\\NoCaptchaServiceProvider',
      34 => 'Laravel\\Socialite\\SocialiteServiceProvider',
      35 => 'Cmgmyr\\Messenger\\MessengerServiceProvider',
      36 => 'Zizaco\\Entrust\\EntrustServiceProvider',
      37 => 'Cviebrock\\EloquentSluggable\\ServiceProvider',
      38 => 'Vijaytupakula\\Transvel\\TransvelServiceProvider',
      39 => 'RachidLaasri\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Flash' => 'Laracasts\\Flash\\Flash',
      'Theme' => 'Teepluss\\Theme\\Facades\\Theme',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Setting' => 'App\\Setting',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
      'Entrust' => 'Zizaco\\Entrust\\EntrustFacade',
    ),
    'locale' => 'en',
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'email' => 'auth.emails.password',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '0167101f7c5cc2436045',
        'secret' => 'd8c3a4bef698ac41d6d1',
        'app_id' => '304787',
        'options' => 
        array (
          'encrypted' => true,
          'cluster' => 'ap1',
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'array',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Library/WebServer/Documents/streetskope/storage/framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'captcha' => 
  array (
    'secret' => NULL,
    'sitekey' => NULL,
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'streetskope',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'streetskope',
        'username' => 'root',
        'password' => 'root123',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'streetskope',
        'username' => 'root',
        'password' => 'root123',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => 'localhost',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/Library/WebServer/Documents/streetskope/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'symfony_request' => true,
      'mail' => true,
      'logs' => false,
      'files' => false,
      'config' => false,
      'auth' => false,
      'gate' => false,
      'session' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => false,
      ),
      'db' => 
      array (
        'with_params' => true,
        'timeline' => false,
        'backtrace' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
  ),
  'entrust' => 
  array (
    'role' => 'App\\Role',
    'roles_table' => 'roles',
    'permission' => 'App\\Permission',
    'permissions_table' => 'permissions',
    'permission_role_table' => 'permission_role',
    'role_user_table' => 'role_user',
    'user_foreign_key' => 'user_id',
    'role_foreign_key' => 'role_id',
  ),
  'ffmpeg' => 
  array (
    'ffmpeg' => '/usr/local/bin/ffmpeg',
    'ffprobe' => '/usr/local/bin/ffprobe',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Library/WebServer/Documents/streetskope/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Library/WebServer/Documents/streetskope/storage/app/public',
        'visibility' => 'public',
      ),
      'uploads' => 
      array (
        'driver' => 'local',
        'root' => '/Library/WebServer/Documents/streetskope/storage/uploads',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'region' => 'your-region',
        'bucket' => 'your-bucket',
      ),
    ),
  ),
  'flavy' => 
  array (
    'ffmpeg_path' => '/usr/bin/ffmpeg',
    'ffprobe_path' => '/usr/bin/ffprobe',
  ),
  'google-translate' => 
  array (
    'api_key' => NULL,
    'translate_url' => 'https://www.googleapis.com/language/translate/v2',
    'detect_url' => 'https://www.googleapis.com/language/translate/v2/detect',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'infyom' => 
  array (
    'laravel_generator' => 
    array (
      'path' => 
      array (
        'migration' => '/Library/WebServer/Documents/streetskope/database/migrations/',
        'model' => '/Library/WebServer/Documents/streetskope/app//',
        'datatables' => '/Library/WebServer/Documents/streetskope/app/DataTables/',
        'repository' => '/Library/WebServer/Documents/streetskope/app/Repositories/',
        'routes' => '/Library/WebServer/Documents/streetskope/app/Http/routes.php',
        'api_routes' => '/Library/WebServer/Documents/streetskope/app/Http/api_routes.php',
        'request' => '/Library/WebServer/Documents/streetskope/app/Http/Requests/',
        'api_request' => '/Library/WebServer/Documents/streetskope/app/Http/Requests/API/',
        'controller' => '/Library/WebServer/Documents/streetskope/app/Http/Controllers/',
        'api_controller' => '/Library/WebServer/Documents/streetskope/app/Http/Controllers/API/',
        'test_trait' => '/Library/WebServer/Documents/streetskope/tests/traits/',
        'repository_test' => '/Library/WebServer/Documents/streetskope/tests/',
        'api_test' => '/Library/WebServer/Documents/streetskope/tests/',
        'views' => '/Library/WebServer/Documents/streetskope/resources/views/',
        'schema_files' => '/Library/WebServer/Documents/streetskope/resources/model_schemas/',
        'templates_dir' => '/Library/WebServer/Documents/streetskope/resources/infyom/infyom-generator-templates/',
      ),
      'namespace' => 
      array (
        'model' => 'App',
        'datatables' => 'App\\DataTables',
        'repository' => 'App\\Repositories',
        'controller' => 'App\\Http\\Controllers',
        'api_controller' => 'App\\Http\\Controllers\\API',
        'request' => 'App\\Http\\Requests',
        'api_request' => 'App\\Http\\Requests\\API',
      ),
      'templates' => 'core-templates',
      'model_extend_class' => 'Eloquent',
      'api_prefix' => 'api',
      'api_version' => 'v1',
      'options' => 
      array (
        'softDelete' => true,
        'tables_searchable_default' => false,
      ),
      'add_on' => 
      array (
        'swagger' => true,
        'tests' => true,
        'datatables' => false,
        'menu' => 
        array (
          'enabled' => false,
          'menu_file' => 'layouts/menu.blade.php',
        ),
      ),
      'timestamps' => 
      array (
        'enabled' => true,
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
      ),
    ),
  ),
  'installer' => 
  array (
    'requirements' => 
    array (
      0 => 'openssl',
      1 => 'pdo',
      2 => 'mbstring',
      3 => 'tokenizer',
    ),
    'permissions' => 
    array (
      'storage/app/' => '775',
      'storage/framework/' => '775',
      'storage/logs/' => '775',
    ),
  ),
  'mail' => 
  array (
    'driver' => '',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => 
    array (
      'address' => 'admin@socialite.com',
      'name' => 'Socialite',
    ),
    'encryption' => 'tls',
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
  ),
  'messenger' => 
  array (
    'user_model' => 'App\\User',
    'message_model' => 'Cmgmyr\\Messenger\\Models\\Message',
    'participant_model' => 'Cmgmyr\\Messenger\\Models\\Participant',
    'thread_model' => 'Cmgmyr\\Messenger\\Models\\Thread',
    'messages_table' => NULL,
    'participants_table' => NULL,
    'threads_table' => NULL,
  ),
  'pusher' => 
  array (
    'default' => 'main',
    'connections' => 
    array (
      'main' => 
      array (
        'auth_key' => '0167101f7c5cc2436045',
        'secret' => 'd8c3a4bef698ac41d6d1',
        'app_id' => '304787',
        'options' => 
        array (
        ),
        'host' => NULL,
        'port' => NULL,
        'timeout' => NULL,
      ),
      'alternative' => 
      array (
        'auth_key' => 'your-auth-key',
        'secret' => 'your-secret',
        'app_id' => 'your-app-id',
        'options' => 
        array (
        ),
        'host' => NULL,
        'port' => NULL,
        'timeout' => NULL,
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'expire' => 60,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'repository' => 
  array (
    'pagination' => 
    array (
      'limit' => 15,
    ),
    'fractal' => 
    array (
      'params' => 
      array (
        'include' => 'include',
      ),
      'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
    ),
    'cache' => 
    array (
      'enabled' => true,
      'minutes' => 30,
      'repository' => 'cache',
      'clean' => 
      array (
        'enabled' => true,
        'on' => 
        array (
          'create' => true,
          'update' => true,
          'delete' => true,
        ),
      ),
      'params' => 
      array (
        'skipCache' => 'skipCache',
      ),
      'allowed' => 
      array (
        'only' => NULL,
        'except' => NULL,
      ),
    ),
    'criteria' => 
    array (
      'acceptedConditions' => 
      array (
        0 => '=',
        1 => 'like',
      ),
      'params' => 
      array (
        'search' => 'search',
        'searchFields' => 'searchFields',
        'filter' => 'filter',
        'orderBy' => 'orderBy',
        'sortedBy' => 'sortedBy',
        'with' => 'with',
      ),
    ),
    'generator' => 
    array (
      'basePath' => '/Library/WebServer/Documents/streetskope/app',
      'rootNamespace' => 'App\\',
      'paths' => 
      array (
        'models' => 'Entities',
        'repositories' => 'Repositories',
        'interfaces' => 'Repositories',
        'transformers' => 'Transformers',
        'presenters' => 'Presenters',
        'validators' => 'Validators',
        'controllers' => 'Http/Controllers',
        'provider' => 'RepositoryServiceProvider',
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => '',
      'secret' => '',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://streetskope.local//account/facebook',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://streetskope.local//account/google',
    ),
    'twitter' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://streetskope.local//account/twitter',
    ),
    'linkedin' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://streetskope.local//account/linkedin',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Library/WebServer/Documents/streetskope/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
  ),
  'sluggable' => 
  array (
    'source' => NULL,
    'maxLength' => NULL,
    'method' => NULL,
    'separator' => '-',
    'unique' => true,
    'uniqueSuffix' => NULL,
    'includeTrashed' => false,
    'reserved' => NULL,
    'onUpdate' => false,
  ),
  'theme' => 
  array (
    'assetUrl' => '',
    'themeDefault' => 'default',
    'layoutDefault' => 'default',
    'themeDir' => 'themes',
    'containerDir' => 
    array (
      'layout' => 'layouts',
      'asset' => 'assets',
      'partial' => 'partials',
      'widget' => 'widgets',
      'view' => 'views',
    ),
    'namespaces' => 
    array (
      'widget' => 'App\\Widgets',
    ),
    'events' => 
    array (
      'before' => 'C:32:"SuperClosure\\SerializableClosure":219:{a:5:{s:4:"code";s:70:"function ($theme) {
    //$theme->setTitle(\'Something in global.\');
};";s:7:"context";a:0:{}s:7:"binding";N;s:5:"scope";s:49:"Illuminate\\Foundation\\Bootstrap\\LoadConfiguration";s:8:"isStatic";b:0;}}',
      'asset' => 'C:32:"SuperClosure\\SerializableClosure":597:{a:5:{s:4:"code";s:447:"function ($asset) {
    // Preparing asset you need to serve after.
    $asset->cook(\'backbone\', function ($asset) {
        $asset->add(\'backbone\', \'//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js\');
        $asset->add(\'underscorejs\', \'//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js\');
    });
    // To use cook \'backbone\' you can fire with \'serve\' method.
    // Theme::asset()->serve(\'backbone\');
};";s:7:"context";a:0:{}s:7:"binding";N;s:5:"scope";s:49:"Illuminate\\Foundation\\Bootstrap\\LoadConfiguration";s:8:"isStatic";b:0;}}',
    ),
    'engines' => 
    array (
      'twig' => 
      array (
        'allows' => 
        array (
          0 => 'Auth',
          1 => 'Cache',
          2 => 'Config',
          3 => 'Cookie',
          4 => 'Form',
          5 => 'HTML',
          6 => 'Input',
          7 => 'Lang',
          8 => 'Paginator',
          9 => 'Str',
          10 => 'Theme',
          11 => 'URL',
          12 => 'Validator',
        ),
        'hooks' => 'C:32:"SuperClosure\\SerializableClosure":524:{a:5:{s:4:"code";s:374:"function ($twig) {
    // Example add funciton name "demo".
    /*$function = new Twig_SimpleFunction(\'example\', function()
                    {
                        $args = func_get_args();
    
                        return "Example" . print_r($args, true);
                    });
    
                    $twig->addFunction($function);*/
    return $twig;
};";s:7:"context";a:0:{}s:7:"binding";N;s:5:"scope";s:49:"Illuminate\\Foundation\\Bootstrap\\LoadConfiguration";s:8:"isStatic";b:0;}}',
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Library/WebServer/Documents/streetskope/resources/views',
    ),
    'compiled' => '/Library/WebServer/Documents/streetskope/storage/framework/views',
  ),
  'youtube' => 
  array (
    'KEY' => 'AIzaSyB4xSPAHW4XU6QgcKhuRq2y522B15FHdpc',
  ),
);
