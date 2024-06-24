<?php
get_header();
?> 
  <!-- Banner-section-Start-->
      

<div class="banner" style="background:linear-gradient(270deg, rgba(41,82,143,0.07326680672268904) 0%, rgba(41,82,143,0.7931547619047619) 60%, rgba(41,82,143,0.9220063025210083) 70%, rgba(41,82,143,1) 100%), url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) center center/cover;">
      
    <div class="banner-text" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
      <h1><?php echo get_the_title();?></h1>
      <?php echo get_the_content();?>
    </div>
  </div>
  <!-- Banner-section-End-->


<?php  if (get_the_ID() == 424){ ?>
  

  <div class="icv-block">
        <div class="container">
          <div class="flex">
            <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <img src="<?php echo get_field('icv_logo');?>" alt="ICV Logo">
            </div>
            <div class="right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <?php echo get_field('service_contents');?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="full-width" style="background: url(<?php echo get_field('icv_background_image');?>) no-repeat center center/cover;">
        <div class="container">
          <div class="full-width-content list" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
          <?php echo get_field('icv_content');?>
          </div>
        </div>
      </div>


    
<?php } else {?>


    <!-- Appointment-sec-content-->
    <div class="two-sec">
      <div class="container">
        <div class="flex">
          <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"> 
           <?php echo get_field('service_contents');?>
          </div>
          <div class="right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <h3>Schedule an appointment </h3>
           <?php echo do_shortcode('[contact-form-7 id="388" title="Service form"]');?>
          </div>
        </div>

        <div class="direct-contact" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
          <b>Do you need a trusted accountant to guide you in the right direction?</b>
          <ul data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
            <li>
              <a href="#"><img src="<?php bloginfo("template_url")?>/img/phone-call.png" alt="">+971 42660734</a>
            </li>
            <li><a href="#"><img src="<?php bloginfo("template_url")?>/img/email-new.png" alt="">info@evasinternational.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Appointment-sec-content-->
  <!-- Services-section-Start-->
  <div class="services">
    <div class="container">
     
      <div class="service-list">
        <div class="service-set flex">
          <div class="service-flex white-trans" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <h3>Our services</h3>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <a href="#">
            
                <img src="<?php bloginfo("template_url")?>/img/taxation.png" alt="" />
                <p>Taxation & Compliance</p>
          
            </a>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <a href="#">
             
                <img src="<?php bloginfo("template_url")?>/img/icv.png" alt="" />
                <p>
                  ICV <br />
                  Certification
                </p>
         
            </a>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <a href="#">
            
                <img src="<?php bloginfo("template_url")?>/img/accounting.png" alt="" />
                <p>Accounting & Reporting</p>
            
            </a>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <a href="#">
          
                <img src="<?php bloginfo("template_url")?>/img/country.png" alt="" />
                <p>Country by country report</p>
          
            </a>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <a href="#">
       
                <img src="<?php bloginfo("template_url")?>/img/tax.png" alt="" />
                <p>
                  Corporate <br />
                  Tax
                </p>
        
            </a>
          </div>
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <a href="#">
            
                <img src="<?php bloginfo("template_url")?>/img/assurance.png" alt="" />
                <p>
                  Assurance 
                
                </p>
      
            </a>
          </div>
        
         
          <div class="service-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <a href="#">
       
                <img src="<?php bloginfo("template_url")?>/img/advisory.png" alt="" />
                <p>
                  Advisory
                </p>
        
            </a>
          </div>
        </div>

        <a href="<?php echo home_url();?>/ourservices" class="btn line black">See all services</a>
      </div>
    </div>
  </div>
  <!-- Services-section-End-->



   <!-- Accordian-one-section-Start --> 
<div class="first-accordian">
<div class="medium-container">
 <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">Frequently asked questions</h2>
    <div class="common-flex">

  
        <div
          class="accordian-sec" class="customer-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"

        >
        <div class="accordion-items">

          <div class="accordion-heading open"><h3>What is the difference between accounting and bookkeeping?
</h3>


          </div>
          <div class="accordion-content open">Bookkeeping involves the systematic recording, storing, and retrieving of financial transactions, while accounting involves interpreting, classifying, analyzing, reporting, and summarizing financial data.
          </div>
        
            <div class="accordion-heading"><h3>What are the basic principles of accounting?</h3>



          </div>
          <div class="accordion-content">For newly established companies (less than 10 months old) that do not have audited financial statements, the management accounts (unaudited financial statements) for a period of up to 9 months can be used for ICV calculations. Any management accounts exceeding 9 months will require auditing.</div>         
            <div class="accordion-heading"><h3>What are the different types of accounting methods?</h3>
          </div>
          <div class="accordion-content">Make sure your company is registered with the appropriate UAE authorities via MOIAT portal using UAE pass. (Proper authorization is needed in this regard). NAFIS registration is also mandatory for your company.</div>

            <div class="accordion-heading"><h3>What is double-entry bookkeeping?</h3>
          </div>
          <div class="accordion-content">Collect all required paperwork, such as contracts, purchase invoices, employee information, and financial records.</div>
            <div class="accordion-heading"><h3>What is depreciation, and how is it calculated?</h3>
          </div>
          <div class="accordion-content">Your company will go through a thorough evaluation to find out its ICV score, which calculates the value contributed by the Entity in the United Arab Emirates.</div>
          
        </div>
        </div>
      

  </div>
</div>

</div>  
<!-- Accordian-one-section-End --> 
<?php } ?>
 
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

      

 
    <?php get_footer();?>