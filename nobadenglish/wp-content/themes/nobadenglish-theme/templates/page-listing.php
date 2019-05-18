<?php
/**
 * 
 * Template Name: шаблон для страниц Листинг
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */

get_header(); ?>
    <section class="listing">
      <div class="wrap">
        <div class="title"> <span>Vocabulary</span></div>
        <div class="subtitle">Helpful rules and exercises </div>
        <div class="listing__body">
          <div class="listing__themes">
            <div class="listing__search">
              <form>
                <div class="input--wrap search--wrap">
                  <input type="search" name="search" placeholder="Rules / theme">
                  <div class="search"><img src="<?php bloginfo(template_url); ?>/assets/img/search.svg" alt="search"></div>
                </div>
              </form>
            </div>
            <ul class="themes">
              <li class="themes__item">
                <div class="themes__name">Adverse vs. averse</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Affect vs. Affect vs. effecteAffect effectffect</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Affect vs. Affect vs. effec  teAffect effec A ffect vs. Af fect vs. effecteAffect effectffect tffectAffect vs. Affect vs. effecte Affect ef fectffect</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More  </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Adverse vs. averse</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Affect vs. Affect vs. effecteAffect effectffect</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Affect vs. Affect vs. effec  teAffect effec A ffect vs. Af fect vs. effecteAffect effectffect tffectAffect vs. Affect vs. effecte Affect ef fectffect</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More  </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Adverse vs. averse</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
              <li class="themes__item">
                <div class="themes__name">Affect vs. Affect vs. effecteAffect effectffect</div>
                <div class="themes__btn"> <a href="#" class="btn--wrap btn--wrap--thin">
                    <div class="btn btn--blue"><span>More </span></div></a></div>
              </li>
            </ul>
            <div class="themes__btn--global">
              <div class="btn--wrap btn--wrap--thin">
                <div class="btn btn--blue">
                  <input type="submit" value="Show more">
                </div>
              </div>
            </div>
          </div>
          <div class="listing__order">
            <div class="listing__order--wrap">
              <div class="title title--small">Book your first lesson</div>
              <?php echo do_shortcode( '[contact-form-7 id="14" title="Book your first lesson - Listing"]' ); ?>
              <!-- <form>
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
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer();
