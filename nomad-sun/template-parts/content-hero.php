<!-- here we used an inline style attirubte to attach our hero image as a css element -->
<!-- here we have the hero have a min height of 100vh, cover the background
center it, add flexbok and make the content center vertically and horizontally -->
<!-- <h1>
	<a href="<?php the_permalink(); ?>"> 
	Check out <?php the_title(); ?>
	</a>
</h1> -->
<a href="<?php the_permalink();?>" class="db link hero min-vh-100 cover bg-center flex items-center justify-center" 
style="<?php nice_background('hero_image'); ?>">

	<!-- make the text white and center it  -->
	<div class="hero-content white tc">
		<!-- Make it bold have zero margin and uppercase -->
		<!-- Our location title -->
		<h1 class="hero-heading f2 archivo b mt0 mb3 ttu 1h-title">
		<?php the_title();?></h1>

		<!-- here we do a similar thing but with a big margin on the bottom -->
		<!-- Our subheading -->
		<?php if( get_field('subhead') ): ?>
		<p class="hero-subhead f2 tenor mb5 mb6-l mt0 ttu 1h-title">
		<?php the_field('subhead'); ?></p>
		<?php endif; ?>

		<!-- Make the font size small, uppercase, track the date and margin zero -->
		<!-- Our formatted date -->
		<?php if( get_field('date') ):?>
		<p class="archivo f6 b ttu ma0 tracked">

	<!-- Prints the date in ways that we want -->
        <?php nice_date(get_field('date'));?>
        </p>
		<?php endif; ?>	

	</div>
</a>