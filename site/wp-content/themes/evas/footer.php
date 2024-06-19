     
     <!-- Full-width-section-Start-->
     <div class="full-width country-sec" style="background: url(<?php echo get_field('ft_background_image','option');?>) no-repeat center center/cover;">
      <div class="container">
        <div class="full-width-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
          <h3><?php echo get_field('ft_heading','option');?></h3>
          <div class="country-links first-link">
          <ul>
            <?php                                 
                while( have_rows('c_links','option') ): the_row();
                  $c_name    =  get_sub_field('c_name'); 
                  $c_link  =  get_sub_field('c_link'); 
            ?>
              <li>
                <a href="<?php echo $c_link;?>"><?php echo $c_name;?></a>
              </li>
          <?php endwhile;?>          
        </ul>
      </div>
          <p><?php echo get_field('contact_title','option');?></p>
         <div class="contact-links">
          <ul>
            <li>
              <a href="tel:<?php echo get_field('ct_phone','option');?>"><img src="<?php echo get_field('phone_icon','option');?>" alt=""><?php echo get_field('ct_phone','option');?></a>
            </li>
            <li>
              <a href="mailto:<?php echo get_field('ct_email','option');?>"><img src="<?php echo get_field('email_icon','option');?>" alt=""><?php echo get_field('ct_email','option');?></a>
            </li>
          </ul>
         </div>
        </div>
      </div>
    </div>
    <!-- Full-width-section-End-->

</div>
 <!-- Footer-section-Start-->
 <div class="footer">
  <div class="container">
    <div class="top-footer" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
      <div class="flex">
        <div class="logo-sec">
          <img src="<?php echo get_field('header_logo','option');?>" alt="Evas Logo">
        </div>
        <div class="nav-links">
            <?php
                            $defaults = array(
                                'menu' => 'Footer Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'footer',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                    ?>
      
          <ul>
            <li>
              <a href="#">Accounting and reporting</a>
            </li>
            <li>
              <a href="#">Taxation and compliance</a>
            </li>
            <li>
              <a href="#">ICV certification</a>
            </li>
            <li>
              <a href="#">Assurance services</a>
            </li>
            <li>
              <a href="#">Advisory practice</a>
            </li>
          </ul>
              <?php
                            $defaults = array(
                                'menu' => 'Footer Menu Right',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'footer_right',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
              ?>
        </div>
      </div>
    </div>
    <div class="bottom-footer" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
      <div class="flex">
        <div class="social-links">
          <ul>
            <?php                                 
                while( have_rows('social_links','option') ): the_row();
                  $social_image   =  get_sub_field('social_image'); 
                  $s_link         =  get_sub_field('s_link'); 
            ?>
            <li>
              <a href="<?php echo $s_link;?>"><img src="<?php echo $social_image;?>" alt=""></a>
            </li>
          <?php endwhile;?>
          </ul>
        </div>
        <div class="copyright">
          <p><?php echo get_field('copyright_text','option');?></p>
        </div>
      </div>
    </div>
  </div>
 </div>
 <!-- Footer-section-end-->

    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/jquery-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/aos.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/custom.js"></script>
    <?php wp_footer(); ?>

  </body>
</html>


