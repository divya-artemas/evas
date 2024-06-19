<?php 
/* Template name: Blog */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

<!------------------ detail-banner-start ---------------------->
<div class="detail-banner">
        <div class="common-flex">
          <div class="container pt">
            <h2 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('page_heading');?></h2>
            <div class="two-box two-gap flex pt flex-wrap" id="cl1">
                
            <?php
                    $args = array (
                        'post_type'         => 'blogs',
                        'meta_key'          => 'blog_date',
                        'orderby'           => 'meta_value',
                        'order'             => 'DESC'
                    );
                    $query = new WP_Query( $args );
                ?>

                <?php if ( $query->have_posts() ) : ?>
                <?php 
                $i=1;
                while ( $query->have_posts() ) : $query->the_post();                      
                            $btitle         =   get_the_title();                                              
                            $bdate          =   get_field('blog_date');     
                            $bimage         =   wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
                            $exc_content    =   get_field('exc_content');                  
                            $bpermalink     =   get_the_permalink();                             
                ?>
              <div class="two-white three-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00" id="cl2">
                <img src="<?php echo $bimage;?>" alt="" />
                <div class="two-box-content">
                  <date><?php echo $bdate;?></date>
                  <h4><?php echo $btitle;?></h4>
                  <p><?php echo $exc_content;?></p>
                  <a href="<?php echo $bpermalink;?>" class="text">Read more</a>
                </div>
              </div>       
              <?php wp_reset_query();  $i++; endwhile; ?>
              <?php endif; ?>         
        
            </div>
            <div class="btn-sec" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100" id="btnLoad">               
              <!-- <a href="#" class="btn outline">Scroll To See More</a>  -->
            </div>
          </div>

      </div>
     </div>
     <!------------------ detail-banner-End ---------------------->

      
    <?php endwhile; endif;?> 
    <?php get_footer();?>