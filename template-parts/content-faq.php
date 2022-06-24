<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->

<!-- FAQ Section Start -->
<section class="faq-sec inner-page-sec inner-section cp-75 zi-1">
    <div class="faq-shapes for-des">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="about-us-text text-center">
                    <h1 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('faq_title'); ?></h1>
                </div>
                <div class="faq-img wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <img  width="902" height="177" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/ilus-whyjoinbottom.svg" alt="ilus-whyjoinbottom">
                </div>
                <div class="faq-row accordion">
                    <?php
                    if(have_rows('faq_list')):
                        $faq_counter = 1;
                        while(have_rows('faq_list')): the_row();
                    ?>
                    <div class="faq-box wow fadeup-animation <?php if($faq_counter == 1){ echo 'active-faq'; } ?>" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h3 class="faq-title">
                            <?php the_sub_field('faq_question'); ?>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z" transform="translate(-4 -4)"/>
                                </svg>
                            </span>
                        </h3>
                        <div class="faq-content">
                           <?php the_sub_field('faq_answer'); ?>
                        </div>
                    </div>
                    <?php
                        $faq_counter++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->