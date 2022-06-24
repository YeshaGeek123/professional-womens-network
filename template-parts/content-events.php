<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->



<!-- Event Page Section Start -->
<section class="event-page-sec inner-page-sec inner-section cp-75 zi-1">
    <div class="event-sticky-img">
        <img width="559" height="946" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/ilus-news.svg" alt="ilus-news">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-us-text text-center">
                    <h1 class="h2-title">News and Events</h1>
                    <div class="overflow-text" data-simplebar="init">
                        <p>Visit our dedicated blog page regularly to keep up with the latest news and events organized by the Professional Women’s Network.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="event-row">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="search-row">
                        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                            <input type="text" class="form-input" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search..."/>
                            <input type="hidden" name="post_type" value="events" /> 
                            <button type="submit" alt="Search" value="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.006" height="18.006" viewBox="0 0 18.006 18.006">
                                    <path d="M20.71,19.29l-3.4-3.39A7.92,7.92,0,0,0,19,11a8,8,0,1,0-8,8,7.92,7.92,0,0,0,4.9-1.69l3.39,3.4a1,1,0,1,0,1.42-1.42ZM5,11a6,6,0,1,1,6,6,6,6,0,0,1-6-6Z" transform="translate(-3 -3)" fill="#fff"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <?php

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type'=>'events', // Your post type name
                        's' => get_search_query(),
                        'order' => 'ASC',
                        'paged' => $paged,
                    );
                    $loop = new WP_Query( $args );
                    
                    if ( $loop->have_posts() ) {
                        $i=0;
                        $loop_post = $loop->posts;
                        $loop_post10 = $loop_post[9];
                        // echo '<pre>'; print_r( $loop_post10 ); echo '</pre>';
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $post_image = get_the_post_thumbnail_url();
                        if( ($i != 8) && ($i != 9) )
                        {
                            if(isset($post_image) && !empty($post_image))
                            {
                                ?>
                                    <div class="event-box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 pr-lg-0">
                                                <div class="event-img">
                                                    <div class="back-img" style="background-image: url('<?php echo $post_image; ?>');"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="event-content">
                                                    <h4 class="h4-title">
                                                    <?php the_title(); ?>
                                                    </h4>
                                                    <div class="event-text">
                                                        <?php the_content(); ?>
                                                    </div>
                                                    <a href="javascript:void(0);" class="learn-more read-more" title=", Read More">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="event-box event-text-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="event-content">
                                                <h4 class="h4-title">
                                                    <?php the_title(); ?>
                                                </h4>
                                                <div class="event-text">
                                                    <?php the_content(); ?>
                                                </div>
                                                <a href="javascript:void(0);" class="learn-more read-more" title=", Read More">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            // echo '<pre>'; print_r( count($loop_post10) ); echo '</pre>';
                            if(isset($loop_post10) && !empty($loop_post10)) { ?>
                                <div class="event-row">
                                    <div class="row align-items-center">
                
                                        <div class="col-lg-6">
                                        <div class="event-box event-text-box">
                                                <div class="event-content">
                                                    <h4 class="h4-title">
                                                        <?php the_title() ?>
                                                    </h4>
                                                    <div class="event-text">
                                                        <?php the_content(); ?>
                                                    </div>
                                                    <a href="javascript:void(0);" class="learn-more read-more" title=", Read More">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="event-box event-text-box">
                                                <div class="event-content">
                                                    <h4 class="h4-title">
                                                        Vivamus facilisis libero sollicitudin fermentum dignissim. Integer eu massa vel odio sodales tempor sit amet ultricies elit
                                                    </h4>
                                                    <div class="event-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor ligula, ullamcorper eu vulputate ac, ornare vitae sapien. Proin a massa augue. Proin ullamcorper felis sapien, ultrices rutrum odio pretium sed. Sed gravida tempor elit id malesuada. Vivamus facilisis libero sollicitudin fermentum dignissim. Integer eu massa vel odio sodales tempor sit amet ultricies elit. Vestibulum ante ipsum primis in faucibus…</p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="learn-more read-more" title=", Read More">Read More</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            <?php
                            }else{
                                ?>
                                <div class="event-box event-text-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="event-content">
                                                <h4 class="h4-title">
                                                    <?php the_title(); ?>
                                                </h4>
                                                <div class="event-text">
                                                    <?php the_content(); ?>
                                                </div>
                                                <a href="javascript:void(0);" class="learn-more read-more" title=", Read More">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        $i++;
                        endwhile;
                        $total_pages = $loop->max_num_pages;
                        if ($total_pages > 1){

                            $current_page = max(1, get_query_var('paged'));
                            $big = 999999999;
                            echo paginate_links(array(
                                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                'format'  	=> '?page/%#%/',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => __('« prev'),
                                'next_text'    => __('next »'),
                            ));
                        }    
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
$args = array(
    'numberposts' => 10,
    'post_type'   => 'book'
  );
   
  $latest_books = get_posts( $args );

?>
</section>




<!-- Event Page Section End -->



 


