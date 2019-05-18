<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package nobadenglish-theme
 */

get_header();
?>
<div class="header">
<div class="wrap">
	<div class="header__title">
		<h1>
			 
			-Hi, welcome to<br><span class="accent">No Bad English!</span>
		</h1>
		<p>
			 
			-I`m Marina, the head teacher of Perfect Education co-op <br>-I`ve been teaching English since 2005.<br>-I can help you with your English
		</p>
	</div>
</div>
</div>
<section class="directions">
<div class="wrap">
	<div class="directions__items"><a href="#" class="directions__item directions__item--green">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/001-talk.svg" alt="Speaking lessons"></div>
			<div class="directions__text">Speaking lessons</div></a><a href="#" class="directions__item directions__item--yellow">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/002-english-language.svg" alt="General English"></div>
			<div class="directions__text">General Englishh</div></a><a href="#" class="directions__item directions__item--bord">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/003-agreement.svg" alt="Business English"></div>
			<div class="directions__text">Business Englis</div></a><a href="#" class="directions__item directions__item--red">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/004-student.svg" alt="IELTS prep"></div>
			<div class="directions__text">IELTS prep </div></a><a href="#" class="directions__item directions__item--darkblue">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/005-exam.svg" alt="FCE prep"></div>
			<div class="directions__text">FCE prep </div></a><a href="#" class="directions__item directions__item--blue">
			<div class="directions__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/006-study.svg" alt="Self-study help"></div>
			<div class="directions__text">Self-study help</div></a></div>
</div>
</section>
<section class="tv">
<div class="wrap">
	<div class="title"> <span>My name`s Marina.</span></div>
	<div class="subtitle"> I`m the head teacher of Perfect Education Co-op and this is my site. If you want to learn more about me, please watch the video.</div>
	<div class="tv__body"> 
		<div class="tv__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/tv.png" alt="tv"><a data-fancybox href="https://www.youtube.com/watch?v=f7zk9qLbSSs" class="tv_src btn__movie">
				<div class="btn__movie--wrap"></div></a></div>
		<div class="tv__text">
			<ul class="tv__itens">
				<li class="tv__item"> 
					<div class="tv__name">To find more advice follow me on:</div>
					<ul class="social-icons">
						<li class="social-icon social-icon--fb"><a href="<?php the_field('facebook');?>"><img src="<?php bloginfo(template_url); ?>/assets/img/facebook-logo.svg" alt="facebook"></a></li>
						<li class="social-icon social-icon--inst"><a href="<?php the_field('instagram');?>"><img src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></li>
						<li class="social-icon social-icon--yt"><a href="<?php the_field('youtube');?>"><img src="<?php bloginfo(template_url); ?>/assets/img/youtube-logo.svg" alt="youtube"></a></li>
					</ul>
				</li>
				<li class="tv__item"> 
					<div class="tv__name">And don`t be afraid to ask questions! My mission is to better your English.</div>
				</li>
				<li class="tv__item"> 
					<div class="tv__name">Just in case you`re interested, here's my story.</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="tv__form">
	<?php echo do_shortcode( '[contact-form-7 id="9" title="Get you tests lesson"]' ); ?>
		<!-- <form>
			<div class="tv__form-wrap">
				<div class="input--wrap">
					<input type="text" name="name" placeholder="Name" required>
				</div>
				<div class="input--wrap">
					<input type="text" name="skype" placeholder="Skype" required>
				</div>
				<div class="input--wrap">
					<input type="text" name="email" placeholder="Email" required>
				</div>
				<div class="tv__min-text">Consent to personal data processing</div>
				<div class="btn--wrap">
					<div class="btn btn--red">
						<input type="submit" value="Get you tests lesson">
					</div>
				</div>
			</div>
		</form> -->
		<div class="subtitle"> We will contact you about the time within 24 hours, alternatively you can contact me by email</div>
		<ul class="social-icons">
			<li class="social-icon social-icon--fb"><a href="<?php the_field('facebook');?>"><img src="<?php bloginfo(template_url); ?>/assets/img/facebook-logo.svg" alt="facebook"></a></li>
			<li class="social-icon social-icon--inst"><a href="<?php the_field('instagram');?>"><img src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></li>
		</ul>
	</div>
