<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->

<!-- About Us Section Start -->
<section class="about-us inner-section cp-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="back-img" style="background-image: url('<?php the_field('about_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-text">
                    <h1 class="h2-title wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('about_title'); ?></h1>
                    <div class="overflow-text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s" data-simplebar="init">
                        <?php the_field('about_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->



<!-- Board of Directors Section Start -->
<section class="directors-sec cp-75 zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="directors-content">
                    <h2 class="h2-title wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('board_title'); ?></h2>
                    <div class="overflow-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" data-simplebar="init">
                        <?php the_field('board_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="directors-img  wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <img width="491" height="547" src="<?php the_field('board_image'); ?>" alt="ilus-boardofdirectors">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Board of Directors Section End -->



<!-- Team Section Start -->
<section class="team-sec white-text cp-75 zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('teamlist_title'); ?></h2>
            </div>
        </div>
        <div class="team-row">
            <div class="row">
                <?php
                if(have_rows('members_list')):
                    while(have_rows('members_list')): the_row();
                    $designation = get_sub_field('members_designation');
                    $year = get_sub_field('members_year');
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="back-img" style="background-image: url('<?php the_sub_field('members_image'); ?>');"></div>
                            <h3 class="h3-title"><?php the_sub_field('members_name'); ?></h3>
                            <?php
                            if((!empty($designation)) || (!empty($year)) ):
                            ?>
                            <p> <?php echo $designation; ?> <?php echo $year; ?></p>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->



<?php get_template_part( 'template-parts/content', 'common' ); ?>