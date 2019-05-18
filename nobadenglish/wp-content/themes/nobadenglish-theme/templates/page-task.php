<?php
/**
 * 
 * Template Name: шаблон для страниц Задания
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */

get_header(); ?>
    <section class="task">
      <div class="wrap">
        <div class="title title-main"><span>To Be in Present Simple</span></div>
        <div class="subtitle">Helpful rules and exercises</div>
        <div class="title title--small title--rule"><span>Rule</span></div>
        <div class="task__body">
          <div class="task__title">To be in Present Simple is used when you want</div>
          <ol class="task__text"> 
            <li>1 — to say that something is located somewhere: the chair is in the room.</li>
            <li>2 — exists or is present: here’s a chair, please, take a seat.</li>
            <li>3 — has characteristics: He`s a great father.</li>
          </ol>
        </div>
        <div class="task__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/page_task/task1.jpg" alt="task"></div>
        <div class="title title--small title--examples"><span>Examples</span></div>
        <div class="task__pic"><img src="<?php bloginfo(template_url); ?>/assets/img/page_task/examples1.jpg" alt="examples"></div>
        <div class="title title--small title--check"><span>Check yourself</span></div>
        <div class="subtitle">Helpful rules and exercises    </div>
        <ol class="task__items">
          <li class="task__item">
            <div class="task__options option">
              <div class="option__name">Response options:</div>
              <ul class="option__items">
                <li class="option__item active">Am</li>
                <li class="option__item">Is</li>
                <li class="option__item">Are</li>
              </ul>
            </div>
            <div class="task__qa"> 
              <div class="task__num">1.</div>
              <div class="task__qa-text">There _______ a place like that in his native town.</div>
            </div>
          </li>
          <li class="task__item">
            <div class="task__options option">
              <div class="option__name">Response options:</div>
              <ul class="option__items option__items-mcol">
                <li class="option__item active">I used to get up at seven</li>
                <li class="option__item">What time did you use to</li>
                <li class="option__item">He didn’t use to wake</li>
              </ul>
            </div>
            <div class="task__qa"> 
              <div class="task__num">2.</div>
              <div class="task__qa-text">There _______ a place like that in his native town.</div>
            </div>
          </li>
          <li class="task__item">
            <div class="task__options option">
              <div class="option__name">Response options:</div>
              <ul class="option__items">
                <li class="option__item">Am</li>
                <li class="option__item">Is</li>
                <li class="option__item">Are</li>
              </ul>
            </div>
            <div class="task__qa"> 
              <div class="task__num">3.</div>
              <div class="task__qa-text">There _______ a place like that in his native town.</div>
            </div>
          </li>
        </ol>
        <div class="task__btn">
          <div class="btn--wrap">
            <div class="btn btn--blue">
              <input type="submit" value="Check task">
            </div>
          </div>
        </div>
        <div class="title title--small title--result"><span>Result</span></div>
        <div class="task__result">
          <div class="task__result-foto"><img src="<?php bloginfo(template_url); ?>/assets/img/page_task/result-yes.jpg" alt="result"><img src="<?php bloginfo(template_url); ?>/assets/img/page_task/result-no.jpg" alt="result" class="display-none"></div>
          <div class="task__result-mob">
            <div class="task__result--tick"></div>
          </div>
          <div class="task__result-text">Revise the rule again and try one more time!</div>
        </div>
      </div>
    </section>
    <section class="taskFirst">
      <div class="wrap">
        <div class="taskFirst__body">
          <div class="taskFirst__text"> 
            <div class="taskFirst__title">You first free lesson</div>
            <p>Send a request - appointment of a convenient time to call on Skype - discuss your goals </p>
          </div>
          <ul class="taskFirst__form">
          <?php echo do_shortcode( '[contact-form-7 id="19" title="You first free lesson - Task"]' ); ?>
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
                <div class="tv__min-text">Consent to personal data processing</div>
                <div class="btn--wrap">
                  <div class="btn btn--red">
                    <input type="submit" value="Get you tests lesson">
                  </div>
                </div>
              </div>
            </form> -->
          </ul>
        </div>
      </div>
    </section>

<?php get_footer();
