<?php get_header();?>

    <div class="container pt-5 pb-5">


        <div class="row">
            <div class="col">
                <h3><?php the_title()?></h3>

                <?php if(have_posts()) : while(have_posts()) : the_post()  ?>

                    <?php the_content() ?>

                <?php endwhile; endif; ?>

            </div>
        </div>




    </div>


<?php get_footer();?>