<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wwcs
 */

?>

<div id="colophon" class="container-fluid site-footer">
    <div class="row">
	<div id="footer-sidebar1" class="col-md-3 text-center">
            <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>	
	    <div id="footer-sidebar2" class="col-md-3 text-center">
            <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
            }
            ?>
        </div>	    
        <div id="footer-sidebar3" class="col-md-3 text-center">
                <?php
                    if(is_active_sidebar('footer-sidebar-3')){
                    dynamic_sidebar('footer-sidebar-3');
                }
                ?>
        </div>	
        <div id="footer-sidebar4" class="col-md-3 text-center">
                <?php
                    if(is_active_sidebar('footer-sidebar-4')){
                    dynamic_sidebar('footer-sidebar-4');
                }
                ?>
        </div>	
	</div>	

 <div class="row foot">
        <div class="col-12 me">
            
            	<p class="me">
					Copyright © 2021 | Developed by 
<a class="continue" href="https://wyrewebsolutions.co.uk">WYRE WEB SOLUTIONS</a></p>
</div>
  </div></div>
           

<?php wp_footer(); ?>
