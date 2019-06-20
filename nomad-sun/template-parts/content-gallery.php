<!-- This tag wraps around our gallery -->
<div class="container flex flex-wrap center ph4-1">
					<?php $images = get_sub_field ('gallery'); ?>
					<?php foreach($images as $image):?>
					<!-- here we have added a custom field to our attachements (images) 
					 which adds a class name to control the width of the images -->
						<div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']); ?>">
								<?php echo wp_get_attachment_image($image['id'], 'full' );?>
								<!-- here we assign our caption to a variable called caption 
								if the caption is not empty we render it onto the page -->
								<?php $caption = wp_get_attachment_caption($image['id']); ?>
								<!-- ! does the opposite = !empty (not empty) -->
								<?php if(!empty($caption)): ?>
								<p class="caption f5 pt3 o-50 mv0 archivo-regular">
								<?php echo $caption; ?>
								</p>
							<?php endif?>
						</div>
				<?php endforeach;?>
				</div>