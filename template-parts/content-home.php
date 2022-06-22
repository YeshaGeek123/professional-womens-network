<!-- Main Banner Section Start -->

<section class="main-banner">

    <div class="back-img" style="background-image: url('<?php the_field('banner_image'); ?>');"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="banner-content text-center">

                    <h1 class="h1-title">

                        <?php the_field('banner_slogan'); ?>

                    </h1>

                </div>

            </div>

        </div>

    </div>

    <div class="banner-btn-sec">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="banner-btn">

                        <a href="javascript:void(0);" title=" Let’s Connect " class="sec-btn">Let’s Connect</a>

                        <a href="javascript:void(0);" title=" Join Us " class="sec-btn">Join Us</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Main Banner Section End -->



<!-- About Us Section Start -->



<section class="about-us">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="about-img">

                    <div class="back-img" style="background-image: url('<?php the_field('about_image'); ?>');"></div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="about-us-text">

                    <h2 class="h2-title"><?php the_field('about_title'); ?></h2>

                    <div class="overflow-text" data-simplebar="init">

                        <?php the_field('about_content'); ?>

                    </div>

                    <a href="<?php the_field('about_page_link'); ?>" title="<?php the_field('about_title'); ?>, Learn More " class="sec-btn">Learn More</a>



                </div>

            </div>

        </div>

    </div>

</section>

<!-- About Us Section End -->



<!-- Membership Section Start -->

<section class="membership-sec zi-1">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-12 text-center">

                <h2 class="h2-title"><?php the_field('membership_main_title'); ?></h2>

            </div>

            <?php
            if(have_rows('membership_details')):
                while(have_rows('membership_details')): the_row();
            ?>

            <div class="col-lg-4">

                <div class="membership-box white-text">

                    <div class="membership-box-content">

                        <div class="membership-img">

                            <img width="171" height="201" src="<?php the_sub_field('membership_details_image'); ?>" alt="ilus-membership">

                        </div>

                        <h3 class="h3-title"><?php the_sub_field('membership_details_title'); ?></h3>

                        <div class="overflow-text" data-simplebar="init">

                            <?php the_sub_field('membership_details_content'); ?>

                        </div>

                        <a href="<?php the_sub_field('membership_details_page_link'); ?>" class="learn-more" title="<?php the_sub_field('membership_details_title'); ?>, Learn More">Learn More</a>

                    </div>

                </div>

            </div>

            <?php
                endwhile;
            endif;
            ?>

        </div>

    </div>

</section>

<!-- Membership Section End -->

<?php get_template_part( 'template-parts/content', 'common' ); ?>