<?php
/**
 * 
 * Template Name: шаблон для страниц Услуги
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */

get_header(); ?>
    <section class="servicesAbout">
      <div class="wrap">
        <div class="servicesAbout__body">
          <div class="title"> <span>Services | Business</span></div>
          <div class="servicesAbout__text">
            <p>Personalised English lesson by Skype</p>
            <p>Do you want to impress your boss with your English? Or are you tired to pay for a translator? You can improve your English with English lessons by Skype. Only qualified English teachers with at least 6 years of teaching experience.  </p>
          </div>
          <div class="servicesAbout__btn"> <a href="#" class="btn--wrap btn--small">
              <div class="btn btn--green"><span>Buy </span></div></a></div>
        </div>
      </div>
    </section>
    <section class="servicesPacks">
      <div class="wrap">
        <div class="title"> <span>Special packs</span></div>
        <div class="servicesPacks__tabs">
          <div class="tabs">
            <ul class="tabs__caption">
              <li class="active">
                <div class="btn--wrap btn--wrap--left">
                  <div class="btn btn--darkblue">
                    <input type="submit" value="Employee">
                  </div>
                </div>
              </li>
              <li> 
                <div class="btn--wrap btn--wrap--right">
                  <div class="btn btn--blue">
                    <input type="submit" value="Employer">
                  </div>
                </div>
              </li>
            </ul>
            <div class="tabs__content active"> 
              <div class="servicesPacks__items"> 
                <div class="servicesPacks__item item-border"> 
                  <div class="servicesPage__title">
                     
                    New Job pack — <span>40£</span>
                  </div>
                  <div class="servicesPacks__text"> 
                    <p>CV check</p>
                    <p>Cover letter check</p>
                    <p>Job interview preparation (30 min by) Skype+written suggestions on improvement</p>
                    <p>Linkdin profile check</p>
                  </div>
                  <div class="servicesPacks__btn">
                    <div class="btn--wrap">
                      <div class="btn btn--green">
                        <input type="submit" value="Buy">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="servicesPacks__item item-border"> 
                  <div class="servicesPage__title">
                     
                    Impress your boss pack — <span>£30</span>
                  </div>
                  <div class="servicesPacks__text"> 
                    <p>CV check</p>
                    <p>Cover letter check</p>
                    <p>Job interview preparation (30 min by) Skype+written suggestions on improvement</p>
                    <p>Linkdin profile check</p>
                  </div>
                  <div class="servicesPacks__btn">
                    <div class="btn--wrap">
                      <div class="btn btn--green">
                        <input type="submit" value="Buy">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs__content">
              <div class="servicesPacks__items"> 
                <div class="servicesPacks__item item-border"> 
                  <div class="servicesPage__title">
                     
                    New Job pack2 — <span>40£</span>
                  </div>
                  <div class="servicesPacks__text"> 
                    <p>CV check</p>
                    <p>Cover letter check</p>
                    <p>Job interview preparation (30 min by) Skype+written suggestions on improvement</p>
                    <p>Linkdin profile check</p>
                  </div>
                  <div class="servicesPacks__btn">
                    <div class="btn--wrap">
                      <div class="btn btn--green">
                        <input type="submit" value="Buy">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="servicesPacks__item item-border"> 
                  <div class="servicesPage__title">
                     
                    Impress your boss pack2 — <span>£30</span>
                  </div>
                  <div class="servicesPacks__text"> 
                    <p>CV check</p>
                    <p>Cover letter check</p>
                    <p>Job interview preparation (30 min by) Skype+written suggestions on improvement</p>
                    <p>Linkdin profile check</p>
                  </div>
                  <div class="servicesPacks__btn">
                    <div class="btn--wrap">
                      <div class="btn btn--green">
                        <input type="submit" value="Buy">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="servicesFirst">
      <div class="wrap">
        <div class="title title--small"><span>First lesson</span></div>
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
              <div class="btn--wrap">
                <div class="btn btn--red">
                  <input type="submit" value="Get your first lesson">
                </div>
              </div>
              <div class="tv__min-text">Consent to personal data processing</div>
            </div>
          </form> -->
          <div class="subtitle"> We will contact you about the time within 24 hours, alternatively you can contact me by email</div>
          <ul class="social-icons">
            <li class="social-icon social-icon--fb"><a href="#"><img src="<?php bloginfo(template_url); ?>/assets/img/facebook-logo.svg" alt="facebook"></a></li>
            <li class="social-icon social-icon--inst"><a href="#"><img src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="servicesExtra">
      <div class="wrap">
        <div class="title"> <span>Extra services</span></div>
        <div class="servicesExtra__body">
          <div class="servicesExtra__top">
            <div class="servicesExtra__left">
              <div class="servicesExtra__item servicesExtra__left--item item-border item-border2">
                <div class="servicesPage__title">Document check - £10<span>(per page)</span></div>
                <div class="servicesPage__btn">
                  <div class="btn--wrap">
                    <div class="btn btn--green">
                      <input type="submit" value="Buy">
                    </div>
                  </div>
                </div>
              </div>
              <div class="servicesExtra__item servicesExtra__left--item item-border item-border2">
                <div class="servicesPage__title">Business email check - £10<span>(per page)</span></div>
                <div class="servicesPage__btn">
                  <div class="btn--wrap">
                    <div class="btn btn--green">
                      <input type="submit" value="Buy">
                    </div>
                  </div>
                </div>
              </div>
              <div class="servicesExtra__item servicesExtra__left--item item-border item-border2">
                <div class="servicesPage__title">Linkdin profile check - £10<span>(per page)</span></div>
                <div class="servicesPage__btn">
                  <div class="btn--wrap">
                    <div class="btn btn--green">
                      <input type="submit" value="Buy">
                    </div>
                  </div>
                </div>
              </div>
              <div class="servicesExtra__item servicesExtra__left--item item-border item-border2">
                <div class="servicesPage__title">Cover letter check - £10<span>(per page)</span></div>
                <div class="servicesPage__btn">
                  <div class="btn--wrap">
                    <div class="btn btn--green">
                      <input type="submit" value="Buy">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="servicesExtra__right"> 
              <div class="servicesExtra__item servicesExtra__item--column item-border item-border2">
                <div class="servicesPage__title">Presentation check</div>
                <div class="servicesPage__btn">
                  <div class="btn--wrap">
                    <div class="btn btn--green">
                      <input type="submit" value="Buy">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="servicesExtra__center">
            <div class="servicesExtra__item item-border item-border2">
              <div class="servicesPage__title">
                 
                CV check — <span>10£</span>
              </div>
              <div class="servicesPage__subtitle">CV check <br> Cover letter check</div>
              <div class="servicesPage__btn">
                <div class="btn--wrap">
                  <div class="btn btn--green">
                    <input type="submit" value="Buy">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicesExtra__item item-border item-border2">
              <div class="servicesPage__title">
                 
                Cover letter writing — <span>15£</span>
              </div>
              <div class="servicesPage__subtitle">(please send your CV)</div>
              <div class="servicesPage__btn">
                <div class="btn--wrap">
                  <div class="btn btn--green">
                    <input type="submit" value="Buy">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicesExtra__item servicesExtra__item--column">
              <div class="servicesPage__title">MIX AND MATCH</div>
              <div class="servicesPage__subtitle">get 10% off if total amount of services you book is £70 get 15% off if total value of the services you book is £100 (does not include pack offers)</div>
            </div>
          </div>
          <div class="servicesExtra__last">
            <div class="servicesExtra__item item-border item-border2">
              <div class="servicesPage__title">
                 
                Job interview preparation —  <span>15£</span>
              </div>
              <div class="servicesPage__subtitle">(30 min by Skype+written suggestions on improvement)</div>
              <div class="servicesPage__btn">
                <div class="btn--wrap">
                  <div class="btn btn--green">
                    <input type="submit" value="Buy">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicesExtra__item item-border item-border2">
              <div class="servicesPage__title">
                 
                Presentation rehearsal + advice on improvement 20 min by Skype — <span>15£</span>
              </div>
              <div class="servicesPage__btn">
                <div class="btn--wrap">
                  <div class="btn btn--green">
                    <input type="submit" value="Buy">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="servicesQuestions">
      <div class="wrap">
        <div class="servicesQuestions__body">
          <div class="servicesQuestions__title">DO you have any quesions?</div>
          <div class="servicesQuestions__text">
             
            just ask me here in <span class="social-icon social-icon--inst"><a href="#"><img src="<?php bloginfo(template_url); ?>/assets/img/instagram-logo.svg" alt="instagram"></a></span>or by <a href="mailto:#">email </a>
          </div>
        </div>
      </div>
    </section>
    <section class="servicesGift">
      <div class="wrap">
        <div class="title title--small">GIFT VOUCHER</div>
        <div class="subtitle">Text text texttexttexttext text </div>
        <div class="servicesGift__items"></div>
        <div class="btn--wrap">
          <div class="btn btn--red">
            <input type="submit" value="Buy">
          </div>
        </div>
        <div class="servicesGift__navigation">  <a href="#" class="servicesGift__part">
            <div class="custom-arrow"></div>
            <div class="servicesGift__text servicesGift__text--small">Exam Services</div></a><a href="#" class="servicesGift__part">
            <div class="servicesGift__text">Want to speak freely?</div>
            <div class="custom-arrow custom-arrow--right"></div></a></div>
      </div>
    </section>

<?php get_footer();
