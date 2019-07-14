<?php get_header(); ?> 


    <div class="container">
        <div class="row">
            <div class="twelve columns"></div>
                <?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post();?>
                            <div class="twelve columns"></div>
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php the_except(); ?></p>
                            <a href="<?php the_permalink();?>"></a>
                    <?php    }
                    }
                ?>
        </div>
    </div>

    

<?php get_footer(); ?> 