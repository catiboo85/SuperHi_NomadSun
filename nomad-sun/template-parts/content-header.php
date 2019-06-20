
		<!-- if it’s a header, go through the data -->

		<!-- here we have our header -->
<div class="flex-l">

		<!-- here we have our header image -->
			<div class="w-60-l w-100 vh-100-l vh-50 cover bg-center" style="<?php nice_background('hero_image'); ?>">
			</div>

		<!-- and our header content -->
			<div class="w-40-l w-100 flex items-center justify-center ph4-l relative ph3">
				<div class="tc">
					<p class="archivo f6 ttu mt0 mb4 tracked absolute-l top-0-l left-0-l w-100-l pt5 ">
					<?php nice_date(get_field('date'));?>
					</p>
					<span class="line mt5"></span>

					<h1 class="f1-l f2 archivo mt5 mb2 ttu lh-title">
						<?php the_title(); ?>
					</h1>

					<p class="f1-l f2 tenor mt0 mb4 mb5-l ttu lh-title">
					<?php the_field('subhead'); ?>
					</p>

					<p class="cardo f4 i measure mv0">
					<?php the_sub_field('header_intro'); ?>
					</p>
				</div>
			</div>
</div>