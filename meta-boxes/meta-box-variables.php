<?php

/*
 * Populates the variables of metabox
 */

global $post;
$des = get_post_meta($post->ID, '_snippet_description', true);
$img = get_post_meta($post->ID, '_snippet_image', true);
$max =  get_post_meta($post->ID, '_snippet_best', true);
$rating = get_post_meta($post->ID, '_snippet_rating', true);
$name = get_post_meta($post->ID, '_snippet_name', true);
$rnum = get_post_meta($post->ID, '_snippet_review_number', true);
$en = get_post_meta($post->ID, '_snippet_enable', true);
$type = get_post_meta($post->ID, '_snippet_type', true);

$add_en = get_post_meta($post->ID, '_snippet_add_en', true);
$add_street = get_post_meta($post->ID, '_snippet_add_street', true);
$add_local = get_post_meta($post->ID, '_snippet_add_local', true);
$add_region = get_post_meta($post->ID, '_snippet_add_region', true);
$add_postcode = get_post_meta($post->ID, '_snippet_add_postcode', true);

