<?php 
/* Template name: Contact */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

 <!-- Banner-section-start-->
 <div class="banner" style="background: linear-gradient(0deg, rgba(13,57,111,0.7987570028011204) 37%, rgba(13,57,111,0.8015581232492998) 54%), url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center top/cover;">
    <div class="container">
      <div class="flex">
        <div class="left"> 
          <div class="contact-text" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
            <h1><?php the_title();?></h1>
            <p><?php echo get_field('ct_content');?></p>
           </div>
          </div>
       <div class="right">
       <div class="contact-btn">
        <div class="flex">
          <img src="img/phone-white.png" alt="">
          <div class="contact-wrap">
            <a href="#">+971 42660734</a>
            <a href="#">+97142660734</a>
            <a href="#">+971 055 708 9956</a>
          </div>
          
        </div>
       </div>
       <div class="contact-btn">
        <div class="flex">
          <img src="img/mail-white.png" alt="">
          <div class="contact-wrap">
            <a href="#">info@evasinternational.com</a>
           
          </div>
          
        </div>
       </div>
       </div>
      </div>
    </div>
    <div class="location-sec">
      <div class="container">
        <h3>Our Location</h3>
        <div class="location-list">
          <div class="flex">
        <div class="location-block">
          <img src="img/dubai.jpg" alt="">
  
          <div class="location-content">
            <strong>DUBAI</strong>
            <p>Suite No. 327 & 309, City Bay Business Centre, Abu Hail, P.O Box – 82631, Dubai</p>
            <a href="#" class="btn line">GET LOCATION</a>
          </div>
        </div>
        <div class="location-block">
          <img src="img/abudubai.jpg" alt="">
  
          <div class="location-content">
            <strong>ABU DHABI</strong>
            <p>Suite No: 1601,P.O Box 25929, Kamala Tower,Khalidiya Street, Abu Dhabi</p>
            <a href="#" class="btn line">GET LOCATION</a>
          </div>
        </div>
        <div class="location-block">
          <img src="img/sharajah.jpg" alt="">
  
          <div class="location-content">
            <strong>SHARJAH</strong>
            <p>Office No: Q1-04-006/A, P.O
              Box 513424, SAIF Zone,
              Sharjah</p>
            <a href="#" class="btn line">GET LOCATION</a>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
      </div>
      <!-- Banner-section-End-->
 
  <!-- Appointment-sec-content-->
  <div class="two-sec contact-two">
    <div class="container">
      <div class="flex">
        <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">

          <h3>Arrange
            a call back</h3>
          <ul>
            <li>
              <a href="#">DUBAI</a>
            </li>
            <li>
              <a href="#">ABU DHABI</a>
            </li>
            <li>
              <a href="#">SHARJAH</a>
            </li>
          </ul>
          <p>Have a question, suggestion, or just want to say hi? Fill out the form below and we'll get back to you as soon as possible.
          </p>
        </div>
        <div class="right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
        <?php echo do_shortcode(get_field("form_shortcode"));?>
        </div>
      </div>

      
    </div>
  </div>
  <!-- Appointment-sec-content-->



    <?php endwhile; endif;?> 
    <?php get_footer();?>