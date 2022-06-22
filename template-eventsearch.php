<?php
/**
 * Template Name: EventsSearch
 */
get_header();
global $wp_query;


?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
$searchData = "";
$_GET['title']="";
if($_GET['title']!= "")
{
    $searchData = $_GET['title'];
}
?>
<div class="container">
    <form method="get">
        <input type="text" placeholder="Search" name="title">
        <input type="submit" value="Submit">
    </form>
</div>

<div class="event-box">
    <?php
    $wpevent = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        's' => $searchData,
        'posts_per_page' => -1,
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
    ?>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php get_footer(); ?>