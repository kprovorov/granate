<?php get_header(); ?>

<div class="galery-wrap">
	<div class="container">
		<div class="block-ttl">
			<?= get_the_title() ?>
		</div><!-- .block-ttl -->
		<?php if ($gallery = get_field( "photo_list" )): ?>
			<div class="grid">
				<?php foreach ($gallery as $photo): ?>
					<div class="grid-item">
						<a href="<?= $photo['url'] ?>">
							<img src="<?= get_image_field( $photo, "300-square" ) ?>">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- .galery-wrap -->

<?php get_footer(); ?>
