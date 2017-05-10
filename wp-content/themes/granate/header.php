<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php echo wp_get_document_title(); ?></title>
	<link href="<?= THEME_URL ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div id="check" class="zoom-anim-dialog mfp-hide">
		<div class="top">
			<h3>Спасибо за заявку!</h3>	
		</div>
		<div class="bottom">
			<span>
				Мы свяжемся свами в ближайшее время
			</span>
		</div>
	</div>
	<div id="call-back" class="header-callback zoom-anim-dialog mfp-hide">
		<h2>Записаться на консультацию</h2>
		<form action="#">
			<label for="name">Ваше имя</label>
			<input type="text" id="name" name="name">
			<label for="number">Номер телефона</label>
			<input type="tel" id="number" name="number">
			<a href="#check" class="btn green popup-with-zoom-anim">
				Отправить
			</a>
		</form>
	</div>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="left col-lg-6">
							<a href="<?= SITE_URL ?>" class="logo">
								<img src="<?= THEME_URL ?>/images/logo.png" alt="logo" />
							</a>
							<?php if ( option_field( "tagline" ) ): ?>
								<span class="desc"><?= option_field( "tagline" ) ?></span>
							<?php endif; ?>
							<div class="address">
								<span>
									г. Киев, ул. Митрополита Шептицкого 4, (метро Левобережная)
								</span>
							</div>
						</div>
						<div class="stock stock-more">
							<img src="<?= THEME_URL ?>/images/logo_Granate.png">
							<p>Больше информации о нас и наших услугах Вы найдете на нашем сайте <a href="http://implant-kiev.com.ua/">implant-kiev.com.ua</a></p>
						</div>
						<div class="right">
							<div class="wrap">
								<div class="left-phone-bl">
									<?php if (option_field( "phones" )): ?>
										<a href="tel:+38<?= option_field( "phones" )[0]['phone'] ?>"><?= site_format_phone( option_field( "phones" )[0]['phone'] ) ?></a><br>
									<?php endif; ?>
									<?php if (option_field( "worktime" )): ?>
										<div class="work-time"><?= site_without_p(option_field( "worktime" )) ?></div>
									<?php endif; ?>
								</div>
								<?php if (option_field( "phones" )): $i = 0; ?>
									<ul class="right-phone-bl">
										<?php while (have_rows('phones', 'option')) : the_row(); ?>
											<?php if ($i > 0): ?>
												<li><a href="tel:+38<?= get_sub_field( "phone" ) ?>" class="dr_down"><?= site_format_phone( get_sub_field( "phone" ) ) ?></a></li>
											<?php endif; ?>
										<?php $i++; endwhile; ?>
									</ul>
								<?php endif; ?>
								<div class="clr"></div>
							</div>
							<a href="#call-back" class="btn small-btn green popup-with-zoom-anim">
								Записаться на консультацию
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="navigation">
		<div class="container">
			<ul class="navigation__items items">
				<?php site_menu([
					'id' => 2,
					'li_class' => 'items__item item',
					'a_class' => 'item__link'
				]); ?>
			</ul><!-- .navigation-items items -->
		</div><!-- .container -->
	</nav><!-- .navigation -->
