<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package nobadenglish-theme
 */

?>
    <footer class="footer">
		<div class="wrap">
			<div class="footer__body">
				<div class="logo">
					<a href="/">
						<div class="logo__icon"><img src="<?php bloginfo(template_url); ?>/assets/img/logo.png" alt="logo"></div>
				</a>
				</div>
				<ul class="footer__menu">
					<li class="active order1"><a href="/">Home</a></li>
					<li class="order1"><a href="/#about">About us</a></li>
					<li><a href="#">Grammar</a></li>
					<li><a href="listing">Vocabulary</a></li>
					<li><a href="/#contactus">Contact us</a></li>
					<li><a href="/#reviews">Reviews</a></li>
					<li class="footer__services order1"> <span class="footer__btn">Services</span>
						<ul class="footer__list">
							<li><a href="#">Personalised English lesson by Skype</a></li>
							<li><a href="#">General English</a></li>
							<li><a href="#">Business English</a></li>
							<li><a href="#">Speaking lesson </a></li>
							<li><a href="#">IELTS prep  </a></li>
							<li><a href="#">FCE prep </a></li>
						</ul>
					</li>
				</ul>
				<div class="footer__block">
					<ul class="social-icons">
						<li class="social-icon social-icon--yt"><a href="<?php the_field('youtube');?>"><img  src="<?php bloginfo(template_url); ?>/assets/img/youtube-logo.svg" alt="youtube"></a></li>
						<li class="social-icon social-icon--fb"><a href="<?php the_field('facebook');?>"><img  src="<?php bloginfo(template_url); ?>/assets/img/facebook-logo.svg" alt="facebook"></a></li>
						<li class="social-icon social-icon--inst"><a href="<?php the_field('instagram');?>"><img  src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></li>
					</ul>
					<div class="btn--wrap btn--wrap--thin"><a href="#" class="btn btn--blue btn--thin">Get you free lesson</a></div>
				</div>
			</div>
			<div class="footer__bottom"><a href="#">Terms and conditions</a>
				<div class="footer__development">
					 
					Design and development <a href="#">— insaim</a>
				</div><a href="">Refound Policy</a><a class="copy"><img  src="<?php bloginfo(template_url); ?>/assets/img/copy.png" alt="perfect english"></a>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
<!-- END body-->
</html>