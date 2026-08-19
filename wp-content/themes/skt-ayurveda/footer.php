<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Ayurveda
 */
$footer_text = get_theme_mod('footer_text');
?>
<div id="footer">
<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) ) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <div class="cols-3-inner">	
              <?php dynamic_sidebar( 'fc-1' ); ?>
              </div>	
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            	<div class="cols-3-inner">
            <?php dynamic_sidebar( 'fc-2' ); ?>
            	</div>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            	<div class="cols-3-inner">
            <?php dynamic_sidebar( 'fc-3' ); ?>
            	</div>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
            <div class="clear"></div>
            </div>
        </div><!--end .container--> 
</div>
<?php endif; ?>         
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php bloginfo('name'); ?> <?php esc_html_e('Design By ','skt-ayurveda');?>        
        <a href="<?php echo esc_url('https://www.sktthemes.org/shop/free-ayurveda-wordpress-theme/');?>" rel="noopener" target="_blank">
        <?php esc_html_e('SKT Ayurveda','skt-ayurveda'); ?>
        </a>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>