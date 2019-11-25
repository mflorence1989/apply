<?php
/*
Template Name: Homepage
*/
get_header();
?>

<!--SLIDER-->
<section id="featured" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
<!-- Add Smart Slider 3 for Slider Here -->
<div class="container">
  <div class="row feature-one">
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
    <div class="row">
        <h2 class="title-text">Introduction Title</h2>
        <div class="col-sm-12">
          <div class="quicklinks">
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
<!--TWO COLUMNS WITH PHOTO-->
<section id="twocolumns">
<div class="container">
    <div class="row">

        <div class="col-md-5">
<img class="img-responsive" src="/wp-content/themes/appliancedocs/img/medblock.jpg"/>
</div>

        <div class="col-md-7">
<div class="title-text-lg">Large Heading</div>
<div class="intro-text">
Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that sh*t? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that sh*t.
<br>
Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.</div>
</div>
    </div>
</div>
</div>
<!--END-->

<!--FULL WIDTH PARAGRAPH-->
<section id="smparagraph">
<div class="container">
<div class="intro-text">
Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.</div>
<hr>
</div>
</container>
</section>
<!--END-->

<!--FOUR SERVICES-->
<section id="services">
<div class="container">
    <div class="row">

<div class="col-sm-3">
<div class="box"><div class="box-lightgray aligncenter">
		<h4>REPAIR & REPLACE</h4>
		<center><div class="icon"><img src="/wp-content/themes/appliancedocs/img/smblock.jpg" class="img-responsive"></div></center>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.</p>
	</div>
			 <div class="box-bottom"><a href="#">Learn more</a></div>
</div></div>


       <div class="col-sm-3">
<div class="box"><div class="box-lightgray aligncenter">
		<h4>REPAIR & REPLACE</h4>
		<center><div class="icon"><img src="/wp-content/themes/appliancedocs/img/smblock.jpg" class="img-responsive"> <!-- <i class="fa fa-desktop fa-3x"></i> --> </div></center>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.</p>
	</div>
			 <div class="box-bottom"><a href="#">Learn more</a></div>
</div>
</div>

<div class="col-sm-3">
<div class="box"><div class="box-lightgray aligncenter">
		<h4>REPAIR & REPLACE</h4>
		<center><div class="icon"><img src="/wp-content/themes/appliancedocs/img/smblock.jpg" class="img-responsive"> </div></center>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.</p>
	</div>
			 <div class="box-bottom"><a href="#">Learn more</a></div>
</div>
</div>

<div class="col-sm-3">
<div class="box"><div class="box-lightgray aligncenter">
		<h4>REPAIR & REPLACE</h4>
		<center><div class="icon"><img src="/wp-content/themes/appliancedocs/img/smblock.jpg" class="img-responsive"></div></center>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.</p>
	</div>
			 <div class="box-bottom"><a href="#">Learn more</a></div>
</div>
</div>

</div>
<hr>
</div>
</container>
</section>
<!--END-->

<br>

<!--PARAGRAPH OF CONTENT-->
<section id="paragraph">
<div class="container">
    <div class="row">
        <div class="col-sm-12 title-text-lg">MORE SEO CONTENT HERE</div>
        <div class="col-sm-12"><div class="intro-text">
<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>

<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
</div>
    </div>
</div>
</div>
</container>
</section>
<!--END-->

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
