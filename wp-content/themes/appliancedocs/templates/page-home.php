<?php
/*
Template Name: Homepage
*/
get_header();
?>

<!--SLIDER-->
<section id="featured" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
  <div class="container">
    <div class="row centered">
        <?php get_template_part('template-parts/content-heading'); ?>
    </div>


  </div>


</section>
<!--END-->

<br>
<br>

<!--INTRODUCTION-->
<section id="intro">
  <div class="container">
    <div class="row " id="intro-img" >
        <h2 class="title-text">Areas of Expertise</h2>
        <div class="col-sm-12">
          <div class="home-quicklinks">
            <?php get_template_part('template-parts/content-quicklinks'); ?>
          </div>
        </div>
     </div>
   </div>
</section>
<!--END-->


<!--FIRST FEATURE-->
<section id="features">
<div class="container">
    <div class="row feature-one">
      <?php get_template_part('template-parts/content-homepagevideo'); ?>
    </div>
</div>
</section>
<!--END-->

<!--HOME TESTIMONIALS SECTION -->

<section id="home-testimonials">
    <div class="container">
        <div class="row">
            <p class="header-center"><?php the_field('testimonials_section_title', 'options'); ?></p>
        </div>

        <div class="testimonial-slider">

                <?php if (have_rows('testimonials', 'options')): ?>
                   <?php while (have_rows('testimonials', 'options')): the_row(); ?>
                    <div class="testimonial-single">
                            <p class="testimonial-content"><?php the_sub_field('testimonial_content', 'options'); ?></p>
                            <p class="testimonial-author"><?php the_sub_field('testimonial_author', 'options'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>

    </div>
</section>
<!--END-->

<!--SECOND FEATURE-->
<section id="second-features">

      <?php get_template_part('template-parts/content-homepagetext'); ?>

</section>
<!--END-->

<!--FOUR SERVICES-->
<section id="services">
<div class="container">
    <div class="row">
      <?php
      $args = array(
          'posts_per_page'    => 3,
          'post_type'     => 'post',  //choose post type here
          'order' => 'DESC',
      );
      // query
      $the_query = new WP_Query( $args );

       if ( $the_query->have_posts() ) :
         while ( $the_query->have_posts() ): $the_query->the_post();?>

                 <div class="col-md-4">
                 <div class=""><div class="homepage-post ">
                 		<center><div class="icon"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive-nopad"></div></center>
                    <h4><?php the_title(); ?></h4>

                    <p><?php echo get_the_excerpt(); ?></p>
                 	</div>
                 			 <a href="<?php the_permalink(); ?>" class="orange-link">Read More >> </a>
                 </div></div>
               <?php endwhile; else : ?>
           	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
           <?php endif; ?>
      </div>
</div>
</container>
</section>
<!--END-->

<br>

<!--PROMO BACKGROUND IN CSS-->
<section id="promobg">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
</div>
    </div></div>
</container>
</section>
<!--END-->


<?php get_footer(); ?>
