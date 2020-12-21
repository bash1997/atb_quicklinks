<?php
/*
*
*Template Name: Link Template
*Author: Bria Saunders-Hall
*Author URL: http://bshwork.me/
*/

get_header();
?>

<main id="site-content" role="main"><!--index-->

  <section class="container" id="quicklinks">

    <?php if( have_rows('intro') ): ?>
      <?php while ( have_rows('intro') ) : the_row();
        $avatar = get_sub_field('avatar');
        $bio = get_sub_field('bio');
      ?>

      <div id="avatar" class="col-5">
        <?php if($avatar) :
          echo wp_get_attachment_image( $avatar, "thumbnail");
        endif; ?>
      </div>

      <?php if($bio) : echo
          "<div class='block-text col-md-8'>
            $bio
          </div>";
        endif; ?>
      <?php  endwhile; //end of intro?>
    <?php endif; ?>

      <?php if( have_rows('general') ): ?>
        <?php while ( have_rows('general') ) : the_row();
          $link_1 = get_sub_field('link_1');
          $link_2 = get_sub_field('link_2');
          $link_3 = get_sub_field('link_3');
          $link_4 = get_sub_field('link_4');
          $link_5 = get_sub_field('link_5');
          $link_6 = get_sub_field('link_6');
          $link_7 = get_sub_field('link_7');
          $link_8 = get_sub_field('link_8');

          $title_1 = get_sub_field('title_1');
          $title_2 = get_sub_field('title_2');
          $title_3 = get_sub_field('title_3');
          $title_4 = get_sub_field('title_4');
          $title_5 = get_sub_field('title_5');
          $title_6 = get_sub_field('title_6');
          $title_7 = get_sub_field('title_7');
          $title_8 = get_sub_field('title_8');

          $description_1 = get_sub_field('description_1');
          $description_2 = get_sub_field('description_2');
          $description_3 = get_sub_field('description_3');
          $description_4 = get_sub_field('description_4');
          $description_5 = get_sub_field('description_5');
          $description_6 = get_sub_field('description_6');
          $description_7 = get_sub_field('description_7');
          $description_8 = get_sub_field('description_8');
        ?>

        <section id="general" class="container">

          <?php if($link_1) : echo
              "<div class='box col-md-8'>
                <a href='$link_1'class='btn-link'>
                  <div class='btn-link-title'>$title_1</div>
                  <div class='btn-link-subtitle'>$description_1</div>
                </a>
              </div>";
            endif; ?>

            <?php if($link_2) : echo
                "<div class='box col-md-8'>
                  <a href='$link_2' class='btn-link'>
                    <div class='btn-link-title'>$title_2</div>
                    <div class='btn-link-subtitle'>$description_2</div>
                  </a>
                </div>";
              endif; ?>

              <?php if($link_3) : echo
                  "<div class='col-12'>
                    <div class='divider col-3' style='margin-bottom: 30px;'>
                      <span></span>
                    </div>
                  </div>
                  <div class='box col-md-8'>
                    <a href='$link_3' class='btn-link'>
                      <div class='btn-link-title'>$title_3</div>
                      <div class='btn-link-subtitle'>$description_3</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_4) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_4' class='btn-link'>
                        <div class='btn-link-title'>$title_4</div>
                        <div class='btn-link-subtitle'>$description_4</div>
                      </a>
                    </div>";
                  endif; ?>

              <?php if($link_5) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_5' class='btn-link'>
                      <div class='btn-link-title'>$title_5</div>
                      <div class='btn-link-subtitle'>$description_5</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_6) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_6' class='btn-link'>
                        <div class='btn-link-title'>$title_6</div>
                        <div class='btn-link-subtitle'>$description_6</div>
                      </a>
                    </div>";
                  endif; ?>

                <?php if($link_7) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_7'class='btn-link'>
                        <div class='btn-link-title'>$title_7</div>
                        <div class='btn-link-subtitle'>$description_7</div>
                      </a>
                    </div>";
                  endif; ?>

                <?php if($link_8) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_8' class='btn-link'>
                        <div class='btn-link-title'>$title_8</div>
                        <div class='btn-link-subtitle'>$description_8</div>
                      </a>
                    </div>";
                  endif; ?>

                  <div class="col-12">
                    <div class="divider col-3" style="margin-bottom: 15px;">
                      <span></span>
                    </div>
                  </div>

            </section>
        <?php endwhile; ?>
      <?php endif; ?> <!--general-->


        <?php if( have_rows('clients') ): ?>
          <?php while ( have_rows('clients') ) : the_row();

            $image_1 = get_sub_field('image_1');
            $image_2 = get_sub_field('image_2');
            $image_3 = get_sub_field('image_3');
            $image_4 = get_sub_field('image_4');
            $image_5 = get_sub_field('image_5');
            $image_6 = get_sub_field('image_6');
            $image_7 = get_sub_field('image_7');
            $size = "medium";

          ?>
      <div id="clients_img" class="container-lg">
          <div class="block-heading col-12">
            <h3>What My <span>Amazing</span> Clients Says About Me</h3>
          </div>

            <div id="carouselIndicators" class="carousel slide col-md-8">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <?php if($image_2) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='1'></li>";
                endif; ?>
                <?php if($image_3) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='2'></li>";
                endif; ?>
                <?php if($image_4) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='3'></li>";
                endif; ?>
                <?php if($image_5) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='4'></li>";
                endif; ?>
                <?php if($image_6) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='5'></li>";
                endif; ?>
                <?php if($image_6) : echo
                  "<li data-target='#carouselIndicators' data-slide-to='6'></li>";
                endif; ?>
              </ol>
              <div class="carousel-inner">
                <?php if($image_1) : echo
                "<div class='carousel-item active'>
                  <img class='d-block w-100' src='$image_1' alt='First slide'>
                </div>";
                endif; ?>
              <?php if($image_2) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100' src='$image_2' alt='Second slide'>
                </div>";
              endif; ?>
              <?php if($image_3) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100'src='$image_3' alt='Third slide'>
                </div>";
              endif; ?>
              <?php if($image_4) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100'src='$image_4' alt='Fourth slide'>
                </div>";
              endif; ?>
              <?php if($image_5) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100'src='$image_5' alt='Fifth slide'>
                </div>";
              endif; ?>
              <?php if($image_6) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100'src='$image_6' alt='Sixth slide'>
                </div>";
              endif; ?>
              <?php if($image_7) : echo
                "<div class='carousel-item'>
                  <img class='d-block w-100'src='$image_7' alt='Seventh slide'>
                </div>";
              endif; ?>
              </div>
              <a class='carousel-control-prev' href='#carouselIndicators' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href='#carouselIndicators' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>
            </div>


            </div><!--client images-->
          <?php endwhile; ?>
        <?php endif; ?>

    <?php if( have_rows('clients') ): ?>
      <?php while ( have_rows('clients') ) : the_row();
        $link_1 = get_sub_field('link_1');
        $link_2 = get_sub_field('link_2');
        $link_3 = get_sub_field('link_3');
        $link_4 = get_sub_field('link_4');

        $title_1 = get_sub_field('title_1');
        $title_2 = get_sub_field('title_2');
        $title_3 = get_sub_field('title_3');
        $title_4 = get_sub_field('title_4');

        $description_1 = get_sub_field('description_1');
        $description_2 = get_sub_field('description_2');
        $description_3 = get_sub_field('description_3');
        $description_4 = get_sub_field('description_4');

      ?>

      <section id="clients" class="container">

        <?php if($link_1) : echo
            "<div class='box col-md-8'>
              <a href='$link_1'class='btn-link'>
                <div class='btn-link-title'>$title_1</div>
                <div class='btn-link-subtitle'>$description_1</div>
              </a>
            </div>";
          endif; ?>

          <?php if($link_2) : echo
              "<div class='box col-md-8'>
                <a href='$link_2' class='btn-link'>
                  <div class='btn-link-title'>$title_2</div>
                  <div class='btn-link-subtitle'>$description_2</div>
                </a>
              </div>";
            endif; ?>

            <?php if($link_3) : echo
                "<div class='box col-md-8'>
                  <a href='$link_3' class='btn-link'>
                    <div class='btn-link-title'>$title_3</div>
                    <div class='btn-link-subtitle'>$description_3</div>
                  </a>
                </div>";
              endif; ?>

              <?php if($link_4) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_4' class='btn-link'>
                      <div class='btn-link-title'>$title_4</div>
                      <div class='btn-link-subtitle'>$description_4</div>
                    </a>
                  </div>";
                endif; ?>

                <div class="col-12">
                  <div class="divider col-3">
                    <span></span>
                  </div>
                </div>

          </section>
      <?php endwhile; ?>
    <?php endif; ?> <!--clients-->

      <?php if( have_rows('referrals') ): ?>
        <?php while ( have_rows('referrals') ) : the_row();
          $link_1 = get_sub_field('link_1');
          $link_2 = get_sub_field('link_2');
          $link_3 = get_sub_field('link_3');
          $link_4 = get_sub_field('link_4');
          $link_5 = get_sub_field('link_5');
          $link_6 = get_sub_field('link_6');


          $title_1 = get_sub_field('title_1');
          $title_2 = get_sub_field('title_2');
          $title_3 = get_sub_field('title_3');
          $title_4 = get_sub_field('title_4');
          $title_5 = get_sub_field('title_5');
          $title_6 = get_sub_field('title_6');


          $description_1 = get_sub_field('description_1');
          $description_2 = get_sub_field('description_2');
          $description_3 = get_sub_field('description_3');
          $description_4 = get_sub_field('description_4');
          $description_5 = get_sub_field('description_5');
          $description_6 = get_sub_field('description_6');

        ?>

        <section class="container" id="referrals">

          <div class="block-heading col-12">
            <h3>Referrals</h3>
          </div>

          <?php if($link_1) : echo
              "<div class='box col-md-8'>
                <a href='$link_1'class='btn-link'>
                  <div class='btn-link-title'>$title_1</div>
                  <div class='btn-link-subtitle'>$description_1</div>
                </a>
              </div>";
            endif; ?>

            <?php if($link_2) : echo
                "<div class='box col-md-8'>
                  <a href='$link_2' class='btn-link'>
                    <div class='btn-link-title'>$title_2</div>
                    <div class='btn-link-subtitle'>$description_2</div>
                  </a>
                </div>";
              endif; ?>

              <?php if($link_3) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_3' class='btn-link'>
                      <div class='btn-link-title'>$title_3</div>
                      <div class='btn-link-subtitle'>$description_3</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_4) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_4' class='btn-link'>
                        <div class='btn-link-title'>$title_4</div>
                        <div class='btn-link-subtitle'>$description_4</div>
                      </a>
                    </div>";
                  endif; ?>

              <?php if($link_5) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_5' class='btn-link'>
                      <div class='btn-link-title'>$title_5</div>
                      <div class='btn-link-subtitle'>$description_5</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_6) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_6' class='btn-link'>
                        <div class='btn-link-title'>$title_6</div>
                        <div class='btn-link-subtitle'>$description_6</div>
                      </a>
                    </div>";
                  endif; ?>

                  <div class="col-12">
                    <div class="divider col-3">
                      <span></span>
                    </div>
                  </div>

            </section>
        <?php endwhile; ?>
      <?php endif; ?> <!--referrals-->

      <?php if( have_rows('standout') ): ?>
        <?php while ( have_rows('standout') ) : the_row();
          $link_1 = get_sub_field('link_1');
          $link_2 = get_sub_field('link_2');
          $link_3 = get_sub_field('link_3');
          $link_4 = get_sub_field('link_4');
          $link_5 = get_sub_field('link_5');
          $link_6 = get_sub_field('link_6');


          $title_1 = get_sub_field('title_1');
          $title_2 = get_sub_field('title_2');
          $title_3 = get_sub_field('title_3');
          $title_4 = get_sub_field('title_4');
          $title_5 = get_sub_field('title_5');
          $title_6 = get_sub_field('title_6');


          $description_1 = get_sub_field('description_1');
          $description_2 = get_sub_field('description_2');
          $description_3 = get_sub_field('description_3');
          $description_4 = get_sub_field('description_4');
          $description_5 = get_sub_field('description_5');
          $description_6 = get_sub_field('description_6');

        ?>

        <section id="standout" class="container">

          <?php if($link_1) : echo
              "<div class='box col-md-8'>
                <a href='$link_1'class='btn-link'>
                  <div class='btn-link-title'>$title_1</div>
                  <div class='btn-link-subtitle'>$description_1</div>
                </a>
              </div>";
            endif; ?>

            <?php if($link_2) : echo
                "<div class='box col-md-8'>
                  <a href='$link_2' class='btn-link'>
                    <div class='btn-link-title'>$title_2</div>
                    <div class='btn-link-subtitle'>$description_2</div>
                  </a>
                </div>";
              endif; ?>

              <?php if($link_3) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_3' class='btn-link'>
                      <div class='btn-link-title'>$title_3</div>
                      <div class='btn-link-subtitle'>$description_3</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_4) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_4' class='btn-link'>
                        <div class='btn-link-title'>$title_4</div>
                        <div class='btn-link-subtitle'>$description_4</div>
                      </a>
                    </div>";
                  endif; ?>

              <?php if($link_5) : echo
                  "<div class='box col-md-8'>
                    <a href='$link_5' class='btn-link'>
                      <div class='btn-link-title'>$title_5</div>
                      <div class='btn-link-subtitle'>$description_5</div>
                    </a>
                  </div>";
                endif; ?>

                <?php if($link_6) : echo
                    "<div class='box col-md-8'>
                      <a href='$link_6' class='btn-link'>
                        <div class='btn-link-title'>$title_6</div>
                        <div class='btn-link-subtitle'>$description_6</div>
                      </a>
                    </div>";
                  endif; ?>


                  <div class="col-12">
                    <div class="divider col-3">
                      <span></span>
                    </div>
                  </div>

            </section>
        <?php endwhile; ?>
      <?php endif; ?> <!--standout-->

      <?php while ( have_posts() ) : the_post();
        $link_1 = get_field('link_1');
        $link_2 = get_field('link_2');
        $link_3 = get_field('link_3');

        $title_1 = get_field('title_1');
        $title_2 = get_field('title_2');
        $title_3 = get_field('title_3');

        $description_1 = get_field('description_1');
        $description_2 = get_field('description_2');
        $description_3 = get_field('description_3');

        $image_1 = get_field('main-image_1');
        $image_2 = get_field('main-image_2');
      ?>

      <section  id="extra" class="container"><!--extra links & img-->

        <?php if($link_1) : echo
            "<div class='box col-md-8'>
              <a href='$link_1'class='btn-link'>
                <div class='btn-link-title'>$title_1</div>
                <div class='btn-link-subtitle'>$description_1</div>
              </a>
            </div>";
          endif; ?>

          <?php if($link_2) : echo
              "<div class='box col-md-8'>
                <a href='$link_2' class='btn-link'>
                  <div class='btn-link-title'>$title_2</div>
                  <div class='btn-link-subtitle'>$description_2</div>
                </a>
              </div>";
            endif; ?>

            <?php if($link_3) : echo
                "<div class='box col-md-8'>
                  <a href='$link_3' class='btn-link'>
                    <div class='btn-link-title'>$title_3</div>
                    <div class='btn-link-subtitle'>$description_3</div>
                  </a>
                </div>";
              endif; ?>

              <?php if($image_1) : echo
                "<div id='extraCarouselIndicators' class='carousel slide col-md-8'>
                  <ol class='carousel-indicators'>
                    <li data-target='#extraCarouselIndicators' data-slide-to='0' class='active'></li>
                    <li data-target='#extraCarouselIndicators' data-slide-to='1'></li>
                  </ol>
                  <div class='carousel-inner'>
                    <div class='carousel-item active'>
                      <img class='d-block w-100'src='$image_1' alt='First slide'>
                    </div>
                    <div class='carousel-item'>
                      <img class='d-block w-100' src='$image_2' alt='Second slide'>
                    </div>
                  </div>
                  <a class='carousel-control-prev' href='#extraCarouselIndicators' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                  </a>
                  <a class='carousel-control-next' href='#extraCarouselIndicators' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                  </a>
                </div>";




                endif; ?>
              </div><!--container-lg-->

          </section><!--extra links & img-->

        <?php endwhile; ?>
      </section>
</main><!-- #site-content -->

<?php
get_footer();
