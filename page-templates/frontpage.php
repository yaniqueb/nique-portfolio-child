<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<section id="l-hero" class="l-hero section"><div class="l-hero__cover">
						<div class="l-hero__info site-wrapper">
							<div class="l-hero__copy">
							<p class="l-hero__title l-hero__title--prim">Hello,</p>
							<h2 class="l-hero__title l-hero__title--large">I'm <span class="l-hero__title--highlight">Yanique</span> Bullock</h2>
							<p class="l-hero__title l-hero__title--prim">I'm a Web Developer who is passionate about creating clean dynamic and high quality websites.</p></div>
							<div class="l-hero__actions">
								<div class="l-hero__action-container">
									<ul class="l-hero__list l-hero__list--social">
										<li class="l-hero__item l-hero__item--social">
											<a class="l-hero__icon-link" href="https://github.com/Yaniquebullock" target="_blank" rel="noopener noreferrer">
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">

													</path>
												</svg>
											</a>
										</li>
										<li class="l-hero__item l-hero__item--social">
											<a class="l-hero__icon-link" href="https://www.linkedin.com/in/teronbullock/" target="_blank" rel="noopener noreferrer">
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">

													</path>
												</svg>
											</a>
										</li>
									</ul>
								</div>
								<div class="l-hero__action-container">
									<span class="l-hero__item l-hero__item--actions">
										<a href="#projects" class="btn-hero">Projects 
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="btn-hero--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path d="M384 112v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h80c0-35.29 28.71-64 64-64s64 28.71 64 64h80c26.51 0 48 21.49 48 48zM192 40c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24m96 114v-20a6 6 0 0 0-6-6H102a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h180a6 6 0 0 0 6-6z">

												</path>
											</svg>
										</a>
									</span>
								</div>
							</div>
						</div>
					 </div>
					</section>
					<section id="about" class="section section--prim">
						<div class="section__container site-wrapper">
							<header class="section__header">
								<h2 class="section__title">About</h2>
							</header>
							<div class="section__box section__box--row">
								<div class="ybp-card">
									<div class="ybp-card__container">
										<div class="ybp-card__aside">
											<div class="ybp-card__img">
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">

													</path>
												</svg>
											</div>
										</div>
										<div class="ybp-card__content">
											<div class="ybp-card__header">
												<h3 class="ybp-card__title">Responsive</h3>
												<div class="ybp-card__subtitle">

												</div>
											</div>
											<div class="ybp-card__body">
												<p class="ybp-card__copy">
													My applications are designed to work on all device sizes, Desktop or Mobile.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="ybp-card">
										<div class="ybp-card__container">
											<div class="ybp-card__aside">
												<div class="ybp-card__img">
													<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">

														</path>
													</svg>
												</div>
											</div>
											<div class="ybp-card__content">
												<div class="ybp-card__header">
													<h3 class="ybp-card__title">Dynamic</h3>
													<div class="ybp-card__subtitle">
													</div>
												</div>
												<div class="ybp-card__body">
													<p class="ybp-card__copy">Websites don't have to be static, I love making pages come to life.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="ybp-card">
										<div class="ybp-card__container">
											<div class="ybp-card__aside">
												<div class="ybp-card__img">
													<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path d="M208 0c-29.9 0-54.7 20.5-61.8 48.2-.8 0-1.4-.2-2.2-.2-35.3 0-64 28.7-64 64 0 4.8.6 9.5 1.7 14C52.5 138 32 166.6 32 200c0 12.6 3.2 24.3 8.3 34.9C16.3 248.7 0 274.3 0 304c0 33.3 20.4 61.9 49.4 73.9-.9 4.6-1.4 9.3-1.4 14.1 0 39.8 32.2 72 72 72 4.1 0 8.1-.5 12-1.2 9.6 28.5 36.2 49.2 68 49.2 39.8 0 72-32.2 72-72V64c0-35.3-28.7-64-64-64zm368 304c0-29.7-16.3-55.3-40.3-69.1 5.2-10.6 8.3-22.3 8.3-34.9 0-33.4-20.5-62-49.7-74 1-4.5 1.7-9.2 1.7-14 0-35.3-28.7-64-64-64-.8 0-1.5.2-2.2.2C422.7 20.5 397.9 0 368 0c-35.3 0-64 28.6-64 64v376c0 39.8 32.2 72 72 72 31.8 0 58.4-20.7 68-49.2 3.9.7 7.9 1.2 12 1.2 39.8 0 72-32.2 72-72 0-4.8-.5-9.5-1.4-14.1 29-12 49.4-40.6 49.4-73.9z">

													</path>
												</svg>
											</div>
										</div>
										<div class="ybp-card__content">
											<div class="ybp-card__header">
												<h3 class="ybp-card__title">Intuitive</h3>
												<div class="ybp-card__subtitle">

												</div>
											</div>
											<div class="ybp-card__body">
												<p class="ybp-card__copy">My sites are designed with a clean, easy to use interface.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section__box">
								<div class="about__copy">
									<p>Hello! I'm Yanique, a Web Developer based in the New York metropolitan area.</p>
									<p>I am Goal driven, a life long learner and a Weekend Cyclist. I have a passion for learning new technologies and creating phenomenal things that live on the web.</p>
									<p>Please take a moment to check out a few of my projects <a class="section__link" href="#projects">here</a>.
									<br>If you have any question, you can contact me&nbsp;<a class="section__link" href="#cta">here</a>.</p>
								</div>
							</div>
						</div>	
					</section>
					<section id="skills" class="section section--sec">
						<div class="section__container site-wrapper">
							<header class="section__header">
								<h2 class="section__title">Skills</h2>
							</header><div class="section__box section__box--row">
								<ul class="section__list">
									<li><h3 class="section__list-title">Front-end</h3></li>
									<li class="section__list-item">HTML</li>
									<li class="section__list-item">CSS</li>
									<li class="section__list-item">JavaScript</li>
									<li class="section__list-item">React</li>
									<li class="section__list-item">Bootstrap</li>
									<li class="section__list-item">sass</li>
								</ul>
								<ul class="section__list">
									<li><h3 class="section__list-title">Back-end</h3></li>
									<li class="section__list-item">Node</li>
									<li class="section__list-item">Express</li>
									<li class="section__list-item">PHP</li>
									<li class="section__list-item">Sequelize(ORM)</li>
									<li class="section__list-item">PostgreSQL</li>
									<li class="section__list-item">Python</li></ul>
									<ul class="section__list">
										<li><h3 class="section__list-title">Other</h3></li>
										<li class="section__list-item">Git</li>
										<li class="section__list-item">JSON</li>
										<li class="section__list-item">WordPress (CRM)</li>
										<li class="section__list-item">Google Analytics</li>
										<li class="section__list-item">Shopify</li>
										<li class="section__list-item">Wireframing</li>
									</ul>
								</div>
							</div>
					</section>
					<section id="projects" class="section section--default">
						<div class="section__container site-wrapper">
							<header class="section__header">
								<h2 class="section__title">Projects</h2>
							</header>
							<div class="project">
								<div class="project__aside">
									<img class="img project__img" src="images/projects/flashcard.jpg" alt="">
								</div>
								<div class="project__info">
									<header class="project__header">
										<h3 class="project__title">Flashcard Study App</h3>
									</header>
									<p class="project__copy">Web application designed to grant users the ability to make and study from custom flashcards.</p>
									<div class="project__tag">
										<h4 class="project__tag-title">Tech Stack:</h4>
										<ul class="project__tag-list">
											<li class="tag-item">Express.js</li>
											<li class="tag-item">Sequelize (ORM)</li>
											<li class="tag-item">PostgreSQL</li>
											<li class="tag-item">Express Session</li>
											<li class="tag-item">JavaScript/ES6</li>
											<li class="tag-item">SASS</li>
										</ul>
									</div>
									<ul class="project__action">
										<li class="project__list-item">
											<a href="https://github.com/Teronbullock/flashcard" class="btn" target="_blank" rel="noopener noreferrer">View Code 
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z">

													</path>
												</svg>
											</a>
										</li>
										<li class="project__list-item">
											<a href="https://flashcardtb.herokuapp.com/" class="btn" target="_blank" rel="noopener noreferrer">View Site <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">

													</path>
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="project">
								<div class="project__aside">
									<img class="img project__img" src="images/projects/weatherapp.jpg" alt="">
								</div>
								<div class="project__info">
									<header class="project__header">
										<h3 class="project__title">React Weather App</h3>
									</header>
									<p class="project__copy">An SPA for weather that allows users to enter their Zip Code or City Name to return detailed current &amp; hourly data.</p>
									<div class="project__tag">
										<h4 class="project__tag-title">Tech Stack:</h4>
										<ul class="project__tag-list">
											<li class="tag-item">React.js</li>
											<li class="tag-item">React Router-Dom</li>
											<li class="tag-item">Axios</li>
											<li class="tag-item">JavaScript/ES6</li>
										</ul>
									</div>
									<ul class="project__action">
										<li class="project__list-item">
											<a href="https://github.com/Teronbullock/weather_app" class="btn" target="_blank" rel="noopener noreferrer">View Code <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z">

												</path>
												</svg>
											</a>
										</li>
										<li class="project__list-item">
										<a href="https://react-weather-app-tb.netlify.app/" class="btn" target="_blank" rel="noopener noreferrer">View Site <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">

											</path>
										</svg>
										</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="project">
								<div class="project__aside">
									<img class="img project__img" src="images/projects/bigdaddys.jpg" alt="">
								</div>
								<div class="project__info">
									<header class="project__header">
										<h3 class="project__title">Big Daddys Homeplate BBQ</h3>
									</header>
									<p class="project__copy">
									Responsive Single-Page site that uses a clean minimalist design.</p>
									<div class="project__tag">
										<h4 class="project__tag-title">Tech Stack:</h4>
										<ul class="project__tag-list">
											<li class="tag-item">HTML5/CSS3</li>
											<li class="tag-item">JavaScript/ES6</li>
											<li class="tag-item">SASS</li>
											<li class="tag-item">Figma</li>
										</ul>
									</div>
									<ul class="project__action">
										<li class="project__list-item">
											<a href="https://github.com/Teronbullock/bigdaddysbbq" class="btn" target="_blank" rel="noopener noreferrer">View Code 
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z">

													</path>
												</svg>
											</a>
										</li>
										<li class="project__list-item">
											<a href="http://bigdaddyshomeplatebbq.com/" class="btn" target="_blank" rel="noopener noreferrer">View Site 
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">

													</path>
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
					<section id="cta" class="cta section">
						<div class="cta__container">
							<h2 class="cta__title">I'm Ready to help you create something amazing today.</h2>
							<div class="cta__content">
								<form class="cta__form" action="https://formspree.io/f/xzbkebwn" method="POST">
									<div class="cta__form-container">
										<label class="cta__label">Name</label>
										<input type="text" name="name" id="name" placeholder="Name" class="cta__input" value="">
										<label class="cta__label">Email</label>
										<input type="email" name="email" id="email" placeholder="Email" class="cta__input" value="">
										<label class="cta__label">Message</label>
										<textarea class="cta__input cta__textarea" name="message" placeholder="Enter message here...">
										</textarea>
										<div class="cta__btn">
											<input type="submit" class="cta__btn--submit" value="Send Message">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="cta__btn-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">

												</path>
											</svg>
										</div>
									</div>
								</form>
							</div>
						</div>
					</section>




					<?php
					// while ( have_posts() ) {
					// 	the_post();
					// 	get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
					// 	if ( comments_open() || get_comments_number() ) {
					// 		comments_template();
					// 	}
					// }
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
