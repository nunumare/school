<?php
get_header();
if(have_posts()) :

    ?>

    <h2><?php

        if(is_category()){
            echo 'This is a: ';
            single_cat_title();
            echo ' category';

        }elseif(is_author()){
            the_post();
            echo 'Author Archives ' . get_the_author();
            rewind_posts();
            
        } elseif(is_day()){
            echo 'Daily Archives: ' . get_the_date();

        }elseif (is_month()){
            echo 'Month Archives: ' . get_the_date('F Y');
        }elseif (is_year()){
            echo 'Yearly Archives: ' . get_the_date('Y');
        }else {
            echo 'Archives: ';
        }
    ?></h2>

    <?php
    while(have_posts()): the_post(); 
    get_template_part('content', get_post_format());

          
     endwhile;
else:
    echo '<p>No content found</p>';

    endif;
get_footer();


?>