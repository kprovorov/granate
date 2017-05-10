<?php get_header(); ?>

<div class="prices">
	<div class="container">
		<div class="row">
			<div class="block-ttl">
				<?= (get_field( "title" ))?:get_the_title() ?>
			</div><!-- .block-ttl -->
			<div class="row">
				<div class="left col-lg-6">
					<?= get_field( "desc" ) ?>
				</div><!-- .left -->
				<div class="right col-lg-5 col-lg-offset-1">
					<div class="form-wrap">
						<span>
							<?= get_field( "border_desc" ) ?>
						</span>
						<?php
						  $phones = option_field( "phones" );
						?>
						<?php if ($phones): ?>
							<div class="contacts-ttl">
								Наши контактные телефоны:
							</div><!-- .contacts -->
							<a href="tel:<?= $phones[0]['phone'] ?>" class="number first"><?= site_format_phone( $phones[0]['phone'] ) ?>,</a><!-- .number -->
							<a href="tel:<?= $phones[1]['phone'] ?>" class="number"><?= site_format_phone( $phones[1]['phone'] ) ?></a><!-- .number -->
							<a href="tel:<?= $phones[2]['phone'] ?>" class="number"><?= site_format_phone( $phones[2]['phone'] ) ?>,</a><!-- .number -->
							<a href="tel:<?= $phones[3]['phone'] ?>" class="number"><?= site_format_phone( $phones[3]['phone'] ) ?></a><!-- .number -->
						<?php endif; ?>
					</div><!-- .form-wrap -->
				</div><!-- .right -->
			</div><!-- .row -->
			<?php if (have_rows('table_list')): ?>
				<div class="tabels-wrap">
					<?php while (have_rows('table_list')) : the_row(); ?>
						<header class="tabel__head">
							<?= get_sub_field( "title" ) ?>
						</header><!-- .tabel__head -->
						<?php if (have_rows('service_list')): $i = 0; ?>
							<table class="table">
								<tbody>
									<?php while (have_rows('service_list')) : the_row(); ?>
										<tr <?= ($i % 2)? 'class="info"':'' ?>>
											<th scope="row"><?= get_sub_field( "title" ) ?></th>
											<td><?= (get_sub_field( "free" ) || !get_sub_field( "price" )) ? 'Бесплатно' : get_sub_field( "price" ) ?></td>
										</tr>
									<?php $i++; endwhile; ?>
								</tbody>
							</table>
						<?php endif; ?>
					<?php endwhile; ?>
					<div class="text">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores sapiente voluptatibus autem ducimus dolor sed eos. Voluptatem nam modi possimus ut a molestias. Eos optio veritatis nam facere deserunt blanditiis! At, tempore provident dolores iure adipisci facere dolor nulla, iste. Unde dolor, dolorem provident quasi autem ex consequuntur numquam. Dolorem obcaecati aliquid asperiores, natus numquam, consequatur quod animi magni maiores, quasi non molestiae. Laudantium molestiae corporis placeat deserunt nulla voluptatem alias eligendi recusandae sit animi, explicabo maxime quisquam aliquid, unde reprehenderit et architecto adipisci eveniet labore debitis facilis magni provident quos. Tenetur officiis, nemo dicta explicabo ex quis tempore!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci magnam nam fugiat ullam animi quasi iusto enim eum obcaecati. Laborum voluptatum ex non quos consequatur dolores cupiditate quaerat obcaecati atque, corrupti, itaque velit ullam perferendis sunt dicta dolor impedit repudiandae qui. Dolores cupiditate quisquam sunt magni, delectus animi perferendis consectetur.
						</p>
					</div>
				</div><!-- .tabels-wrap -->
			<?php endif; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .prices -->

<?php get_footer(); ?>