</div>
</section>
<section id="about" class="about">
<div class="wrap">
	<div class="title"> <span>About us</span></div>
	<div class="about__body">
		<div class="about__text"> 
			<p>
				 
				NoBadEnglish.com is a part of Perfect Education Co-op. <br>Perfect Education Co-op is an online language school, that grew naturally starting from 2008. 
			</p>
			<p>Throughout so many years we've helped over 900 students to achieve their ambition, whether it is improving English for work, English for travelling, special English or Exam English. </p>
		</div>
		<ul class="about__numbers">
			<li>900 <span>students </span></li>
			<li>11 <span>years of experience </span></li>
		</ul>
	</div>
</div>
</section>

<?php if( have_rows('review') ): ?>
<section id="reviews" class="reviews">
<div class="wrap">
	<div class="title"> <span>Reviews</span></div>
	<div class="reviews__body">
		<div class="reviews__slider">

	<?php while( have_rows('review') ): the_row(); 

		// vars
	$review_name = get_sub_field('review_name');
		$review_service = get_sub_field('review_service');
		$review_lessons = get_sub_field('review_lessons');
		$review_text = get_sub_field('review_text');
		$review_bottom = get_sub_field('review_bottom');
	$review_foto = get_sub_field('review_foto');
	$review_video = get_sub_field('review_video');
		$review_youtube = get_sub_field('review_youtube');
		$review_facebook = get_sub_field('review_facebook');
		$review_instagram = get_sub_field('review_instagram');
		?>

			<div class="reviews__item--wrap">
				<div class="reviews__item">

				<?php if( $review_foto ): ?>
					<div class="reviews__foto--wrap">
						<div class="reviews__foto" style="background-image: url(<?php echo $review_foto['url']; ?>)"></div>
				<?php endif; ?>
				
				<?php if( $review_video ): ?>
						<a data-fancybox href="<?php echo $review_video; ?>" class="reviews--play"></a>
						<?php endif; ?>
						<ul class="social-icons">
					<?php if( $review_youtube ): ?>
							<li class="social-icon social-icon--yt"><a href="<?php echo $review_youtube; ?>"><img src="<?php bloginfo(template_url); ?>/assets/img/youtube-logo.svg" alt="youtube"></a></li>
					<?php endif; ?>
					<?php if( $review_facebook ): ?>
						<li class="social-icon social-icon--fb"><a href="<?php echo $review_facebook; ?>"><img src="<?php bloginfo(template_url); ?>/assets/img/facebook-logo.svg" alt="facebook"></a></li>
					<?php endif; ?>
					<?php if( $review_instagram ): ?>
						<li class="social-icon social-icon--inst"><a href="<?php echo $review_instagram; ?>"><img src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></li>
						<?php endif; ?>
						</ul>

					</div>
					<div class="reviews__descr">
						<div class="reviews__name"><?php echo $review_name; ?> </div>
						<div class="reviews__text--title"><?php echo $review_service; ?> – <?php echo $review_lessons; ?> lessons</div>
						<div class="reviews__text"><?php echo $review_text; ?></div>
						<div class="reviews__text--title">Succsess story: <span><?php echo $review_bottom; ?></span></div>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
		</div>
	</div>
</div>
</section>
<?php endif; ?>

<section class="services">
<div class="wrap">
	<div class="title"> <span>Services</span></div>
	<div class="services__body">
		<div class="services__item services__item4">
			<div class="services__title services__title--dark">Speaking lessons</div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
		<div class="services__item services__item3">
			<div class="services__title services__title--dark">General English</div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
		<div class="services__item services__item2">
			<div class="services__title services__title--dark">Business English</div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
		<div class="services__item services__item5">
			<div class="services__title">IELTS prep </div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
		<div class="services__item services__item6">
			<div class="services__title services__title--dark">FCE prep </div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
		<div class="services__item services__item1">
			<div class="services__title">Self-study help</div><a href="#" class="btn--wrap">
				<div class="btn btn--red">Let's go</div></a>
		</div>
	</div>
	<div class="phone-body"> 
		<div class="tv__form">
		<?php echo do_shortcode( '[contact-form-7 id="10" title="Contact me"]' ); ?>
		<!--	<form>
				<div class="phone-body__title">I dont know, contact me, please!</div>
				<div class="tv__form-wrap">
					<div class="input--wrap">
						<input type="text" name="name" placeholder="Name" required>
					</div>
					<div class="input--wrap">
						<input type="text" name="email" placeholder="Email" required>
					</div>
					<div class="phone-body__subtitle">Consent to personal data processing</div>
					<div class="btn--wrap">
						<div class="btn btn--red btn--big">
							<input type="submit" value="Send">
						</div>
					</div>
				</div>
			</form>-->
		</div>
	</div>
