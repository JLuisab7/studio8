<?php
/*
	Template Name: Contacto 
*/
?>

<?php get_header() ?>

  <div class="main inner-content">

    <div class="full-content">

      <div class="row cf" style="background-color: #fff;background-size: auto;"><div class="wrap"> 
<div class="shortcode_text_block" style="background: transparent;width:70%;text-align: center;"><p class="subtitle" style="color: #8c8c8c;"><?php the_title(); ?></p><div class="sep" style="border-color: #d7d7d7;"></div><h3 class="title" style="">Reach us for any questions you might have</h3><p class="lead" style="color:;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis facere blanditiis iusto, repudiandae voluptate ipsam nisi ducimus enim nemo porro laboriosam minus ipsum, perspiciatis quod quam, a veritatis autem.</p></div>
 </div></div>
<div class="row cf" style="background-color: #fff;background-size: auto;padding: 72px 0;"><div class="wrap"> 
<div class="one_half " style=""> 
<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>		
<?php endif ?>
 </div>
<div class="one_half last " style="">            

           <?php dynamic_sidebar( 'sidebar-1' ); ?>
 </div><div class="cf"></div>
 </div></div>

    
  </div>

</div>
<?php get_footer(); ?>