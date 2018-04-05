<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<!-- Logo -->
<div class="grid-x header-container">
	<div class="small-12 medium-6 cell logo">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mandela.png"/></a>
	</div>
	<div class="small-6 medium-3 cell">
		<div class="address-info">
			6316 N 30th St</br>
			Omaha, NE 68111</br></br>
			<a href="tel:4029911444">(402) 991-1444</a>
		</div>
	</div>
	<div class="small-6 medium-3 cell">
		<div class="hos-info">
			Head of School</br>
			Dr. Susan Toohey
		</div>
	</div>
</div>
<!-- Menu -->
<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left mobile-home">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logomobile.png"/></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
			</label>
			<button type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" />
		</form>
	</div>
	<div class="top-bar-right float-right show-for-small-only mobile-menu">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
		</ul>
	</div>
</div>
