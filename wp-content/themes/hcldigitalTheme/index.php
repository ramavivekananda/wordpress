<?php
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
 $link = "https"; 
else
 $link = "http"; 

// Here append the common URL characters. 
$link .= "://"; 

// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 

// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
   
    get_header();
   // require('header.php');
  
?>

<div class="container-fluid">
		<div class="row dh-prize-row">
			<div class="col-12 col-md-12">
                <h3 class="driveHeading dh-prize-top-heading"><?php echo get_theme_mod('hclDigitalHack-tSection-heading')?><br />
                <small><?php //echo get_theme_mod('hclDigitalHack-tSection-heading2')?></small></h3>
			</div>
		</div>
    </div>
    
    <div class="container-fluid">
		  <div class="row pl10 justify-content-between">
          <div class="col-md-4 col-12 cardBox1 justify-content-center dh-prize-row">
          <h1 class="dh-prize-heading">2<sup>nd</sup> Prize</h1>
						<p class="text-center">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-content-image'))?>" class="img-fluid" alt="More than $1000 worth of prizes for the winners" /></p>
						<h4 class="text-center">
            $500
                        <?php //echo get_theme_mod('hclDigitalHack-tscontent-offer')?>
               <strong class="colortxt"><?php //echo get_theme_mod('hclDigitalHack-tscontent-offer2')?></strong> <?php //echo get_theme_mod('hclDigitalHack-tscontent-offer3')?>
               
						</h4>
			  		
						
					</div>
          <div class="col-md-4 col-12 cardBox1 justify-content-center dh-prize-1st dh-prize-row">
            <h1 class="dh-prize-heading dh-first-price">1<sup>st</sup> Prize</h1>
						<p class="text-center">
                      
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-content-image'))?>" class="img-fluid" alt="More than $1000 worth of prizes for the winners" /></p>
						<h4 class="text-center">
              $1000
						</h4>
			  		
						
					</div>
              <div class="col-md-4 col-12 cardBox1 justify-content-center dh-prize-row" >
              <h1 class="dh-prize-heading">3<sup>rd</sup> Prize</h1>
							<p class="text-center">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-content-image'))?>" class="img-fluid" alt="More than $1000 worth of prizes for the winners" /></p>
              <h4 class="text-center">
                $250
              </h4>
                  
					</div>	
		</div>
  </div>
  
  <div class="container-fluid">
		<div class="row dh-prize-row" id="scroll_pointing">
			<div class="col-12 col-md-12">
        <h3 class="driveHeading dh-prize-below-heading"><small><?php echo get_theme_mod('hclDigitalHack-tSection-heading2')?></small></h3>
        <ul class="col-md-8 justify-content-center">
          <li>
          <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image'))?>" class="img-fluid" alt="For all participants" /><span><?php echo get_theme_mod('hclDigitalHack-tscontent-right-offer')?></span>
          </li>

          <li>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image1'))?>" class="img-fluid" alt="Complimentary food" />
            <span><?php echo get_theme_mod('hclDigitalHack-tscontent-right-offer1')?></span>
        </li>
      </ul>      
			</div>
		</div>
    </div>


      <?php
    // echo "-----".$link. "----";
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
<h2><!-- <a href="<?php //the_permalink(); ?> <?php the_title(); ?></a> --></h2>
<?php //the_content(); ?>
<?php get_template_part('content','page'); ?> 
<?php    endwhile;
    else :
        echo '<h3>No content found </h3>';
endif;
   ?>
   <div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <div class="row p-0">
      <div class="col-12 col-md-6 headingTxt"> 
          <h3><?php echo get_theme_mod('hclDigitalHack-content-headLine')?></h3>
          <h4 class="display-4"><strong><?php echo get_theme_mod('hclDigitalHack-content-headLine2')?></strong></h4>
          <p class="display-5"><?php echo get_theme_mod('hclDigitalHack-content-date')?></p>
          <p class="display-5"><?php echo get_theme_mod('hclDigitalHack-content-place')?></p>
          <p><a href="#Register" class="btn registerButn">Register Now</a></p>
          <p ><?php echo get_theme_mod('hclDigitalHack-content-condition')?></p>
        </div>
        <div class="col-12 col-md-6 float-md-right p-0"> <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-content-image'))?>"  class="img-fluid" alt="Banner" /> </div>

</div>
</div>
</div>
  
