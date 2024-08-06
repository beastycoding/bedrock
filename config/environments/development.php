<?php

/**
 * Configuration overrides for WP_ENV === 'development'.
 */

use Roots\WPConfig\Config;

use function Env\env;

// Enable the saving of queries for debugging purposes
Config::define('SAVEQUERIES', true);

// Enable WordPress debugging mode
Config::define('WP_DEBUG', true);

// Display errors directly on the screen
Config::define('WP_DEBUG_DISPLAY', true);

// Log debug messages to a file; default to true if WP_DEBUG_LOG is not set in the environment
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);

// Disable the fatal error handler to allow custom error handling
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

// Enable the use of non-minified versions of scripts and stylesheets for debugging
Config::define('SCRIPT_DEBUG', true);

// Prevent search engines from indexing the site
Config::define('DISALLOW_INDEXING', true);

// Allow updates and installations of plugins and themes from the WordPress admin dashboard
Config::define('DISALLOW_FILE_MODS', false);

// Disable the trash feature, which keeps deleted items for a period of time
Config::define('EMPTY_TRASH_DAYS', false);

// Disable post revisions to reduce database bloat
Config::define('WP_POST_REVISIONS', false);

// Turn off the WordPress cron system, which runs scheduled tasks
Config::define('DISABLE_WP_CRON', true);

// Increase the autosave interval to every 120 seconds
Config::define('AUTOSAVE_INTERVAL', 120);

// Display errors on screen
ini_set('display_errors', '1');