</div>
</section>
<section class="free">
<div class="wrap">
	<div class="title"> <span>Free Lesson</span></div>
	<div class="free__body">
		<div class="free__videos">
			<div class="free__item">
				<div class="free__video"><img src="<?php bloginfo(template_url); ?>/assets/img/free-video1.jpg" alt="free-video">
					<a data-fancybox href="https://www.youtube.com/watch?v=f7zk9qLbSSs" class="btn__movie">
						<div class="btn__movie--wrap"></div>
					</a>
				</div>
				<div class="free__title">Watch what happens during the first lesson</div>
			</div>
			<div class="free__item">   
				<div class="free__video"><img src="<?php bloginfo(template_url); ?>/assets/img/free-video2.jpg" alt="free-video">
					<a data-fancybox href="https://www.youtube.com/watch?v=f7zk9qLbSSs" class="btn__movie">
						<div class="btn__movie--wrap"></div>
					</a>
				</div>
				<div class="free__title">This is an overview of a typical general English lesson. Your lesson will be different.</div>
			</div>
			<div class="free__item">
				<div class="free__video"><img src="<?php bloginfo(template_url); ?>/assets/img/free-video2.jpg" alt="free-video">
					<a data-fancybox href="https://www.youtube.com/watch?v=f7zk9qLbSSs" class="btn__movie">
						<div class="btn__movie--wrap"></div>
					</a>
				</div>
				<div class="free__title">This is an overview of a typical general English lesson. Your lesson will be different.</div>
			</div>
		</div>
		<div class="free__form--wrap">
		<div class="free__form-title">Get your free lesson</div>
		<?php echo do_shortcode( '[contact-form-7 id="11" title="Get your free lesson"]' ); ?>
		
			<!--<form>
				<div class="free__form">
					<div class="input--wrap">
						<input type="text" name="name" placeholder="Name" required>
					</div>
					<div class="input--wrap">
						<input type="text" name="skype" placeholder="Skype" required>
					</div>
					<div class="input--wrap">
						<input type="text" name="email" placeholder="Email" required>
					</div>
					<div class="input--wrap">
						<select class="styled">
							<option>Type of lesson </option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
					<div class="tv__min-text">Consent to personal data processing</div>
					<div class="btn--wrap">
						<div class="btn btn--red">
							<input type="submit" value="Get you tests lesson">
						</div>
					</div>
				</div>
			</form>-->
		</div>
	</div>
</div>
</section>
<?php if( have_rows('qa') ): ?>
<section class="questions">
<div class="wrap">
	<div class="title"> <span>Questions</span></div>
	<div class="questions__body">
	<?php while( have_rows('qa') ): the_row(); 
	//vars
	$qa_question = get_sub_field('qa_question');
	$qa_answer = get_sub_field('qa_answer');
		?>
		<div class="questions__item">
			<div class="questions__qa"><?php echo $qa_question; ?></div>
			<div class="questions__ans"><?php echo $qa_answer; ?></div>
		</div>
		<?php endwhile; ?>
	</div>
	<div class="subtitle"> 
		<p>If you have any questions or to find more advice follow me on Instagram, Twitter, Facebook or Youtube.</p>
		<p>I`m always happy to help because my mission is to better your English.</p>
	</div>
</div>
</section>
<?php endif; ?>
<section id="contactus" class="contact">
<div class="wrap">
	<div class="title contact__title"> <span>Contact us</span></div>
	<div class="subtitle">
		 
		If you have any questions about refunds, please contact us through email <a href="mailto:teacher@perf-edu.co.uk">teacher@perf-edu.co.uk</a>
	</div>
</div>
</section>
<?php
get_footer();
