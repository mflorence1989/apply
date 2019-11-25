<?php
  // check if the repeater field has rows of data
  if( have_rows('quicklink') ):
    // loop through the rows of data
      while ( have_rows('quicklink') ) : the_row();
      $link = get_sub_field('link');
      if( $link ):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="quicklink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
      <?php endif;
      ?>
        <?php
          // display a sub field value
          $image = get_sub_field('ql_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php
           endif;
           ?>

           <p class="ql-title"><?php echo esc_html($link_title); ?></p>
         </a>

          <?php


      endwhile;

  else :

      // no rows found

  endif;

  ?>
