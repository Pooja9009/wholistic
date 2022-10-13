<?php

global $storeData;
if ( count( $storeData ) ): ?>
    <div class="locations">
		<?php foreach ( $storeData as $singleStore ): ?>
            <div class="location-details" id="store-<?= $singleStore['ID'] ?>"
                 data-lat="<?php echo esc_attr( $singleStore['lat'] ); ?>"
                 data-lng="<?php echo esc_attr( $singleStore['lng'] ); ?>" data-radius="">
				<?= $singleStore['title'] ?>
				<?= $singleStore['address1'] ?>
				<?= $singleStore['address2'] ?>
				<?= $singleStore['address3'] ?>
                <p>446.7 km</p>
                <p class="direction">Directions</p>
            </div>
		<?php endforeach; ?>
    </div>
<?php endif; ?>



