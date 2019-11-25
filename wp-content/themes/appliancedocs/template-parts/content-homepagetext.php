<div class="col-sm-6 feature-left feature-img">
  <?php
  $image = get_field('second_feature_image');
  if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
</div>
<div class="col-sm-6 feature-right">
  <?php the_field('second_feature_text'); ?>
</div>
