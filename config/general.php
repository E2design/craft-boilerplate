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
        'maxUploadFileSize' => 41943040, // 41943040 = 40 MB, default: 16777216 = 16 MB
        
        // Images quality and cache
        // The quality level Craft will use when saving JPG and PNG files.
        'default:ImageQuality' => 90, // default: 82
        // The maximum dimension size to use when caching images from external sources to use in transforms. Set to 0 to never cache them.
        'maxCachedCloudImageSize' => 3000, // default: 2000
        // Whether image transforms should be generated before page load.
        'generateTransformsBeforePageLoad' => true, // default: false 

        // Whether Craft should set users’ usernames to their email addresses, rather than let them set their username separately.
        'useEmailAsUsername' => false, // default: false

        // Any custom Yii aliases that should be defined for every request.
        'aliases'	=> [
            '@cfUrl'      => getenv('CF_URL'), // Cloudflare Url
            '@cfId'		  => getenv('CF_ID'), // Cloudflare ID
            '@cfPrefix'	  => getenv('CF_PATH_PREFIX'), // Cloudflare path prefix
            '@awsId'	  => getenv('S3_ID'), // S3 ID
            '@awsSecret'  => getenv('S3_SECRET'), // S3 secret
            '@web' 		  => getenv('ROOT_URL'), // Redefine the dynamically generated @web alias to something that is from a static value for the URL
        ],

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
        'allowAdminChanges' => true,
 
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
        'allowAdminChanges' => true,

        // A variable used in the skeleton layout template to use the HTTP headers
        'addExpiryHeaders'	=> true,

        // Whether the site is currently live. If set to true or false, it will take precedence over the System Status setting in Settings → General.
        'isSystemLive' => true,
    ],
];
