<?php
/*
 * Class will add micro data to the post/page and add a nice interface to add code from the post editing page
 */

class GR_microdata{
	
	const star = 'gr_star_no';
	const review = 'gr_review_no';
	const rating = 'gr_rating';
	const show = 'gr_showed';
	

	/*
	 * initialize each hooks
	 */
	static function init(){
		add_action( 'add_meta_boxes', array(get_class(), 'add_meta_boxes'));
		add_action('save_post', array(get_class(), 'save_post'), 10, 2);
		add_filter('the_content', array(get_class(), 'the_content'), 100,2);
	}
	
	/*
	 * add meta boxes
	 */
	static function add_meta_boxes(){
		$post_types = get_post_types(array(),  'names');		
		foreach ($post_types as $post_type) :
			add_meta_box('GR-code-snippet-metabox', __('Google Review Setting'), array(get_class(), 'meta_box'), $post_type, 'advanced', 'high');
		endforeach;
	}
	
	/*
	 * meta box content
	 */
	static function meta_box(){
		include GoogleReviewSnippetDir . '/meta-boxes/meta-box-variables.php';
		include GoogleReviewSnippetDir . '/meta-boxes/snippet-fields.php';
	}
	 
	/*
	 * this will save the snippet data as metakey
	 */
	function save_post($post_id, $post){
		if(in_array( $post->post_status, array( 'pending', 'auto-draft'))) return;
		include GoogleReviewSnippetDir . '/core/save-post.php';		
	}
	
	static function the_content($content){
		global $post;		
		return $content . self::microdata($post->ID);
	}
	
	
	/*
	 * creates the micro formatted data with html markup form schema
	 * */
	function microdata($post_id){
		$microdata = '';
		
		//if the microdata is enalbed
		if(get_post_meta($post_id, '_snippet_enable', true) == '1') :
		
			$microdata .= '<div style="display:none" itemscope itemtype="http://schema.org/LocalBusiness">
				<span itemprop="name"> ' . get_the_title() . ' </span>

				<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
					<span itemprop="bestRating">'. get_post_meta($post_id, '_snippet_best', true) .'</span>
						<span itemprop="ratingValue"> ' . get_post_meta($post_id, '_snippet_rating', true) . ' </span> stars -
						based on <span itemprop="reviewCount"> ' . get_post_meta($post_id, '_snippet_review_number', true) . ' </span> reviews
				</div>';


			//checking if the address field is set
				if(get_post_meta($post_id, '_snippet_add_en', true) == '1') :			  

					$microdata .= ' <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress"> ' . get_post_meta($post_id, '_snippet_add_street', true) . ' </span>
							<span itemprop="addressLocality"> ' . get_post_meta($post_id, '_snippet_add_local', true) . '</span>,
							<span itemprop="addressRegion"> ' .  get_post_meta($post_id, '_snippet_add_region', true) . ' </span> <span itemprop="postalCode">94086</span>
					</div>';
				endif;

				// $microdata .= '<span itemprop="telephone">(408) 714-1489</span>

				$microdata .= '	</div>';
			
		endif;
		
		return $microdata;
	}
}
