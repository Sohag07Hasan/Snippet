<strong> Enable/Disable : </strong>
Choose any options (Default Disabled) : 
<select name="snippet_enable">
	<option <?php selected('0', $en); ?> value="0"> disabled </option>
	<option <?php selected('1', $en); ?> value="1"> enabled </option>
</select>
<hr/>
<br/>

<strong> Select the snippet type : </strong> <span style="color:#BD2626">(current version supports only one)</span> 
<select name="snippet_type">
	<option <?php selected('AggregateRating', $type); ?> value="AggregateRating">Aggregate Review</option>					
</select>

<br /><br/>

<strong> Name : </strong>
<span style="font-style:italic">Provide a smart Name for the product/post/page </span>
<input name="snippet_name"  type='text' value="<?php echo trim($name); ?>" />	
			
<br /><br/>

<strong> Description : </strong>
<span style="font-style:italic">Provide a little description of the product/post/page (to be shown in the search engine)</span><br/>
<textarea name="snippet_description" rows="3" cols="73"><?php echo $des; ?></textarea>			

<br/><br/>

<strong> Image : </strong>
<span style="font-style:italic">Provide a valid url of the image of the product/post/ page (optional)</span>
<input  name="snippet_image"  type="text" value="<?php echo trim($img); ?>" />
		
<br/><br/>

<strong>Star Options : </strong><br/>
<strong>Best Rating/Star Number : </strong>
<span style='font-style: italic; color:#BD2626'> (If skipped, 5 will be used) </span>
<input type="text" name="snippet_best" value="<?php echo trim($max); ?>" />
<br/>
<strong> Current Rating Value : </strong> <span style='font-style: italic; color:#BD2626'> (If skipped, 4.5 will be used) </span>
<input type="text" name="snippet_rating" value="<?php echo trim($rating); ?>" />
<br/>

<strong> Current Review Number : </strong> <span style='font-style: italic; color:#BD2626'> (how many user reviews you want to show) </span>
<input type="text" name="snippet_review_number" value="<?php echo trim($rnum);  ?>" />