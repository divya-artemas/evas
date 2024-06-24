<?php 
/* Template name: Service */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

  <!-- insight-section-start-->
  <div class="top-gap">
    <div class="service-page">
      <div class="container">
        <div class="services-list" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"> 
           <h2><?php echo get_field('banner_heading');?></h2>
        </div>    
      </div>
    </div>
  </div>

  <div class="service-list">
    <div class="container">
        <?php
              // Get list of all taxonomy terms  -- In simple categories title
              $args = array(
                          'taxonomy' => 'service_categories',
                          'orderby' => 'name',
                          'order'   => 'ASC'
                      );
              $cats = get_categories($args);
              // For every Terms of custom taxonomy get their posts by term_id
              foreach($cats as $cat) {
          ?>      
      <div class="service-list-sec">              
        
      <h3 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"> <?php echo $cat->name; ?></h3>
              <?php
                // Query Arguments
                $args = array(
                    'post_type' => 'services', // the post type
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'service_categories', // the custom vocabulary
                            'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                            'terms'    => $cat->term_id,      // provide the term slugs
                        ),
                    ),
                );
                $the_query = new WP_Query( $args );                
                if ( $the_query->have_posts() ) {
              ?>
              <ul>
                  <?php
                    $i=1;
                    while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                        $stitle     =  get_the_title();
                        $spermalink =  get_permalink();
                    ?>
                   <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
                    <a href="<?php echo $spermalink;?>"><?php echo $stitle;?></a>
                    </li>
                  <?php $i++; } ?>               
              </ul>
              <?php 
                } else {
                    // no posts found
                }
                wp_reset_postdata(); // reset global $post;
              ?>  
            </div>
            <?php } ?>            
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
                            $bpermalink      =   get_the_permalink();                             
            ?>
 <div class="insight-set" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
  <img src="<?php echo $bimage;?>" alt="">
  <p><?php echo $btitle;?></p>
  <a href="<?php echo $bpermalink;?>" class="btn line black">Learn more</a>
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