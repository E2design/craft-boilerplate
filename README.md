# Craft boilerplate default installation

This is the E2design craft-boilerplate repo. A starting point for all our Craft 3 CMS app projects.

The project is based on Craft CMS using a templates system for webpages, and implements a number of technologies/techniques:

- It runs of a [NITRO] (https://craftcms.com/docs/nitro/) instance
- Our base Twig templating setup
- [UIkit] (https://getuikit.com/docs/introduction) CSS framework
- [Fontawesome Pro] (https://fontawesome.com) icon library + toolkit
- [CodeKit] (https://codekitapp.com) easy builder tool
- Static assets are stored in AWS S3 buckets with CloudFront as the CDN
- [Redis] (https://craftcms.com/docs/3.x/config/#application-configuration) caching preconfigured
- Implements a Service Worker via Google's [Workbox] (https://developers.google.com/web/tools/workbox/) as per [Service Workers and Offline Browsing] (https://nystudio107.com/blog/service-workers-and-offline-browsing)
- Frontend error handling using special twig templates in _errors template directory

The following Craft CMS plugins are used in this repo:

- [Minify] (https://nystudio107.com/docs/minify) - Minifies the HTML and inline JS/CSS.
- [Typogrify] (https://github.com/nystudio107/craft-typogrify/blob/v1/README.md) - Prettifies your web typography by preventing ugly quotes and 'widows' and more.
- [Typed Link field] (https://github.com/sebastian-lenz/craft-linkfield) - A link field type to your Craft CMS.
- [HTTP2 server push] (https://github.com/sjelfull/craft3-http2serverpush/blob/master/README.md) - Automatically add HTTP2 Link headers for CSS, JS and image assets.
- [Super-table] (https://github.com/verbb/super-table) - Use it to group fields together or build complex Matrix-in-Matrix solutions.
- [CP clearcache] (https://github.com/mmikkel/CpClearCache-Craft/blob/master/README.md) - Less clicking to clear the caches.
- [Redactor] (https://github.com/craftcms/redactor/blob/v2/README.md) - Edit rich text content in Craft CMS.
- [Amazone s3] (https://github.com/craftcms/aws-s3/blob/master/README.md) - Amazon S3 integration for Craft CMS.
- [Sprout fields] (https://sprout.barrelstrengthdesign.com/docs/fields/) - Several common international field types to Craft CMS.
- [Sprout encode email] (https://sprout.barrelstrengthdesign.com/docs/encode-email/ - multiple email obfuscation filters available in your templates.
- [Control Panal nav] (https://plugins.craftcms.com/cp-nav?utm_campaign=Craft%2BLink%2BList&utm_medium=email&utm_source=Craft_Link_List_124) - change the layout of the control panel nav
- [NEO] (https://github.com/spicywebau/craft-neo/wiki) - matrix on steroids