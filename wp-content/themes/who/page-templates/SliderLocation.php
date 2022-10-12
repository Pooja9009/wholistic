	<?php
	$storeData = [];
	$where     = get_field( 'location' );
	if ( $where ): ?>
        <div class="locations">
            <div class="location-details" data-lat="<?php echo esc_attr($where['lat']); ?>" data-lng="<?php echo esc_attr($where['lng']); ?>"  >

				<?php foreach ( $where as $post ):

					setup_postdata( $post ); ?>

					<?php $title = get_the_title();
					$address1    = get_field( 'address1' );
					$address2    = get_field( 'address2' );
					$address3    = get_field( 'address3' );
					$coordinates = get_field( 'map' );
//		var_dump($coordinates);
					$lat = $coordinates['lat'];
					$lng = $coordinates['lng'];

//		The compact() function creates an array from variables and their values.
					$storeData[] = compact( 'title', 'address1', 'address2','address3','coordinates', 'lat','lng' );?>

				<?php endforeach; ?>
				<?php
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
                <p>446.7 km</p>
                <p class="direction">Directions</p>
            </div>
        </div>

	<?php endif; ?>



