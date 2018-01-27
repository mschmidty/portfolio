
<?php
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 4

  );
  $the_query = new WP_Query($args);
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      ?>
      <div class="work-example">
        <a href=" <?php echo get_permalink(); ?> ">
          <?php the_post_thumbnail(); ?>
          <div class="work-type-icons">
            <div class="project-info">
              <ul>
                <?php

                // check if the repeater field has rows of data
                if( have_rows('icons') ):

                 	// loop through the rows of data
                    while ( have_rows('icons') ) : the_row();

                      ?>
                      <li>
                        <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
                          <use xlink:href="#<?php echo the_sub_field('work_icons');  ?>"></use>
                        </svg>
                      </li>
                      <?php

                    endwhile;

                else :

                    // no rows found

                endif;

                ?>

              </ul>
              <h3> <?php echo the_title(); ?> </h3>
              <p>  <?php echo the_content(); ?></p>
            </div>

          </div>
        </a>
      </div>




      <?php

    }
    /* Restore original Post Data */
    wp_reset_postdata();
  } else {
    // no posts found
  }
 ?>
