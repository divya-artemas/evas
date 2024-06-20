<?php 
/* Template name: Global Presence */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
      <!-- Banner-section-Start-->      

    <div class="banner" style="background:linear-gradient(270deg, rgba(41,82,143,0.07326680672268904) 0%, rgba(41,82,143,0.7931547619047619) 60%, rgba(41,82,143,0.9220063025210083) 70%, rgba(41,82,143,1) 100%), url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
          <div class="banner-text" data-aos="fade-in" data-aos-duration="1000"  data-aos-delay="100">
              <h1><?php the_title();?></h1>
              <?php echo get_the_content();?>      
          </div>
      </div>
      <!-- Banner-section-End-->

      <div class="icv-block">
        <div class="container">
          <div class="flex">
            <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
        <img src="<?php echo get_field('logo_image');?>" alt="">
        <div class="logo-address">
          <strong><?php echo get_field('logo_address');?></strong>
        </div>
        <div class="logo-links">
          <ul>
            <li>
              <a href="#">T: <?php echo get_field('l_telephone');?></a>
              <a href="#"> F:<?php echo get_field('l_fax');?></a>
            </li>
            <li>
              <a href="#">E: <?php echo get_field('l_email');?></a>
              <a href="#"> W: <?php echo get_field('l_website');?></a>
            </li>
          </ul>
        </div>
            </div>
            <div class="right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <?php echo get_field('l_content');?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="full-width" style="background: url(<?php echo get_field('ab_background_image');?>) no-repeat center center/cover;">
        <div class="container">
          <div class="full-width-content list" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <h3><?php echo get_field('ab_heading');?></h3>
            <?php echo get_field('ab_content');?>         
          </div>
        </div>
      </div>
    
     
     <!-- insight-section-start-->
     <div class="insights">
      <div class="container">
      <span data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('in_title',8);?></span>
      <div class="news-letter"> 
      <div class="flex" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
        <div class="left">
         <h2><?php echo get_field('in_heading',8);?></h2>
        </div>
        <div class="right">
          <b>Stay current with our latest insights</b>
          <input type="email" placeholder="Enter your email id">
          <img src="<?php bloginfo("template_url")?>/img/arrow.png" alt="">
        </div>
      </div>
      </div>
      <div class="insight-list flex">
      <?php
             $args = array(         
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'post_type' => 'blogs'	
                
                );
            
            $blogs_query = new WP_Query( $args ); ?>
      <?php                    
                
                    if( $blogs_query->have_posts() ) {      
                      $i=1;                                                 
                        while ($blogs_query->have_posts()) : $blogs_query->the_post(); 
                            $btitle          =   get_the_title(); 
                            $bimage          =   get_field('bl_thumbnail_image');  
                            
                            // $nimage          =   wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 
                            // $nimaged         =   $nimage[0]; 
                                                      
                        $bpermalink      =   get_the_permalink();                             
                ?>
 <div class="insight-set" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
  <img src="<?php echo $bimage;?>" alt="">
  <p><?php echo $btitle;?></p>
  <a href="<?php echo $bpermlaink;?>" class="btn line black">Learn more</a>
 </div> 
 <?php
 
                    wp_reset_query();
                    wp_reset_postdata();
                    $i++; endwhile;    
                    }
                ?> 

 
      </div>
    </div>
     </div>
     <!-- insight-section-end-->

  <?php endwhile; endif;?> 
  <?php get_footer();?>