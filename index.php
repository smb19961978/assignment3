<?php get_header(); ?>

<div class="container">
    
    <div class="nine columns">
    
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();?>
                    
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <p><?php the_post_thumbnail('medium'); ?></p>
                        <p><?php echo "Published: " .get_the_date();?> </p>
                        <p><?php echo "Article written by: " . get_the_author(); ?></p>
                   
                    
      <?php }//ends while loop
    }//ends if statement
?>
       </div>
         <div class="three columns">
                <?php get_sidebar('sidebar'); ?>
        </div>   
    
</div>

<?php get_footer(); ?>