<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devfly
 */

?>
  <!--footer Section-->
<footer class="footer-bottom" id="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12  fnav ">
        <div class="col-md-3 col-xs-12 col-sm-6 logo-img ">             
           <?php  
             $logo    = esc_url( get_theme_mod( 'logo' ) );
             $link    = get_template_directory_uri();
			 $title_header = $logo ? "<img  src='$logo' class='img-responsive' width='150px' >" : "<img src='$link/img/logo.png' class='img-responsive d-block m-x-auto' width='150px' >" ;                             
     ?>
           <span><?php if($logo) { echo $title_header;} else {bloginfo( 'name' );}  ?> </span>
          <p>
               <?php 
                if (  is_active_sidebar( 'sidebar-footer1' ) ) {
	               dynamic_sidebar('sidebar-footer1' );
                }
                else{ ?>POLITEKNIK NEGERI BANJARMASIN<br>
                        Jalan Brigjend H. Hasan Basry<br>
                        Komp. Unlam Banjarmasin 70123
              <?php }?>
          </p>
        </div>
        <div class="col-md-3  col-xs-12 col-sm-6">
            
            <?php 
                if (  is_active_sidebar( 'sidebar-footer2' ) ) {
	               dynamic_sidebar('sidebar-footer2' );
                }
                else{ ?>
            
        <!--  <h4>Follow us</h4>
          <ul class="list-inline">       
            <li ><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li ><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li ><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li ><a href="#"><i class="fa fa-twitter"></i></a></li>              
           
          </ul>-->
 <h4>Contact Us</h4>
          <address><span class="address-footer-section">
              Anna Noviyana
              Hp. 081255639052<br>
              Jalan Brigjend H Hasan Basry Komp. UNLAM Banjarmasin</span><br>
          <a href="mailto:#" class="contact-mail">asbis@poliban.ac.id</a>
          </address>


         <?php }?>
        </div>
        <div class="col-md-3  col-xs-12 col-sm-6">
        
              <?php 
                if (  is_active_sidebar( 'sidebar-footer3' ) ) {
	               dynamic_sidebar('sidebar-footer3' );
                }
                else{ ?>
            
          

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45066.2290828775!2d114.55620394152267!3d-3.268150438081562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a80d47ba6b%3A0x8f5abfaddfe5a2d7!2sPoliteknik+Negeri+Banjarmasin!5e0!3m2!1sid!2sid!4v1469430770662" width="200" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

            <?php }?>
            
        </div>          
       
        <div class="col-md-3   col-xs-12 col-sm-12 subscribe-footer">
            <?php
           if (  is_active_sidebar( 'sidebar-footer4' ) ) {
	               dynamic_sidebar('sidebar-footer4' );
                }
            else{
          ?>
       <!--   <h4>Subscribe</h4>
          <form class="form" method="post" action="<?php if ($themedavfly1_footer_newsletter_mailchimp != '') echo $themedavfly1_footer_newsletter_mailchimp; ?>" target="_blank">
            <div class="form-group">
              <input type="email" placeholder="Your Email Address" class="form-control" />
            </div>
            <div class="form-group">
              <button class="btn btn-default btn-block "><i class="fa fa-paper-plane"></i></button>
            </div>
          </form>
          <p class="small info"><i class="glyphicon glyphicon-lock"></i> &nbsp; Your email address is safe with us.</p>
           -->



<a href="http://s11.flagcounter.com/more/PS"><img  src="http://s11.flagcounter.com/count2/PS/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" border="0"></a>

<?php }?>   
        </div>          
         
      </div>
      <div class="clearfix"></div>
      <hr>
      <div class="col-md-12"></div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <div class="col-md-6">
         <!-- <ul class="payment-icon">                       
          </ul>-->
        </div>
        <div class="col-md-6">
            <p class="copyright"><span>ALL RIGHTS RESERVED. COPYRIGHT &#169; 2017.</span> Designed by <?php printf( '<a href="' . esc_url( 'https://dcrazed.com/' ) . '" target="_blank">Dcrazed</a>' ); ?> </p>
        </div>
      </div>
    </div>
  </div>  


</footer>
<?php wp_footer(); ?>
  <script>
jQuery(document).ready(function( $ ) {
    $('[data-toggle="tooltip"]').tooltip();   
});
</script> 
<script>
jQuery(document).ready(function( $ ) {
    $('[data-toggle="popover"]').popover(); 
});


</script>
</body>
</html>