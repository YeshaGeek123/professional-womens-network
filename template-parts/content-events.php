<!-- Inner Banner Section Start -->
<div class="inner-banner"></div>
<!-- Inner Banner Section End -->


<?php

$searchData = "";
if($_GET['s']!= "")
{
    $searchData = $_GET['s'];
}

?>

<div class="container">   
    <h3>Search Events</h3>
    <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
    <input type="text" value="<?php if(isset($searchData)){ echo $searchData; }?>" name="s" placeholder="Search Events"/>
    <input type="hidden" name="post_type" value="events" /> 
    <input type="submit" alt="Search" value="Search" />
  </form>
 
 </div> 

 

<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$wpevent = array(
    'post_type' => 'events',
    'post_status' => 'publish',
    's' => $searchData,
    'posts_per_page' => 1,
    'paged' => $paged,
   
);

$eventquery = new WP_Query($wpevent);
while($eventquery->have_posts())
{
    $eventquery->the_post();
    ?>
    <div class="events-items">
        <p> <?php the_title();  ?></p>
        <p><?php the_content(); ?></p>
    </div>
     <?php
}

$big = 999999999;
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $eventquery->max_num_pages
) );



?>
