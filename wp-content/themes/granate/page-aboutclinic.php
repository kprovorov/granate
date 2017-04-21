<?php get_header(); ?>

<section class="about_clinic">
	<div class="block-ttl center">
		<?= get_field( "title" )?:get_the_title() ?>
	</div><!-- .block-ttl -->
	<div class="img-wrap__about" style="background: url(<?= get_field('main_img') ?>) center center no-repeat;">

	</div>
	<div class="container">
		<div class="text__wrap">
			<?= preg_replace('/(<p>)/', '<p class="about__text">', get_field( "content" )) ?>
		</div><!-- .text__wrap -->
		<div class="modern__stomatology">
			<div class="row">
				<?php if (get_field( "photo_wlist" )): ?>
					<div class="modern__left col-lg-6">
						<img src="<?= get_field( "photo_wlist" ) ?>" alt="" />
					</div><!-- .modern__left col-lg-6 -->
				<?php endif; ?>
				<?php if (have_rows('service_list')): ?>
					<div class="modern__right col-lg-6">
						<div class="ttl">
							В гранат клиник доступны все услуги современной стоматологии:
						</div><!-- .form-ttl -->
						<ul>
							<?php while (have_rows('service_list')) : the_row(); ?>
								<li><?= get_sub_field( "text" ) ?>;</li>
							<?php endwhile; ?>
						</ul>
					</div><!-- .modern-right col-lg-6 -->
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .modern__stomatology -->
	</div><!-- .container -->
</section><!-- .about_clinic -->
<?php if (have_rows('certificate_list')): ?>
	<section class="certificate">
		<div class="container-fluid">
			<div class="swiper-container-certificate">
				<div class="swiper-wrapper">
					<?php while (have_rows('certificate_list')) : the_row(); ?>
						<div class="swiper-slide">
							<img src="<?= get_image_field( get_sub_field('img'), "certificate" ) ?>" alt="" />
						</div>
					<?php endwhile; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div><!-- .container-fluid -->
	</section><!-- .certificate -->
<?php endif; ?>
<?php if (have_rows('doctors') && false): ?>
	<section class="our-specialists">
		<div class="container">
			<div class="block-ttl center">
				Наши специалисты
			</div><!-- .block-ttl -->
			<div class="row top-line">
				<?php while (have_rows('doctors')) : the_row(); ?>
					<figure class="specialist col-lg-3">
						<div class="img-wrap">
							<?php
							  $image = (get_sub_field( "photo" )) ? get_image_field( get_sub_field( "photo" ), "300-square" ) : DOCTOR_PLACEHOLDER;
							?>
							<img src="<?= $image ?>" alt="" />
						</div><!-- .img-wrap -->
						<div class="specialist__name">
							<?= preg_replace('/(.*?)\s(.*)/', '<span class="stong__name">\1</span>\2', get_sub_field( "name" )) ?>
						</div><!-- .specialist__name -->
						<?php if ( get_sub_field( "position" ) ): ?>
							<span class="position">
								<?= get_sub_field( "position" ) ?>
							</span>
						<?php endif; ?>
						<?php if (have_rows('worktime')): ?>
							<div class="admission-schedule">
								<h3 class="admission-schedule__name">
									График приема:
								</h3>
								<ul>
									<?php while (have_rows('worktime')) : the_row(); ?>
										<li>
											<?= get_sub_field( "day" ) ?> <?= (get_sub_field( "from" )) ? 'с '.get_sub_field( "from" ) : '' ?> <?= (get_sub_field( "to" )) ? 'до '.get_sub_field( "to" ) : '' ?>
										</li>
									<?php endwhile; ?>
								</ul>
							</div><!-- .admission-schedule -->
						<?php endif; ?>
					</figure>
				<?php endwhile; ?>

			</div><!-- .top-line -->
			<div class="row bottom-line hidden">
				<figure class="specialist col-lg-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-lg-3 -->
				<figure class="specialist col-lg-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-lg-3 -->
				<figure class="specialist col-lg-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-lg-3 -->
				<figure class="specialist col-lg-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-lg-3 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .our-specialists -->
