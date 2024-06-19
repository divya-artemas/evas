<?php 
/* Template name: About */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
      <!-- Banner-section-Start-->
      <div class="banner" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
        <div class="banner-text">
          <h1 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('banner_heading');?></h1>
        </div>
      </div>
      <!-- Banner-section-End-->

      <!-- shade-section-Start-->
      <div class="shade shade-five both-p after-shade" style="background: url(<?php echo get_field('ab_bgimage');?>) no-repeat center center/cover;">
        <div class="content-area small-count">
          <div class="extra-medium-container">
            <div class="small-img" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
              <img src="<?php echo get_field('ab_image');?>" alt="" />
              <div class="count-down-area" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
                <span><?php echo get_field('founded_heading');?></span>
                <b><?php echo get_field('founded_year');?></b>
              </div>
            </div>
            <h2><?php echo get_field('ab_content');?></h2>           
          </div>
        </div>
      </div>      
      <!-- shade-section-End-->    
    
      <!-- practinior-section-Start-->
      <div class="common-flex practitioner both-p-xl">
        <div class="container b-top pt">
          <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('tr_heading');?></h2>
          <span data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200"><?php echo get_field('tr_sub_heading');?></span>
          <div class="two-box two-gap flex pt">
              <?php
                $i=2;                  
                while( have_rows('trustees') ): the_row();
                    $trustee_title    =  get_sub_field('trustee_title'); 
                    $trustee_image    =  get_sub_field('trustee_image');  
                    $trustee_role     =  get_sub_field('trustee_role');                    
              ?> 
          <div class="two-white three-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
              <img src="<?php echo $trustee_image;?>" alt="" />
              <div class="two-box-content">
                <h4><?php echo $trustee_title;?></h4>
                <b><?php echo $trustee_role;?></b>
              </div>
            </div>
            <?php $i=$i+1; endwhile;?> 
          </div>
          <div class="btn-sec" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
            <a href="<?php echo get_field('tr_button_link');?>" class="btn outline"><?php echo get_field('tr_button_text');?></a>
          </div>
        </div>
      </div>
      <!-- practinior-section-Start-->
     <!-- About-Detail-section-Start-->
     <div class="about-detail-sec" style="background: url(<?php echo get_field('vbackground_image');?>) no-repeat center center/cover;">
      <div class="container">
        <div class="about-detail flex">
          <div class="about-detail-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <img src="<?php echo get_field('v_image');?>" alt="">
            <h3><?php echo get_field('vm_heading');?></h3>
            <a href="<?php echo get_field('v_button_link');?>" class="btn outline white">
            <?php echo get_field('v_button_text');?>
            </a>
          </div>
          <div class="about-detail-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
            <h4><?php echo get_field('v_heading');?></h4>
            <?php echo get_field('v_content');?>
            <h4><?php echo get_field('m_heading');?></h4>
            <?php echo get_field('m_content');?>
          </div>
        </div>
      </div>
     </div>
     <!-- About-Detail-section-Start-->
       <!-- great-team-section-Start-->
       <div class="common-flex practitioner both-p-xl">
        <div class="container">
          <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('team_heading');?></h2>
          <span data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('team_sub_heading');?></span>
          <div class="two-box two-gap flex pt">
              <?php
                $i=2;                  
                while( have_rows('team_members') ): the_row();
                    $team_image           =  get_sub_field('team_image'); 
                    $team_name            =  get_sub_field('team_name');  
                    $team_designation     =  get_sub_field('team_designation');                    
              ?> 
            <div class="two-white three-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>00">
              <img src="<?php echo $team_image;?>" alt="" />
              <div class="two-box-content">
                <h4><?php echo $team_name;?></h4>
                <b> <?php echo $team_designation;?> </b>
              </div>
            </div>
            <?php $i=$i+1; endwhile;?> 
          </div>
          <div class="btn-sec" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
            <a href="<?php echo get_field('t_button_link');?>" class="btn outline"><?php echo get_field('t_button_text');?></a>
          </div>
        </div>
      </div>
      <!-- great-team-section-Start-->
      <!-- Award-section-Start-->
      <div class="award-sec">
        <div class="container">
          <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><?php echo get_field('award_heading');?></h2>
        </div>
        <div class="extra-medium-container">
          <div class="award-detail flex pt">
              <div class="award-detail-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="<?php echo get_field('award_image');?>" alt="">            
              </div>
              <div class="award-detail-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <h4><?php echo get_field('ach_title');?></h4>
                <span><?php echo get_field('ach_sub_title');?></span>
                <?php echo get_field('ach_content');?>
              </div>
          </div>
        </div>
      </div>
      <!-- Award-section-End-->
    </div>

    <?php endwhile; endif;?> 
    <?php get_footer();?>