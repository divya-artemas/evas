<?php
get_header();
?> 
 <!------------------ detail-banner-start ---------------------->
 <div class="detail-banner detail-sec shade-two after-shade">
        <div class="common-flex">
          <div class="medium-container pt">
            <date  data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">02 / 01 / 2024
</date>
            <h2 data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">The Secrets of Ayurveda for Holistic Wellness

  
  </h2>
  <div class="detail-sec-content">
    <img src="img/blog-one.jpg" alt="">
    <div class="detail-sec-content-set">
    <p>Ayurveda, an ancient system of holistic healing, offers a pathway to overall well-being by emphasizing balance in the mind, body, and spirit. At its core are the doshas—Vata, Pitta, and Kapha—each influencing our unique constitution. Achieving harmony involves identifying our dominant dosha and adopting simple yet impactful lifestyle adjustments.</p>

    <strong>
      Nasya and Oil Pulling
    </strong>
    <ul>
      <li>Introduce Nasya and Oil Pulling for respiratory health and oral hygiene.</li>
      <li>Quick and simple steps to incorporate these practices.</li>
    </ul>
    <strong>
      Meditation and Yoga
    </strong>
    <ul>
      <li>Start with easy meditation and yoga practices for mental and physical balance.

      </li>
      
    </ul>
    <p>Daily routines, aligned with nature's rhythms, play a crucial role. Ayurvedic eating, centered on Sattvic foods and maintaining robust digestive fire (Agni), forms the foundation of a nourishing diet. Incorporating easy practices like Nasya (nasal therapy) and Oil Pulling, along with accessible meditation and yoga, aids in achieving balance. Seasonal adjustments, known as Ritucharya, guide us in adapting to environmental changes. Furthermore, Ayurveda recognizes the intimate connection between mind and body, providing stress management techniques for emotional well-being. By embracing Ayurvedic principles in our daily lives, we can unlock the secrets to a more harmonious and holistic existence.</p>
  </div>
  </div>
            
            <div class="btn-sec">
            <a href="#" class="btn line">Back to List</a>
            </div>
          </div>

      </div>
     </div>
     <div class="common-flex pb mb">
      <div class="container">
        <h2>Related Blogs

</h2>
<?php 
                        $query = new WP_Query( [
                        'post_type'      => 'blogs',
                        //'nopaging'       => true,
                        'post__not_in'   => array( get_the_ID() ),
                        'posts_per_page' => '2',
                    ] ); 
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php 
                $i=1;
                while ( $query->have_posts() ) : $query->the_post();                      
                            $btitle         =   get_the_title();                                              
                            $bdate          =   get_field('blog_date');     
                            $bimage         =   get_field('listing_image'); 
                            $exc_content    =   get_field('exc_content');                  
                            $bpermalink     =   get_the_permalink();                             
                ?>
                <?php wp_reset_query();  $i++; endwhile; ?>
                  <?php endif; ?> 
      

 
    <?php get_footer();?>