<?php endif; ?>
<?php if (have_rows('specialists_list')): $i = 1; ?>
	<div class="our-specialists-photo">
		<div class="container">
			<div class="block-ttl">
				Наши специалисты
			</div><!-- .block-ttl -->
			<div class="row">
				<div class="photo-wrap col-lg-12">
					<img src="<?= get_field('specialists_photo') ?>" alt="" />
					<div class="cols-wrap">
						<?php while (have_rows('specialists_list')) : the_row(); ?>
							<div class="col-lg-<?= get_sub_field( "width" ) ?> col">
								<div class="face-radius-<?= $i ?> radius">
								</div>
								<div class="info-<?= $i ?> info">
									<div class="info-ttl">
										<?= get_sub_field( "name" ) ?>
									</div>
									<div class="more-info-wrap">
										<span><?= get_sub_field( "desc" ) ?></span>
										<div class="list-ttl">
											<?= get_sub_field( "list_title" ) ?>
										</div><!-- .list-ttl -->
										<?php if (have_rows('list')): ?>
											<ul>
												<?php while (have_rows('list')) : the_row(); ?>
													<li><?= get_sub_field( "text" ) ?></li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div><!-- .more-info -->
								</div><!-- .info -->
							</div><!-- .col-lg-2 col -->
						<?php $i++; endwhile; ?>
					</div><!-- .cols-wrap -->
				</div><!-- .photo-wrap col-lg-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .our-specialists -->
<?php endif; ?>
<section class="equipment">
	<div class="container">
		<?php if (have_rows('equipment_list')): ?>
			<div class="swiper-container-equipment">
				<div class="swiper-wrapper">
					<?php while (have_rows('equipment_list')) : the_row(); ?>
						<div class="swiper-slide">
							<a class="image-popup-no-margins" href="<?= get_sub_field('img')['url'] ?>">
								<img src="<?= get_image_field( get_sub_field( "img" ), "equipment-list" ) ?>" alt="" />
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		<?php endif; ?>
		<?php if (get_field( "text_title" ) && get_field( "text_text" )): ?>
			<div class="text-wrap">
				<div class="block-ttl">
					<?= get_field( "text_title" ) ?>
				</div><!-- .block-ttl -->
				<?= get_field( "text_text" ) ?>
			</div><!-- .text wrap -->
		<?php endif; ?>
	</div><!-- .container -->
</section><!-- .equipment -->
<?php if (have_rows('equipment')): ?>
	<section class="new-equipment">
		<div class="container">
			<div class="block-ttl">
				Новейшее оборудование
			</div><!-- .block-ttl -->
			<div class="row">
				<?php while (have_rows('equipment')) : the_row(); ?>
					<figure class="equipment-item col-lg-4">
						<div class="img-wrap">
							<img src="<?= get_image_field( get_sub_field( "img" ), "equipment" ) ?>" alt="" />
						</div><!-- .img-wrap -->
						<h3 class="equipment-item__ttl">
							<?= get_sub_field( "title" ) ?>
						</h3><!-- .equipment-item__ttl -->
						<span class="equipment-item__descr">
							<?= get_sub_field( "desc" ) ?>
						</span>
						<?php if (have_rows('list')): ?>
							<h4 class="equipment-item__advantages__ttl">
								<?= (get_sub_field( "title_list" ))?:'Преимущества пьезо-имплантации:' ?>
							</h4><!-- .equipment-item__advantages__ttl -->
							<ul class="advantages__list">
								<?php while (have_rows('list')) : the_row(); ?>
									<li class="list__item">
										<?= get_sub_field( "text" ) ?>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</figure><!-- .equipment-item col-lg-4 -->
				<?php endwhile; ?>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
<?php endif; ?>

<?php get_footer(); ?>