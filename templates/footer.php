<?php require __DIR__.'/../lang/nav.php'; ?>

<footer class="content-info">
  <div class="container">
      <div class="logo-tri-container col-md-4">
          <a href="<?php echo home_url(); ?>">
              <?php include "logo-tri.php" ?>
          </a>
          <div class="social-zone">
              <p class="follow-txt"><?php echo $follow_txt; ?></p>
              <div class="social-links">
                  <div id="twitter">
                      <a target="_blank" href="https://twitter.com/hipay">
                          <svg version="1.1" id="twitter-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                               y="0px" width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693"
                               xml:space="preserve">
                                        <path id="twitter" fill="#FFFFFF" d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592
                                            c-1.953,1.159-4.115,2-6.418,2.454c-1.844-1.964-4.471-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107
                                            c0,0.791,0.089,1.562,0.262,2.303c-8.399-0.422-15.848-4.445-20.833-10.561c-0.87,1.492-1.367,3.229-1.367,5.082
                                            c0,3.507,1.783,6.601,4.495,8.412c-1.655-0.053-3.215-0.508-4.577-1.265c-0.001,0.042-0.001,0.085-0.001,0.128
                                            c0,4.896,3.483,8.98,8.107,9.91c-0.848,0.229-1.741,0.354-2.663,0.354c-0.651,0-1.285-0.062-1.901-0.182
                                            c1.286,4.015,5.019,6.938,9.44,7.019c-3.459,2.712-7.815,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142
                                            c4.474,2.869,9.786,4.541,15.493,4.541c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.31
                                            C49.769,18.873,51.483,17.092,52.837,15.065z"></path>
                                    </svg>
                      </a>
                  </div>
                  <div id="linkedin">
                      <a target="_blank" href="https://fr.linkedin.com/company/hipay">
                          <svg version="1.1" id="linkedin-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                               y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path id="linkedin" fill="#FFFFFF" d="M51.326,185.85h90.011v270.872H51.326V185.85z M96.934,55.278
                                            C66.127,55.278,46,75.503,46,102.049c0,26,19.538,46.813,49.756,46.813h0.574c31.396,0,50.948-20.814,50.948-46.813
                                            C146.689,75.503,127.727,55.278,96.934,55.278z M362.339,179.487c-47.778,0-69.185,26.28-81.125,44.71V185.85h-90.038
                                            c1.192,25.411,0,270.872,0,270.872h90.038V305.448c0-8.103,0.589-16.175,2.958-21.978c6.52-16.175,21.333-32.924,46.182-32.924
                                            c32.603,0,45.623,24.852,45.623,61.248v144.926H466V301.398C466,218.199,421.598,179.487,362.339,179.487z"></path>
                                    </svg>

                      </a>
                  </div>
              </div>
          </div>
      </div>
    <div class="col-md-8 footer-wp-links">
        <?php //dynamic_sidebar('sidebar-footer'); ?>
        <?php
        if (has_nav_menu('footer')) :
            wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'footer']);
        endif;
        ?>
    </div>
  </div>
  <div class="footer-end container">
    <div class="col-md-6">
        <?php
        if ( is_page_template( 'contact.php' ) ) {
        } else {
            echo '<div class="news-links"><button class="orange-link" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsForm">'.$news_btn.'</button></div>';
        }
        ?>
    </div>
    <div class="col-md-6 attribution">
        <a class='legal-link' href="<?php echo $sitemap_link; ?>"><?php echo $sitemap; ?></a>
        <a class='legal-link' href="<?php echo $site_legal_link; ?>"><?php echo $site_legal; ?></a>
        <span>&copy; <?php // bloginfo('name'); ?>2017 - HiPay SAS</span>
        <span class="lang-btn">
             <ul>
                 <?php pll_the_languages(
                     array(
                         'show_flags'=>1,
                         'show_names'=>0,
                         'hide_current' =>1
                     )); ?>
             </ul>
        </span>
    </div>
  </div>
</footer>

<?php include "newsletter-modal.php"; ?>