<!-- Second section Started  -->
<div class="container-fluid">
  <div class="row pl5">
    <div class="col-12">
        <p><?php echo get_theme_mod('hclDigitalHack-content-area')?></p>

        <div class="card cardBox">
        <div class="card-header">
          <h3>Upcoming Hackathons</h3>
        </div>
        <div class="card-body">
          <div class="row justify-content-between pl5">
            <div class="col-12 col-md-5 justify-content-center">
                <p class="text-center" style="color:#5853d1; font-size:16px;">We are excited at the prospect of hosting you at <br />the HCL Seattle Campus, for the Hackthon. <br />Please register if you are:</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon1.png" /><br /><span class="dh-dotNet-heading">.</span>NET Engineer</p>
                <p>&nbsp;</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon2.png" /><br />Biztalk Engineer</p>
                <p>&nbsp;</p>
                <!-- <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon3.png" /><br />Full Stack Engineer</p>
                <p>&nbsp;</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon4.png" /><br />DevOps Engineer</p>
                <p>&nbsp;</p> -->
                <p>The full agenda of the Hackathon along with further details, will be communicated to all shortlisted candidated before the event.</p>
              
            </div>
            <div class="col-12 col-md-5">
              <div class="card-columns card">
                <div class="card-body">
                  <div class="row justify-content-center" style="background-color: #FFFFFF;">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                      <div class="row" id="Register">
                        <div class="col text-center">
                          <h3 class="driveHeading1">Registration</h3>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-12 mt-4">
							<!-- <input name="txtName" type="text" id="txtName" class="form-control formField" placeholder="Name *" />
							 <span id="rfvName" style="color:Red;font-size:Small;display:none;">*</span>	 -->
							 <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } else  ninja_forms_display_form( 3 );
							 ?>
                        </div>
                      </div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12">
                <h3 class="driveHeading"><?php //echo get_theme_mod('hclDigitalHack-tSection-heading')?><br />
                <small><?php //echo get_theme_mod('hclDigitalHack-tSection-heading2')?></small></h3>          
			</div>
		</div>
    </div> -->
    
    <!-- <div class="container-fluid">
		  <div class="row pl10 justify-content-between">
			
					<div class="col-md-5 col-12 cardBox1 justify-content-center" style="padding: 3% 0;">
						<p class="text-center">
                      
                        <img src="<?php //echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-content-image'))?>" class="img-fluid" alt="More than $1000 worth of prizes for the winners" /></p>
						<br />
						<h4 class="text-center">
                        <?php //echo get_theme_mod('hclDigitalHack-tscontent-offer')?>
							 <strong class="colortxt"><?php //echo get_theme_mod('hclDigitalHack-tscontent-offer2')?></strong> <?php //echo get_theme_mod('hclDigitalHack-tscontent-offer3')?>
						</h4>
			  		
						
					</div>
              <div class="col-md-5 col-12 cardBox1 justify-content-center" style="padding: 3% 0;">
						
						<div class="row justify-content-center">
                            <div class="col-12 col-md-3 justify-content-center"><p style="padding:10px;" align="center">
                            <img src="<?php //echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image'))?>" class="img-fluid" alt="For all participants" /></p></div>
							<div class="col-12 col-md-8"><p class="display-5 mobtxt" style="padding-top:30px;"><?php //echo get_theme_mod('hclDigitalHack-tscontent-right-offer')?></p></div>
                            </div>
                  <p>&nbsp;</p>
                  <div class="row justify-content-center">
							<div class="col-12 col-md-3 justify-content-center"><p style="padding:10px;" align="center"><img src="<?php //echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image1'))?>" class="img-fluid" alt="Complimentary food" /></p></div>
							<div class="col-12 col-md-8"><p class="display-5 mobtxt" style="padding-top:30px;"><?php //echo get_theme_mod('hclDigitalHack-tscontent-right-offer1')?></p></div>
						</div>
					</div>	
					
		</div>
	</div> -->
	
	<div class="container-fluid">
  <div class="row pl5">
			<div class="col-12 col-md-12">
				<h3 class="driveHeading">Snaps From Past Hackathons</h3>
				
				<div class="event">
		
		<div id="eventCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#eventCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#eventCarousel" data-slide-to="1"></li>
                            
          </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>"" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                       
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image2'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-right">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image3'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>                                   
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image4'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image4'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                      
                                    </div>
                                    <div class="col-md-4 text-center">
                                       <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image5'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image5'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image6'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image6'))?>" alt="Event Pictures" class="img-fluid" />
                                        </a>
                                    </div>
                                    
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
							

                        </div>
                        <!--.carousel-inner-->
                    </div>
			</div>
		</div>
		</div>

			</div>
    <div>
        <p></p>
</div>
<?php 
get_footer();
?>