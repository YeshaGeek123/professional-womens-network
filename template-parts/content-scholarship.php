<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->

<!-- About Us Section Start -->
<section class="about-us inner-page-sec inner-section cp-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-text">
                    <h1 class="h2-title"><?php the_field('scholarship_title'); ?></h1>
                    <div class="overflow-text" data-simplebar="init">
                        <?php the_field('scholarship_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <div class="back-img" style="background-image: url('<?php the_field('scholarship_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Scholarship Section Start -->
<section class="directors-sec scholarship-sec cp-75 zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="scholarship-img">
                    <div class="back-img" style="background-image: url('<?php the_field('scholarship_uses_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="scholarship-content">
                    <h2 class="h2-title"><?php the_field('scholarship_uses_title'); ?></h2>
                    <?php the_field('scholarship_uses_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scholarship Section End -->

<!-- Requirements Section End -->
<section class="requirements-sec cp-75 zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="requirements-content">
                    <h2 class="h2-title"><?php the_field('requirements_title'); ?></h2>
                   <?php the_field('requirements_content'); ?>
                    <div class="requirements-text">
                        <?php
                        if(have_rows('requirements_lists')):
                            while(have_rows('requirements_lists')): the_row();
                        ?>
                            <p><?php the_sub_field('requirements_points'); ?></p>    
                                <?php
                                if(have_rows('requirements_sub_points')):
                                ?>
                                    <ul>
                                        <?php
                                            while(have_rows('requirements_sub_points')): the_row();
                                            $sub_points_list = get_sub_field('sub_points_list');
                                                if(!empty( $sub_points_list)):
                                        ?>
                                                    <li><?php echo $sub_points_list; ?></li>
                                        <?php
                                                endif;
                                            endwhile;
                                        ?> 
                                    </ul> 
                                <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pr-lg-0">
                <div class="requirements-box white-text">
                    <h2 class="h2-title"><?php the_field('apply_now_title'); ?></h2>
                    <ul>
                        <?php
                        if(have_rows('apply_now_steps')):
                            while(have_rows('apply_now_steps')): the_row();
                        ?>
                        <li><?php the_sub_field('steps_list'); ?></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="requirements-img">
                    <img width="426" height="359" src="<?php the_field('apply_now_image'); ?>" alt="ilus apply">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Requirements Section End -->


