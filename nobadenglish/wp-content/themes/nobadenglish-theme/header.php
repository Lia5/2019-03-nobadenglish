<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package nobadenglish-theme
 */

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="icon" href="<?php bloginfo(template_url); ?>/assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(template_url); ?>/assets/img/favicon/apple-touch-icon-180x180.png">
    <meta name="keywords" content="Теги сайта">
    <meta name="description" content="Описание сайта">

    <title>NoBadEnglish</title>

		<?php wp_head();?>
  </head>
  <body>
    <header>
      <nav>
        <div class="wrap">
          <div class="nav">
            <div class="logo"><a href="/" class="logo__icon"><img src="<?php bloginfo(template_url); ?>/assets/img/logo.png" alt="logo"></a></div>
            <div class="menu-wrap">
              <div class="menu-toggle"> 
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
              </div>
              <nav class="main-menu"> 
                <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="/#about">About us</a></li>
                  <li>
                    <div class="services__btn">Services
                      <ul class="services__list">
                        <li><a href="#">Personalised English lesson by Skype</a></li>
                        <li><a href="#">General English</a></li>
                        <li><a href="#">Business English</a></li>
                        <li><a href="#">Speaking lesson </a></li>
                        <li><a href="#">IELTS prep  </a></li>
                        <li><a href="#">FCE prep </a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">Grammar</a></li>
                  <li><a href="listing">Vocabulary</a></li>
                  <li><a href="/#contactus">Contact us</a></li>
                  <li><a href="/#reviews">Reviews</a></li>
                </ul>
                <div class="btn--wrap btn--wrap--thin">
                  <div class="btn btn--blue">Get your first lesson</div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </nav>
    </header>