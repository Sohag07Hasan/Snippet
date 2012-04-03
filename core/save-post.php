<?php
/*
 * this saves the post meta to create the review
 */

$en = $_REQUEST['snippet_enable'];
$type = $_REQUEST['snippet_type'];
$des = $_REQUEST['snippet_description'];
$img = trim($_REQUEST['snippet_image']);
$max = preg_replace('/[^0-9]/', '', $_REQUEST['snippet_best']);
$rating = preg_replace('/[^0-9.]/', '', $_REQUEST['snippet_rating']);
$review_number = preg_replace('/[^0-9]/', '', $_REQUEST['snippet_review_number']);
$name = trim($_REQUEST['snippet_name']);

//address data
$add_en = $_REQUEST['snippet-address-enabled'];
$add_street = $_REQUEST['snippet-street-address'];
$add_local = $_REQUEST['snippet-locality-address'];
$add_region = $_REQUEST['snippet-region-address'];
$add_postcode = $_REQUEST['snippet-postcode'];



//senitizing some values
$name = (strlen($name) > 2) ? $name : $post->post_title;
$review_number = ($review_number == '') ? 20 : $review_number;
$max = ($max == '') ? 5 : $max;
$rating = ($rating == '') ? 4.5 : $rating;



//updating database
update_post_meta($post_id, '_snippet_enable', $en);
update_post_meta($post_id, '_snippet_type', $type);
update_post_meta($post_id, '_snippet_image', $img);
update_post_meta($post_id, '_snippet_best', $max);
update_post_meta($post_id, '_snippet_rating', $rating);
update_post_meta($post_id, '_snippet_description', $des);
update_post_meta($post_id, '_snippet_name', $name);
update_post_meta($post_id, '_snippet_review_number', $review_number);

update_post_meta($post_id, '_snippet_add_en', $add_en);
update_post_meta($post_id, '_snippet_add_street', $add_street);
update_post_meta($post_id, '_snippet_add_local', $add_local);
update_post_meta($post_id, '_snippet_add_region', $add_region);
update_post_meta($post_id, '_snippet_add_postcode', $add_postcode);
