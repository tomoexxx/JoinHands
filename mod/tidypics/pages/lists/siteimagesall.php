<?php

/**
 * Most recently uploaded images - all images
 *
 */

/* Add Tani 2013.07.01 */
if (!elgg_is_logged_in()) {
	register_error(elgg_echo('loggedinrequired'));
	forward('');
}

// set up breadcrumbs
elgg_push_breadcrumb(elgg_echo('photos'), 'photos/siteimagesall');

$offset = (int)get_input('offset', 0);
$max = 20;

// grab the html to display the most recent images
$images = elgg_list_entities(array('type' => 'object',
                                   'subtype' => 'image',
                                   'owner_guid' => NULL,
                                   'limit' => $max,
                                   'offset' => $offset,
                                   'full_view' => false,
                                   'list_type' => 'gallery',
                                   'gallery_class' => 'tidypics-gallery'
                                  ));

$title = elgg_echo('tidypics:siteimagesall');

elgg_load_js('lightbox');
elgg_load_css('lightbox');
$owner_guid = elgg_get_logged_in_user_guid();
/* Delete Tani 2013.06.30 */
/*
elgg_register_menu_item('title', array('name' => 'addphotos',
                                       'href' => "ajax/view/photos/selectalbum/?owner_guid=$owner_guid",
                                       'text' => elgg_echo("photos:addphotos"),
                                       'class' => 'elgg-lightbox',
                                       'link_class' => 'elgg-button elgg-button-action'));
*/

if (!empty($images)) {
        $area2 = $images;
} else {
        $area2 = elgg_echo('tidypics:siteimagesall:nosuccess');
}
$body = elgg_view_layout('content', array(
        'filter_override' => elgg_view('filter_override/siteimages', array('selected' => 'all')),
        //'filter_context' => 'all',
        'content' => $area2,
        'title' => $title,
        'sidebar' => elgg_view('photos/sidebar', array('page' => 'all')),
));

// Draw it
echo elgg_view_page($title, $body);
