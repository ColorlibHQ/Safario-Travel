<?php 
	$id     = get_the_ID();
	$bgopt  = get_post_meta( absint( $id ), '_safariotravel_builderpage_headerimg', true );

	$glob_class = ' global-banner';
	$setbgurl   = '';

	if ( $bgopt == 'featured' ) {
		$setbgurl  = get_the_post_thumbnail_url( absint( $id ) );
		$glob_class = '';
	}
	$pageSubTitle = get_post_meta( get_queried_object_id(), 'page_subtitle_meta', true);

	?>
	<section class="hero-banner-sm magic-ball magic-ball-banner <?php echo esc_attr( $glob_class  ); ?>" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
		<?php 
		if( safariotravel_opt( 'safariotravel-headeroverlay-toggle-settings', true ) ) {
			echo '<div class="overlay overlay-bg"></div>';
		}
		?>
		
		<div class="container">
			<div class="hero-banner-sm-content">
				
				<?php 
				if ( is_archive() ) {
					the_archive_title('<h1>', '</h1>');
				} elseif ( is_home() ) {
					echo '<h1>'.esc_html__( 'Blog', 'safariotravel' ).'</h1>';
				}
				elseif( is_single() ){
					echo '<h1>'.esc_html__( 'Blog Single', 'safariotravel' ).'</h1>';
				}
				elseif ( is_search() ) {
					echo '<h1>'.esc_html__( 'Search Result', 'safariotravel' ).'</h1>';
				} else {
					the_title( '<h1>', '</h1>' );
				} 
				
				//Page Sub Title
				if( $pageSubTitle ){
					echo '<p>'. esc_html( $pageSubTitle ) .'</p>';
				}
				
				?>
				
			</div>
		</div>
	</section>
