<?php

/**
 * Action
 */
$action_file = get_template_directory() . '/functions/action.php';
if (file_exists($action_file)) {
    require_once $action_file;
}

/**
 * Filter
 */
$filter_file = get_template_directory() . '/functions/filter.php';
if (file_exists($filter_file)) {
    require_once $filter_file;
}

/**
 * Short code
 */
$shortcode_file = get_template_directory() . '/functions/shortcode.php';
if (file_exists($shortcode_file)) {
    require_once $shortcode_file;
}

/**
 * Utility
 */
$utility_file = get_template_directory() . '/functions/utility.php';
if (file_exists($utility_file)) {
    require_once $utility_file;
}
