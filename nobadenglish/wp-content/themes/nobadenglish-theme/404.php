<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nobadenglish-theme
 */

get_header();
?>
			

    <section class="page404">
      <div class="page404__wrap">
				<header>
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nobadenglish-theme' ); ?></h1>
				</header><!-- .page-header -->
        <div class="page404__content">
					<a class="patreon" href="https://www.patreon.com/NoBadEnglish">PATREON |</a>
				<a href="https://www.perf-edu.co.uk/" class="page404__title">www.perf-edu.co.uk</a><a href="https://www.instagram.com/NoBadEnglish/" class="page404__subtitle">@NoBadEnglish</a><a href="https://www.facebook.com/pages/category/Product-Service/nobadenglish-282191315778942/" class="page404__subtitle">@NoBadEnglish</a></div>
      </div>
		</section>
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main">



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
