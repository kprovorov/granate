<?php get_header(); ?>

<div class="doctors__wrap">
	<div class="container">
		<div class="block-ttl">
			<?= (get_field( "doctors" )) ? ((get_field( "title" ))?:get_the_title()) : 'Специалисты отсутствуют' ?>
		</div><!-- .block-ttl -->
		<div class="row">
			<?php while (have_rows('doctors')) : the_row(); ?>
				<div class="col-lg-4 doctor__wrap">
					<figure>
						<?php
						  $image = (get_sub_field( "photo" )) ? get_image_field( get_sub_field( "photo" ), "doctor" ) : DOCTOR_PLACEHOLDER;
						?>
						<img src="<?= $image  ?>" alt="" />
						<div class="info">
							<div class="doctor__name">
								<?= preg_replace('/(.*?)\s(.*)/', '<span>\1</span>\2', get_sub_field( "name" )) ?>
							</div><!-- .doctor__name -->
							<?php if (get_sub_field( "desc" )): ?>
								<span class="info__descr">
									<?= get_sub_field( "desc" ) ?>
								</span>
							<?php endif; ?>
						</div>
					</figure>
				</div>
			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .doctors__wrap -->

<?php get_footer(); ?>
