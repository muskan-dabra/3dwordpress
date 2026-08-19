<?php
//about theme info
add_action( 'admin_menu', 'skt_organic_abouttheme' );
function skt_organic_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-organic'), esc_html__('About Theme', 'skt-organic'), 'edit_theme_options', 'skt_organic_guide', 'skt_organic_mostrar_guide');   
} 
//guidline for about theme
function skt_organic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-organic'); ?>
		   </div>
          <p><?php esc_html_e('SKT Organic Theme is a clean and eco friendly WordPress theme ideal for projects focused on sustainable living and natural growth. It suits websites promoting green practices like organic cultivation, chemical-free produce, regenerative agriculture, and holistic agriculture. With support for ecological methods, recycling, and conservation, this theme is perfect for those embracing bio farming, eco farming, and a greener nature future.','skt-organic'); ?></p>
          <a href="<?php echo esc_url(SKT_ORGANIC_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-organic'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_ORGANIC_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-organic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ORGANIC_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-organic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ORGANIC_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-organic'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_ORGANIC_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-organic'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>