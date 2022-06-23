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
                            endwhile;
                        endif;
                        ?>
                       <!-- <p>Must be a female resident of Iowa.</p>
                       <p>Must be a student who will be attending classes, either full or part-time, during the academic year.</p>
                       <p>Must be working towards a vocational certification, associate degree, or first bachelor’s degree at one of the educational institutions listed below.</p>
                       <ul>
                           <li>Coe College</li>
                           <li>Mount Mercy University</li>
                           <li>Cornell College</li>
                           <li>University of Iowa</li>
                           <li>Purdue University Global</li>
                           <li>University of Northern Iowa</li>
                           <li>Hawkeye Community College</li>
                           <li>University of Dubuque (Cedar Rapids location)</li>
                           <li>Kirkwood Community College</li>
                           <li>Mercy/St. Luke’s School of Radiologic Tech</li>
                           <li>St. Luke’s Medical Technology Program</li>
                           <li>A collegiate institution not listed above but located within a 60-mile radius of Linn County, Iowa.</li>
                       </ul>
                       <p>Special consideration will be given to non-traditional students, defined as those at least 21 years old upon application deadline who have or will return to school after an absence of at least 3 years.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pr-lg-0">
                <div class="requirements-box white-text">
                    <h2 class="h2-title">Apply Now</h2>
                    <ul>
                        <li>You can <a href="javascript:void(0);" title="download the application form here.">download the application form here.</a></li>
                        <li>Fill it out, and <a href="mailto:scholarship@pwn.org" title="download the application form here.">email it to scholarship@pwn.org</a></li>
                        <li>Applications for any given school year must be submitted by July 30 of the same calendar year.</li>
                        <li>For more information on applying for or donating to the PWN Scholarship Foundation, either <a href="javascript:void(0);" title="contact us directly">contact us directly</a> or <a href="javascript:void(0);" title="consult our FAQ page.">consult our FAQ page.</a></li>
                    </ul>
                </div>
                <div class="requirements-img">
                    <img width="426" height="359" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/ilus-apply.svg" alt="ilus apply">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Requirements Section End -->


