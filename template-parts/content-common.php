<!-- Gallery Section Start -->
<?php error_reporting(0); ?>
<div class="gallery-sec zi-1">
    <div class="container-fluid p-0 ">
        <div class="row gallery-slider">
            <?php
            $gallery_images = get_field('gallery_images',8);
            $cc = count($gallery_images);
            $img = array_slice($gallery_images,0, $cc,true);
            $limit = 3;
            $no_of_loop = ceil(count($gallery_images) / $limit);
            for ($i = 0; $i < $no_of_loop; $i++)
            {
               
                $start = $i * $limit;
                $gallery_image = array_slice($gallery_images, $start, $limit);
                $count = count($gallery_image);
                $image_url0 = $gallery_image[0]['url'];
                $image_url1 = $gallery_image[1]['url'];
                $image_url2 = $gallery_image[2]['url'];
                if($count % 3 == 0)
                {
                ?>
                    <div class="gallery-box-wp">
                        <div class="gallery-box">
                            <div class="big-box">
                                <a href="<?php echo $image_url0; ?>" title="<?php echo $gallery_image[0]['alt']; ?>" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $image_url0; ?>');"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                
                    <div class="gallery-box-wp">
                        <div class="gallery-box">
                            <div class="small-box">
                                <a href="<?php echo $image_url1; ?>" title="<?php echo $gallery_image[1]['alt']; ?>" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $image_url1; ?>');"></div>
                                </a>

                                <a href="<?php echo $image_url2; ?>" title="<?php echo $gallery_image[2]['alt']; ?>" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $image_url2; ?>');"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                else if($count % 2 == 0)
                {
                    $img4 = $img[4]['url'];
                    ?>
                        <div class="gallery-box-wp">
                            <div class="gallery-box">
                                <div class="big-box">
                                    <a href="<?php echo $image_url0; ?>" title="<?php echo $gallery_image[0]['alt']; ?>" data-fancybox="PWN-gallery">
                                        <div class="back-img" style="background-image: url('<?php echo $image_url0; ?>');"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="gallery-box-wp">
                            <div class="gallery-box">
                                <div class="small-box">
                                    <a href="<?php echo $image_url1; ?>" title="<?php echo $gallery_image[1]['alt']; ?>" data-fancybox="PWN-gallery">
                                        <div class="back-img" style="background-image: url('<?php echo $image_url1; ?>');"></div>
                                    </a>

                                    <a href="<?php echo $img4; ?>" title="<?php echo $img[4]['alt']; ?>" data-fancybox="PWN-gallery">
                                        <div class="back-img" style="background-image: url('<?php echo $img4; ?>');"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                }
                else
                {
                    $img5 = $img[5]['url'];
                    $img6 = $img[6]['url'];
                    ?>
                    <div class="gallery-box-wp">
                        <div class="gallery-box">
                            <div class="big-box">
                                <a href="<?php echo $image_url0; ?>" title="<?php echo $gallery_image[0]['alt']; ?> Gallery" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $image_url0; ?>');"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                
                    <div class="gallery-box-wp">
                        <div class="gallery-box">
                            <div class="small-box">
                                <a href="<?php echo $img5; ?>" title="<?php echo $img[5]['alt']; ?>" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $img5;  ?>');"></div>
                                </a>

                                <a href="<?php echo $img6; ?>" title="<?php echo $img[6]['alt']; ?>" data-fancybox="PWN-gallery">
                                    <div class="back-img" style="background-image: url('<?php echo $img6;  ?>');"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                }
                
            }
            ?>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Gallery Section End -->



<!-- Testimonials Section Start -->

<div class="testimonials-sec zi-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h2-title  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('testimonials_title',8); ?></h2>
            </div>
            <div class="col-lg-10 m-auto">
                <div class="row testimonials-slider">
                    <?php
                    $testimoniallist = get_posts(array(
                        'post_type' => 'testimonials',
                        'post_status' => 'publish',
                        'order'          => 'ASC',
                    ));
                    if ($testimoniallist) :
                        foreach ($testimoniallist as $testimonial) :
                    ?>
                        <div class="testimonials-bg-box">
                            <div class="testimonials-box">
                                <div class="overflow-text" data-simplebar="init">
                                    <p><?php echo $testimonial->post_content; ?></p>
                                </div>
                                <h4 class="h4-title"><?php echo $testimonial->post_title; ?></h3>
                            </div>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <div class="testimonials-img wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <img width="785" height="264" src="<?php the_field('testimonials_images',8); ?>" alt="ilus-testimonials">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section End -->

<!-- Newsletter Section Start -->
<section class="newsletter-sec zi-1">
    <div class="container">
        <div class="newsletter-row">
            <div class="row">
                <div class="col-lg-7">
                    <div class="newsletter-content white-text">
                        <h2 class="h2-title wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('newsletter_title',8); ?></h2>
                        <a href="javascript:void(0);" title="Sign Up" class="sec-btn wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"> Sign Up </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="newsletter-img  wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="back-img for-des" style="background-image: url('<?php the_field('newsletter_image',8); ?>');"></div>
                        <img width="766" height="474" class="for-mob" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/ilus-newsletter-mob.svg" alt="ilus-newsletter-mob">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->