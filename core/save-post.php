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

update_post_meta($post_id, '_snippet_enable', $en);
update_post_meta($post_id, '_snippet_type', $type);
update_post_meta($post_id, '_snippet_image', $img);
update_post_meta($post_id, '_snippet_best', $max);
update_post_meta($post_id, '_snippet_rating', $rating);
update_post_meta($post_id, '_snippet_description', $des);
update_post_meta($post_id, '_snippet_name', $name);
update_post_meta($post_id, '_snippet_review_number', $review_number);
