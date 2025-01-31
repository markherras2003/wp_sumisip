<?php 
    global $dynamic_featured_image;
    $author_ID = $post->post_author;
    $oncurrentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
    /* $arg = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'title' => the_search_query(), // search post title only
        'paged' => $oncurrentPage
         
    ); */

    add_filter( 'posts_where', 'title_filter', 10, 2 );
    $searching = $_GET['s']; // Change from $_GET to any absolute variable if necessary
    $arg = array(
     'post_type' => 'post',
     'title_filter' => $searching,
     'posts_per_page' => 4,
     'paged' => $oncurrentPage
    );
     $post_excerpt = new \WP_Query($arg);
    remove_filter( 'posts_where', 'title_filter', 10, 2 );

    $pagination = paginate_links( array(
        'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
        'format' => '?paged=%#%',
        'current' => $oncurrentPage,
        'total' => $post_excerpt->max_num_pages,
        'type' => 'array',
        'prev_text' => 'Previous',
        'next_text' => 'Next',
    ) );
?>
<main id="mainContent">
  <div class="posts-item" id="contentInner">
    <h1 class="search-title">Search Results for: <?php the_search_query(); ?></h1>
    <?php 
        $i=0;
        while($post_excerpt->have_posts()): $post_excerpt->the_post();  ?>
        <div class="post-item">
                     <div class="post-img"> 
                    <?php     
                    $x=0;
                    $b=0;
                    $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
                    foreach($featured_images as $featured_image) { 
                    $x++;
                        if($x===1) {?>

                        <img src="<?= $featured_image['full']; ?>" alt="Article Image">    

                    <?php   } ?>                
                    <?php }
                        if($x===0) {    
                    ?>    
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png">
                    <?php
                        }
                    $i++;?>
                    </div>
            <!-- <div class="post-details"> -->

            <div class="post-details search-content">
                <a href="<?= get_permalink();?>">
                    <h3 class="post-title"><?php the_title() ?></h3>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID));?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>

                <?php the_excerpt(); ?>

                <a href="<?= get_permalink();?>" class="button outline black">Read Story</a>
            </div>
            

            <!-- </div> -->
        </div>



    <?php  endwhile; ?>

    
    <div class="pagination-wrapper">
        <?php previous_posts_link('') ?>
        <ul class="pagination" id="page-navigation">
           <?php 
           if (count($pagination)===0) {

           }else{
           foreach ( $pagination as $key => $page_link ) : ?>
						<li class="<?php if ( strpos( $page_link, 'current' ) !== false ) { echo 'active'; } ?>"><?php echo $page_link ?></li>
           <?php endforeach;
           } ?>
        </ul>
       <?php next_posts_link('', $post_excerpt->max_num_pages) ?>
    </div>

<script type="text/javascript" charset="utf-8">
    $(window).on('load', function() {
        $('body').on('click', '#page-navigation a',  function(e) {
        e.preventDefault();
        var link = jQuery(this).attr('href');
            jQuery('#mainContent').html('');
            jQuery('#mainContent').addClass('loading');
            setTimeout(() => {
            jQuery('#mainContent').removeClass('loading');
            jQuery('#mainContent').load(link+' #contentInner'); 
            }, 500);
    });
    
    });
  </script>
 </div>
</main>