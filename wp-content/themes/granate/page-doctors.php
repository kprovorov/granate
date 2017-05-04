<?php get_header(); ?>
<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
	<h2>Фамилия Имя Отчество</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="photo">
				<img src="<?= THEME_URL ?>/images/doctor1.jpg" alt="doctor1" />
			</div>
			<div class="text">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum nobis eos molestiae sint quos laudantium voluptatibus similique saepe ipsam laborum, sequi itaque reprehenderit delectus! Obcaecati esse labore ipsam minima, laudantium voluptatibus, beatae perferendis accusantium, dolorum molestias quas quidem voluptatem nesciunt quam vel aperiam. Culpa nemo tempora maxime minus eius cum officiis, consectetur provident voluptatem nam nesciunt doloribus aliquam necessitatibus nobis architecto ad optio dolore consequuntur non? Fugit repudiandae molestiae dolore consequatur, minima consequuntur unde dolorum nemo debitis sapiente vero quos dolor. Sapiente nostrum, deleniti earum aliquam tempora quibusdam illo doloribus maiores expedita. Corporis animi qui recusandae voluptatibus maiores ullam natus eius. Expedita ullam illum voluptatum laboriosam amet placeat, quae, doloremque dignissimos odit velit dicta nobis facere id inventore perspiciatis mollitia.
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil accusamus a, sunt similique maiores cum ducimus, rerum quia blanditiis odio!</p>
				<div class="certificate-wrap">
					<div class="row">
						<div class="col-lg-4">
							<img src="<?= THEME_URL ?>/images/doctor1.jpg" alt="doctor1" />	
						</div>

						<div class="col-lg-4">
							<img src="<?= THEME_URL ?>/images/doctor1.jpg" alt="doctor1" />	
						</div>

						<div class="col-lg-4">
							<img src="<?= THEME_URL ?>/images/doctor1.jpg" alt="doctor1" />
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="doctors__wrap">
	<div class="container">
		<div class="block-ttl">
			<?= (get_field( "doctors" )) ? ((get_field( "title" ))?:get_the_title()) : 'Специалисты отсутствуют' ?>
		</div><!-- .block-ttl -->
		<div class="row">
			<?php while (have_rows('doctors')) : the_row(); ?>
				<div class="col-lg-4 doctor__wrap js-auto-height">
					<a class="popup-with-zoom-anim" href="#small-dialog">
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
					</a>
				</div>
			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .doctors__wrap -->

<?php get_footer(); ?>
