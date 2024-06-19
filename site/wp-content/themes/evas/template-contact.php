<?php 
/* Template name: Contact */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 


<!-- Banner-section-Start-->
<div class="banner" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
        <div class="banner-text">
          <h1 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <span><?php echo get_field('small_heading');?></span>
            <?php echo get_field('big_heading');?>
          </h1>
          <div class="banner-contact flex">
            <div class="banner-contact-sec flex">
              <div class="icon-set">
                <span class="material-symbols-outlined"> phone_iphone </span>
              </div>
              <div class="icon-set-content" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <b><?php echo get_field('phone_heading');?> </b>
                <a href="tel:<?php echo get_field('number_1');?>"> <?php echo get_field('number_1');?></a>
                <a href="tel:<?php echo get_field('number_2');?>"> <?php echo get_field('number_2');?></a>
              </div>
            </div>
            <div class="banner-contact-sec flex">
              <div class="icon-set">
                <span class="material-symbols-outlined"> alternate_email </span>
              </div>
              <div class="icon-set-content">
                <b><?php echo get_field('email_heading');?></b>
                <a href="mailto:<?php echo get_field('email_id_1');?>"><?php echo get_field('email_id_1');?></a>
                <a href="mailto:<?php echo get_field('email_id_2');?>"><?php echo get_field('email_id_2');?></a>
              </div>
            </div>
          </div>
          <div class="down">
            <div class="arrow-container">
              <div class="arrow-sec">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13.501"
                  height="50.243"
                  viewBox="0 0 13.501 50.243"
                >
                  <path
                    id="Icon_ionic-ios-arrow-round-down"
                    data-name="Icon ionic-ios-arrow-round-down"
                    d="M24.49,20.784a.919.919,0,0,0-1.294-.007l-4.282,4.268V-21.218A.911.911,0,0,0,18-22.125a.911.911,0,0,0-.914.907V25.045L12.8,20.77a.925.925,0,0,0-1.294.007.91.91,0,0,0,.007,1.287l5.836,5.794h0a1.026,1.026,0,0,0,.288.19.872.872,0,0,0,.352.07.916.916,0,0,0,.64-.26l5.836-5.794A.9.9,0,0,0,24.49,20.784Z"
                    transform="translate(-11.247 22.125)"
                    fill="#fff"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner-section-End-->

      <!-- shade-section-Start-->
      <div class="shade shade-five after-shade both-p-xl" style="background: url(<?php echo get_field('addr_bgimage');?>) no-repeat center center/cover;">
        <div class="content-area small-count pt">
          <div class="extra-medium-container pt">
            <div class="small-img pt" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
              <img src="<?php echo get_field('adr_image');?>" alt="" />
              <div class="address-sec">
                <span><?php echo get_field('adr_heading');?></span>
                <a href="<?php echo get_field('off_address_link');?>"><?php echo get_field('off_address');?></a>
              </div>
              <div class="btn-sec">
                <a href="<?php echo get_field('ad_button_link');?>" class="btn brown"><?php echo get_field('ad_button_text');?></a>
              </div>
            </div>

            <div class="contact-form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <h4><?php echo get_field('form_heading');?></h4>
              <p><?php echo get_field('form_sub_heading');?></p>
              <?php echo do_shortcode(get_field("form_shortcode"));?>
            </div>
          </div>
        </div>
      </div>
 <!-- Award-section-Start-->
 <div class="award-sec">
  <div class="container">
    <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200"><?php echo get_field('award_heading',16);?></h2>
  </div>
  <div class="extra-medium-container">
    <div class="award-detail flex pt">
        <div class="award-detail-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <img src="<?php echo get_field('award_image',16);?>" alt="">
      
        </div>
        <div class="award-detail-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
          <h4><?php echo get_field('ach_title',16);?></h4>
          <span><?php echo get_field('ach_sub_title',16);?></span>
          <p><?php echo get_field('ach_content',16);?></p>
        </div>
    </div>
  </div>
</div>
<!-- Award-section-End-->




    <?php endwhile; endif;?> 
    <?php get_footer();?>