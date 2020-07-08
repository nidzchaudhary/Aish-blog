<?php get_header(); 

/* Template Name: contact */
?>
<!--Slider-->
<div class="cat-slider">
<?php
  if( get_field('catagory_slider')){ ?>

    <?php $count = 1; ?>
    
    <div class="owl-carousel owl-theme ">
      <?php while( the_repeater_field('catagory_slider')){
      // vars
      $catsliderimg = get_sub_field('cat-sl-img');
      $catslidertext = get_sub_field('cat-sl-text');
      //print_r($catsliderimg);
    ?>
      <div class="item">
        <img src="<?php echo $catsliderimg['url']; ?>" alt="">
      </div>
      <?php $count++; ?>
    <?php } ?>
    
  </div>
<?php } ?>
</div>


<div class="technology">
  <div class="container">
    <div class="col-md-9 technology-left">
      <div class="contact-section">
        <h2 class="w3">CONTACT</h2>
          
        
          <div class="contact-grids">
            <div class="col-md-12 contact-grid" style="padding: 0;">
              
              <p>Nemo enim ips voluptatem voluptas sitsper natuaut odit aut fugit consequuntur magni dolores eosqratio nevoluptatem  amet eism com odictor ut ligulate cot ameti dapibu</p>
              <?php echo do_shortcode(' [contact-form-7 id="111" title="Contact us"] '); ?>
            </div>
            <div class="col-md-12 contact-grid1">
              <h4>Address</h4>
              <div class="contact-top">
                
                
                <div class="clearfix"></div>
              </div>
              <ul>
                  <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 8126062908</li>
                  <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 8126062908</li>
                  <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:aishwarya.tripathi@healingaddict.com">aishwarya.tripathi@healingaddict.com</a></li>
                  <!-- <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li> -->
                </ul>

            </div>
            <div class="clearfix"></div>
          </div>
          <!-- <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584" allowfullscreen=""></iframe>
          </div> -->
        
      </div>
    </div>
    <!-- technology-right -->
    	<?php include 'sidebar.php';?>
  </div>
</div>
<?php get_footer(); ?>