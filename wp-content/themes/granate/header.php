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
	<!-- <header>
		<div class="container">
			<div class="row">
				<div class="header__left left col-lg-6">
					<div class="left__logo logo">
						<a href="<? SITE_URL ?>" class="logo__link link">
							<img src="<?= THEME_URL ?>/images/logo.png" alt="" class="link__img img" />
						</a>
						<?php if (option_field( "tagline" )): ?>
							<span class="logo__span">
								<?= option_field( "tagline" ) ?>
							</span>
						<?php endif; ?>

					</div>
				</div>
				<div class="header__right right col-lg-6">
					<div class="row">
						<div class="right__addr col-lg-4">
							<div class="addr-wrap wrap">
								<?php if (option_field( "address" )): ?>
									<span class="wrap-span addr">
										<?= option_field( "address" ) ?>
									</span>
								<?php endif; ?>
								<?php if (option_field( "worktime" )): ?>
									<span class="wrap-span">
										<?= option_field( "worktime" ) ?>
									</span>
								<?php endif; ?>
							</div>
						</div>
						<?php if (option_field( "phones" )): ?>
							<div class="right__questions col-lg-4">
								<a href="tel:<?= site_format_phone( option_field( "phones" )[0]['phone'] ) ?>" class="number">
									<?= site_format_phone( option_field( "phones" )[0]['phone'] ) ?>
								</a>
								<span class="descr">
									(многоканальный)
								</span>
								<a href="#" class="header-questions">
									Задать вопрос онлайн
								</a>
							</div>
						<?php endif; ?>
						<?php if (count(option_field( "phones" )) > 1): $i = 0; ?>
							<div class="right__call-back col-lg-4">
								<?php while (have_rows('phones', 'option')) : the_row(); ?>
									<?php if (!$i) {$i++; continue;}; ?>
									<a href="<?= site_format_phone( get_sub_field( "phone" ) ) ?>" class="number<?= ($i == 1) ? ' first' : '' ?>">
										<?= site_format_phone( get_sub_field( "phone" ) ) ?>
									</a>
								<?php $i++; endwhile; ?>
								<a href="#" class="header-questions">
									Задать вопрос онлайн
								</a>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</header> -->
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">
						<a href="#" class="logo">
							<img src="<?= THEME_URL ?>/images/logo.png" alt="logo" />
						</a>
						<span class="desc">32 причины <br>улыбаться :)</span>
						<div class="right">
							<div class="wrap">
								<div class="left-phone-bl">
									<a href="tel:+380443636003">044-36-36-003</a><br>
									<div class="work-time">Пн-Сб: с 9.00 до 20.00<br>Вс: с 9.00 до 17.00</div>
								</div>
								<ul class="right-phone-bl">
									<li><a href="tel:+380935103510" class="dr_down">093-510-3-510</a></li>
									<li><a href="tel:+380955582929" class="hiden">095-558-29-29</a></li>
									<li><a href="tel:+380965682929" class="hiden">096-568-29-29</a></li>
								</ul>
								<div class="clr"></div>
							</div>
							<a href="#" class="btn small-btn green">
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
