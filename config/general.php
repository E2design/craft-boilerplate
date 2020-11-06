<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    // ------------------------------------------------------------------------------------------
	// Global settings
    // ------------------------------------------------------------------------------------------
    '*' => [
        
        // Craft config settings from .env variables.
        'aliases'	=> [
            '@cfUrl'      => App::env('CF_URL'), // Cloudflare Url
            '@cfId'		  => App::env('CF_ID'), // Cloudflare ID
            '@cfPrefix'	  => App::env('CF_PATH_PREFIX'), // Cloudflare path prefix
            '@awsId'	  => App::env('S3_ID'), // S3 ID
            '@awsSecret'  => App::env('S3_SECRET'), // S3 secret
            '@web' 		  => App::env('SITE_URL'), // Redefine the dynamically generated @web alias to something that is from a static value for the URL
            '@assetsUrl'  => App::env('ASSETS_URL'), // Url to the assets dir.
        ],
        
        // Default: Week Start Day (0 = Sunday, 1 = Monday...)
        'default:WeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'razzle',

        // Secure key Craft will use for hashing and encrypting data
        'securityKey' => App::env('SECURITY_KEY'),

        // Error prefix that should be prepended to HTTP error status codes when determining the path to look for an error’s template. 
        // If set to '_' your site’s 404 template would live at templates/_404.html, for example.
        'errorTemplatePrefix' => '_errors/',

        // Removing-x-powered-by and changing cookies names for security
        // The name of the PHP session cookie
        'phpSessionName' => 'E2designSession',
        // Whether an X-Powered-By: Craft CMS header should be sent, helping services like BuiltWith
        'sendPoweredByHeader' => false,

        // The maximum upload file size allowed.
        'maxUploadFileSize' => '50M', // default: 16777216 Bytes = 16 MB
        
        // Images quality and cache
        // The quality level Craft will use when saving JPG and PNG files.
        'default:ImageQuality' => 90, // default: 82
        // The maximum dimension size to use when caching images from external sources to use in transforms. Set to 0 to never cache them.
        'maxCachedCloudImageSize' => 3000, // default: 2000
        // Whether image transforms should be generated before page load.
        'generateTransformsBeforePageLoad' => true, // default: false 

        // Whether Craft should set users’ usernames to their email addresses, rather than let them set their username separately.
        'useEmailAsUsername' => false, // default: false

        // The number of backups Craft should make before it starts deleting the oldest backups. If set to false, Craft will not delete any backups.
        'maxBackups' => 2,

    ],

    // Dev environment settings
    'dev' => [
        // Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
        'devMode' => true,

        // A variable used in the skeleton layout template to use the HTTP headers
        'addExpiryHeaders'	=> false,

        // Whether the site is currently live. If set to true or false, it will take precedence over the System Status setting in Settings → General.
        'isSystemLive' => false,

        // Whether front end requests should respond with X-Robots-Tag: none HTTP headers, indicating that pages should not be indexed, and links on the page should not be followed, by web crawlers.
        'disallowRobots' => true,

        // Whether to enable Craft’s template {% cache %} tag on a global basis.
        'enableTemplateCaching' => false,

    ],

    // Staging environment settings
    'staging' => [
        // Set this to `false` to prevent administrative changes from being made on staging
        'allowAdminChanges' => false,
 
         // A variable used in the skeleton layout template to use the HTTP headers
         'addExpiryHeaders'	=> false,
 
         // Whether the site is currently live. If set to true or false, it will take precedence over the System Status setting in Settings → General.
         'isSystemLive' => false,

        // Whether front end requests should respond with X-Robots-Tag: none HTTP headers, indicating that pages should not be indexed, and links on the page should not be followed, by web crawlers.
        'disallowRobots' => true,

    ],

    // Production environment settings
    'production' => [
        // Set this to `false` to prevent administrative changes from being made on production
        'allowAdminChanges' => false,

        // A variable used in the skeleton layout template to use the HTTP headers
        'addExpiryHeaders'	=> true,

        // Whether the site is currently live. If set to true or false, it will take precedence over the System Status setting in Settings → General.
        'isSystemLive' => true,
    ],
];
