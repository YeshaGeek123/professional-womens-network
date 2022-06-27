<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->

<!-- About Us Section Start -->
<section class="about-us inner-page-sec inner-section cp-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-us-text">
                    <h1 class="h2-title wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('membership_title'); ?></h1>
                    <div class="wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                       <?php the_field('membership_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="about-img wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="back-img" style="background-image: url('<?php the_field('membership_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->



<!-- Why Join Section Start -->
<section class="directors-sec why-join-sec cp-75 zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="directors-content wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h2 class="h2-title"><?php the_field('benefits_title'); ?></h2>
                   <p><?php the_field('benefits_sub_title') ?></p>
                </div>
            </div>
            <div class="col-lg-6  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="why-join-img">
                    <img class="for-des" width="902" height="177" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/ilus-whyjoinbottom.svg" alt="ilus-whyjoinbottom">
                </div>
                <?php
                $data = get_field('benefits_points');
                $row1 = $data[0];
                $row2 = $data[1];
                $row3 = $data[2];
                $row4 = $data[3];
                $row5 = $data[4];
                ?>
                <div class="join-box white-text">
                    <h3 class="h3-title"><?php echo $row1['benefits_points_title']; ?></h3>
                    <div class="overflow-text">
                        <?php echo $row1['benefits_points_content']; ?>
                    </div>
                </div>
                <div class="join-box white-text">
                    <h3 class="h3-title"><?php echo $row2['benefits_points_title']; ?></h3>
                    <div class="overflow-text">
                        <?php echo $row2['benefits_points_content']; ?>
                    </div>
                </div>
                <?php
                ?>
            </div>

            <div class="col-lg-6  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="join-right-box">
                    <img class="for-des" width="406" height="133" src="<?php the_field('membership_benefits_top_image'); ?>" alt="ilus-whyjoin">
                    <div class="join-box white-text">
                        <h3 class="h3-title"><?php echo $row3['benefits_points_title']; ?></h3>
                        <div class="overflow-text">
                            <?php echo $row3['benefits_points_content']; ?>
                        </div>
                    </div>
                    <div class="join-box white-text">
                        <h3 class="h3-title"><?php echo $row4['benefits_points_title']; ?></h3>
                        <div class="overflow-text">
                            <?php echo $row4['benefits_points_content']; ?>
                        </div>
                    </div>
                    <div class="join-box white-text">
                        <h3 class="h3-title"><?php echo $row5['benefits_points_title']; ?></h3>
                        <div class="overflow-text">
                            <?php echo $row5['benefits_points_content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</section>

<!-- Why Join Section End -->



<!-- Team Section Start -->
<section class="team-sec join-pwn-sec zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto white-text text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h2 class="h2-title"><?php the_field('offers_main_title'); ?></h2>
                <p><?php the_field('offers_sub_title'); ?></p>
            </div>
        </div>
        <div class="team-row join-pwn-row">
            <div class="row">
                <?php
                if(have_rows('offers_plans')):
                    while(have_rows('offers_plans')): the_row();
                ?>
                    <div class="col-lg-4">
                        <div class="membership-pricing-box wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="membership-pricing-content">
                                <div class="img-box">
                                    <img width="140" height="157" src="<?php the_sub_field('offers_plan_image'); ?>" alt="ilus-regular">
                                </div>
                                <h3 class="h3-title"><?php the_sub_field('offers_plan_title'); ?></h3>
                                <?php the_sub_field('offers_plan_content'); ?>
                                <div class="pricing-text">
                                    <p><?php the_sub_field('offers_plan_name'); ?></p>
                                    <h3 class="h3-title"><?php the_sub_field('offers_plan_price'); ?></h3>
                                </div>
                                <a href="<?php the_sub_field('offers_plan_joining_link'); ?>" title="Join Today" class="sec-btn p-color">
                                    Join Today
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="join-pwn-text white-text text-center  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <?php the_field('offers_description'); ?>
                    <a href="<?php the_field('offers_dowload_link'); ?>" title="Download it" class="sec-btn">
                        Download it
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<?php get_template_part( 'template-parts/content', 'common' ); ?>