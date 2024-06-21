<?php 
/* Template name: Resources */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

  <!-- insight-section-start-->
<div class="top-gap">
  <div class="resource-page">
      <div class="container">
    <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_the_title();?></h2>
          <div class="resource-block">
            <ul data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
              <li>
                <a href="<?php echo home_url();?>/resources" class="active">Excise Tax</a>
              </li>
              <li>
                <a href="<?php echo home_url();?>/federal-tax-authority"> Federal Tax Authority</a>
              </li>
              <li>
                <a href="<?php echo home_url();?>/federal-tax-procedures">Federal Tax Procedures</a>
              </li>
              <li>
                <a href="<?php echo home_url();?>/value-added-tax">Value Added Tax</a>
              </li>
            </ul>
          </div>    
        </div>
  </div>
</div>
<?php if (is_page( 18 )) {?>
  <div class="resources-wrapper">
      <div class="container">
        <?php
              while( have_rows('files_section') ): the_row();
                    $file_title     =  get_sub_field('file_title'); 
        ?> 
          <div class="resource-sec">
              <h3 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo $file_title;?></h3>
              <div class="resource-block-sec">
                <div class="flex">
                  <?php
                          $i=1;                  
                          while( have_rows('all_files') ): the_row();
                              $file_name    =  get_sub_field('file_name'); 
                              $up_file      =  get_sub_field('up_file');  
                  ?> 
                    <div class="resource-content-block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
                      <p><?php echo $file_name;?></p>
                      <a href="<?php echo $up_file;?>" class="btn outline"><img src="<?php bloginfo("template_url")?>/img/arrow-down.svg" alt="">DOWNLOAD</a>
                    </div>
                <?php $i++; endwhile;?>      
              </div>
            </div>
          </div>
        <?php endwhile; ?> 
     </div>
    </div>
<?php } else {?>
  <div class="resources-wrapper">
      <div class="container">       
          <div class="resource-sec">            
              <div class="resource-block-sec">
                <div class="flex">
                  <?php
                          $i=1;                  
                          while( have_rows('file_uploads') ): the_row();
                              $f_title    =  get_sub_field('f_title'); 
                              $f_link     =  get_sub_field('f_link');  
                  ?> 
                    <div class="resource-content-block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
                      <p><?php echo $f_title;?></p>
                      <a href="<?php echo $f_link;?>" class="btn outline"><img src="<?php bloginfo("template_url")?>/img/arrow-down.svg" alt="">DOWNLOAD</a>
                    </div>
                <?php $i++; endwhile;?>      
              </div>
            </div>
          </div>        
     </div>
    </div>
<?php } ?>
       <!-- insight-section-end-->

    <?php endwhile; endif;?> 
    <?php get_footer();?>