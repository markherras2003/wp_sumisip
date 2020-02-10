<?php 
    global $post;
    $author_ID = $post->post_author;
?>
    
    <div class="posts-item">

    <?php 
        $i=0;
        while( have_posts() ) :  ?>
        <?php 
        the_post(); ?>
        <div class="post-item">
            <div class="post-img">
            <?php
                if( has_post_thumbnail()) {
                    if ($i+1 === 1) {

               
                    ?>

            <div class="post-details">
            <div class="post-title">
                <a href="<?= get_permalink();?>">
                    <h3 class="post-title"><?php the_title() ?></h3>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID)); ?><?php //get_user_meta($author_ID)['first_name'][0]?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>
            </div>
                    
            <?php } ?>
                    
                    
                  <?=  ( ($i+1) === 1 )? the_post_thumbnail('',array('class'=> 'photo-effect')): the_post_thumbnail()?>
            <?php } else {
                    ?>
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/no-available.png" class="photo-effect">
                    <?php
                }
                $i++;
            ?>
            </div>

            <?php if ($i > 1) { ?>
        <div class="post-details">
            <div class="post-title">
                <a href="<?= get_permalink();?>">
                    <h3 class="post-title"><?php the_title() ?></h3>
                </a>
                <div class="post-etc">
                    <span><?= strtoupper(get_author_role($author_ID)); ?><?php //get_user_meta($author_ID)['first_name'][0]?></span>
                    <span><?= get_the_date(); ?></span>
                    <span><?= get_the_category()[0]->name ?></span>
                </div>
        </div>

        <?php } ?>

            <p class="post-content">
                <?=  the_excerpt(); ?>
                <a href="<?= get_permalink();?>" class="button outline black">Read Story</a>
            </p>

        </div>

    </div>

    <?php  endwhile; ?>

<div class="pagination">
    <a href="#" class="previous-pagination">Previous</a>
    <div class="numeric-pagination">
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
    </div>
    <a href="#" class="next-pagination">Next</a>
</div>
</div>
