<?php 
$skills = get_field('skills');
?>

<section id="skills" class="section section--sec">
	<div class="section__container site-wrapper">
		<header class="section__header">
			<h2 class="section__title">Skills</h2>
		</header>
		<div class="section__box section__box--row">
			<?php echo esc_html( the_field('skills')); ?>
		</div>
	</div>
</section>