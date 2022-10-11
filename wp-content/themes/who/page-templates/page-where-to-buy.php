

	<?php foreach ( $where as $post ):

		setup_postdata( $post ); ?>

		<?php $title = get_the_title();
		$address1    = get_field( 'address1' );
		$address2    = get_field( 'address2' );
		$address3    = get_field( 'address3' );
		$coordinates = get_field( 'map' );
		$lat = $coordinates['lat'];
		$lng = $coordinates['lng'];
		$storeData[] = compact( 'title', 'address1', 'address2','address3','coordinates', 'lat','lng' );?>

	<?php endforeach; ?>
	<?php
	// Reset the global post object so that the rest of the page works correctly.
	wp_reset_postdata(); ?>
