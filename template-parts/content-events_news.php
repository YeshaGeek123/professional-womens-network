<?php error_reporting(0); ?>
<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->



<!-- Event Page Section Start -->
<section class="event-page-sec inner-page-sec inner-section cp-75 zi-1">
    <div class="event-sticky-img">
        <img width="559" height="946" src="<?php the_field('news_event_image',18); ?>" alt="ilus-news">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-us-text text-center">
                    <h1 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('news_and_events_title',18); ?></h1>
                    <div class="overflow-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                       <?php the_field('news_and_events_content',18); ?>
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
                                    <path d="M20.71,19.29l-3.4-3.39A7.92,7.92,0,0,0,19,11a8,8,0,1,0-8,8,7.92,7.92,0,0,0,4.9-1.69l3.39,3.4a1,1,0,1,0,1.42-1.42ZM5,11a6,6,0,1,1,6,6,6,6,0,0,1-6-6Z" transform="translate(-3 -3)" fill="var(--white-color)"/>
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
                        $loop_post9 = $loop->posts[8];
                        $loop_post10 = $loop_post[9];
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
                                                    <a href="<?php the_permalink(); ?>" class="learn-more read-more" title=" <?php the_title(); ?>, Read More">Read More</a>
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
                                                <a href="<?php the_permalink(); ?>" class="learn-more read-more" title=" <?php the_title(); ?>, Read More">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            if(isset($loop_post10) && !empty($loop_post10)) 
                            { ?>
                                <div class="event-row">
                                    <div class="row align-items-center">
                                        
                                        <div class="col-lg-6">
                                            <div class="event-box event-text-box">
                                                <div class="event-content">
                                                    <h4 class="h4-title">
                                                        <?php echo $loop_post9->post_title; ?>
                                                    </h4>
                                                    <div class="event-text">
                                                        <p><?php echo $loop_post9->post_content; ?></p>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" class="learn-more read-more" title="<?php echo $loop_post9->post_title; ?>, Read More">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="event-box event-text-box">
                                                <div class="event-content">
                                                    <h4 class="h4-title">
                                                        <?php echo $loop_post10->post_title; ?>
                                                    </h4>
                                                    <div class="event-text">
                                                        <p><?php echo $loop_post10->post_content; ?></p>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" class="learn-more read-more" title="<?php echo $loop_post10->post_title; ?>, Read More">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                break;
                                ?>
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
                                                <a href="<?php the_permalink(); ?>" class="learn-more read-more" title="<?php the_title(); ?> , Read More">Read More</a>
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
                            $links = paginate_links(array(
                                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                'format'  	=> '?page/%#%/',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_next' => false,
                                'type' => 'array'
                            ));
                           
                        } 

                        if ( $links ) :

                            echo '<ul class="page-numbers">';
                            $next_pr = '<span><svg xmlns="http://www.w3.org/2000/svg" width="15.923" height="13.934" viewBox="0 0 15.923 13.934">
                            <path d="M18.928,12.962H7.125L10.737,17.3A1,1,0,0,1,9.2,18.574L4.229,12.6a1.184,1.184,0,0,1-.09-.149c0-.05-.05-.08-.07-.129a.956.956,0,0,1,0-.717c0-.05.05-.08.07-.129a1.184,1.184,0,0,1,.09-.149L9.2,5.358a1,1,0,1,1,1.533,1.274L7.125,10.971h11.8a1,1,0,0,1,0,1.99Z" transform="translate(-4 -5)" fill="#fff"/>
                          </svg></span>';
                                echo '<li class="prev-list-item">';
                            if ( $prev_posts_link = get_previous_posts_link($next_pr) ) :
                                echo $prev_posts_link;						        
                            endif;
                                echo '</li>';
    
                            echo '<li>';
                                echo join( '</li><li>', $links );
                            echo '</li>';
                            $link_pr = '<span><svg xmlns="http://www.w3.org/2000/svg" width="15.923" height="13.934" viewBox="0 0 15.923 13.934">
                            <path d="M5,12.962H16.8L13.186,17.3a1,1,0,0,0,1.533,1.274L19.694,12.6a1.184,1.184,0,0,0,.09-.149c0-.05.05-.08.07-.129a.956.956,0,0,0,0-.717c0-.05-.05-.08-.07-.129a1.184,1.184,0,0,0-.09-.149L14.718,5.358a1,1,0,1,0-1.533,1.274L16.8,10.971H5a1,1,0,0,0,0,1.99Z" transform="translate(-4 -5)" fill="var(--primary-color)"/>
                          </svg></span>';
                                echo '<li class="next-list-item">';
                        
                            if ( $next_posts_link = get_next_posts_link( $link_pr) ) :
                                echo $next_posts_link;			
                                                    
                            endif;
                                echo '</li>';
                            echo '</ul>';
                        endif;
                        echo "</div></div>";
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Event Page Section End -->



 


