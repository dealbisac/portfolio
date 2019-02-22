<?php

get_header();

?>


<!-- HOME SECTION -->
<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-5 col-md-7 col-sm-12">
                    <div class="home-thumb">
                         <h1 class="wow fadeInUp" data-wow-delay="0.4s">Hello, I am Dipendra.</h1>
                         <p class="wow fadeInUp white-color" data-wow-delay="0.6s">Praesent eleifend tristique nisl, nec finibus urna posuere nec. Quisque vel nunc eget arcu maximus facilisis non eu nisi. Aliquam ullamcorper est a nisl imperdiet luctus.</p>
                         <a href="#service" class="wow fadeInUp smoothScroll btn btn-default section-btn" data-wow-delay="1s">discover more</a>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- MENU SECTION -->

<nav class="navbar navbar-default navbar-fixed-top">
<div class="menu">
     <ul>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
     </ul>

</div>
</nav> -->

<!-- <div>
<ul>
<li> <a href="#home">Home</a></li>
<li> <a href="#service">Service</a></li>
<li> <a href="#about">About</a></li>
<li> <a href="#work">Work</a></li>
<li> <a href="#blog">Blog</a></li>
<li> <a href="#contact">Contact</a></li>
</ul>

</div> -->

<!-- SERVICE SECTION -->
<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <!-- SECTION TITLE -->
                    <h2>what things i am doing...</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
               </div>

               <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-thumb">
                         <i class="fa fa-smile-o"></i>
                         <h4>Graphic Design</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-thumb bg-grey">
                         <i class="fa fa-camera"></i>
                         <h4 class="white-color">Photography</h4>
                         <p>Duis sed arcu sed nunc maximus tempor. Maecenas et enim laoreet, pharetra risus vel.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-thumb">
                         <i class="fa fa-lightbulb-o"></i>
                         <h4>UI/UX design</h4>
                         <p>Sed tristique, nunc sit amet pellentesque pharetra, sapien urna.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-thumb">
                         <i class="fa fa-clone"></i>
                         <h4>illustration</h4>
                         <p>Cras ut urna quis nisi luctus molestie tincidunt sed ipsum. Donec gravida laoreet erat.</p>
                    </div>
               </div>
               
          </div>
     </div>
</section>


<!-- ABOUT SECTION -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
               
               <div class="col-md-4 col-sm-8">
                    <div class="about-image-thumb">
                    <p> <?php echo get_theme_file_uri(); ?> </p>

                         <img src="<?php echo get_theme_file_uri('/images/profile-img.jpg') ?>" class="wow fadeInUp img-responsive" data-wow-delay="0.2s" alt="about image">
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-behance"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-8 col-sm-12">
                    <div class="about-thumb">
                         <!-- SECTION TITLE -->
                         <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                              <h2>a little more about Dipendra</h2>
                              <p>Graphic Designer, Creative Photographer & Front-end Developer</p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Praesent eleifend tristique nisl, nec finibus urna posuere nec. Quisque vel nunc eget arcu maximus facilisis non eu nisi. Aliquam ullamcorper est a nisl imperdiet luctus.</p>
                              <p>Sed sed convallis odio. Nulla scelerisque libero efficitur diam fermentum, quis tincidunt urna placerat. Maecenas sed tortor sed nisi semper ultricies. Nulla ornare metus in massa mollis scelerisque.</p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- WORK SECTION -->
<section id="work" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Seleted Designs</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                         <a href="<?php echo get_theme_file_uri('/images/work-image1.jpg'); ?>" class="image-popup">
                              <div class="work-thumb-overlay">
                                   <h4 class="white-color">First Title</h4>
                                   <h2>Graphic Design</h2>
                              </div>
                              <img src="<?php echo get_theme_file_uri('/images/work-image1.jpg'); ?>" class="img-responsive" alt="Work 1">
                         </a>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                         <a href="images/work-image2.jpg" class="image-popup">
                              <div class="work-thumb-overlay">
                                   <h4 class="white-color">Title Two</h4>
                                   <h2>Photography</h2>
                              </div>
                              <img src="<?php echo get_theme_file_uri('/images/work-image2.jpg') ?>" class="img-responsive" alt="Work 2">
                         </a>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                         <a href="images/work-image3.jpg" class="image-popup">
                              <div class="work-thumb-overlay">
                                   <h4 class="white-color">Third Title</h4>
                                   <h2>illustration</h2>
                              </div>
                              <img src="<?php echo get_theme_file_uri('/images/work-image3.jpg') ?>" class="img-responsive" alt="Work 3">
                         </a>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- BLOG SECTION -->
<section id="blog" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Recent Blogs</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>

               <?php 
while(have_posts()){
the_post();?>


               <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <!-- BLOG THUMB -->
                    <div class="work-thumb">
                         <a href="<?php echo get_theme_file_uri('/images/work-image1.jpg'); ?>" class="image-popup">
                              <div class="work-thumb-overlay">
                                   <h4 class="white-color"><a href="<?php the_permalink();?>"><?php the_title(); ?> </a></h4>
                                   <h2 class="white-color"><?php the_title(); ?></h2>
                                   <p> <?php the_excerpt(); ?> </p>
                              </div>
                              
                              <img src="<?php echo get_theme_file_uri('/images/work-image1.jpg'); ?>" class="img-responsive" alt="Work 1">
                         </a>
                    </div>
               </div>

               <?php
}
?>

          </div>
     </div>
</section>


<!-- CONTACT SECTION -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Get in touch</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>

               <div class="col-md-7 col-sm-10">
                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact-form" action="#" method="get">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Name" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                              </div>
                              <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                   <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                              </div>
                        </form>
                    </div>
               </div>

               <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                              <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur adipisicing lacinia tortor morbi ultricies.</p>
                         </div>
                         
                         <p><i class="fa fa-map-marker"></i> 456 New Street 22000, New York City, USA</p>
                         <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">info@company.com</a></p>
                         <p><i class="fa fa-phone"></i> 010-020-0340</p>
                    </div>
               </div>

          </div>
     </div>
</section>

<?php get_footer(); ?>
