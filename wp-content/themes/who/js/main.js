
( function( $ ) {

	const $searchForm = $( '#search-form' );
	$searchForm.submit(function (e){
		e.preventDefault();

		//send ajax request
		$.ajax( {
			method: "POST",
			url: window.wp_ajax_url,
			type: 'post',
			data: {
				action: 'product_search',
				keyword: $searchForm.find('input[name=q]').val(),
				// nonce: ajax.nonce,
			},
			success: function ( data ) {
				console.log(data);
				return;
				const $data = $( '#data' );
				$data.show();
				$data.html( data );
			},
		} );
	});
	// eslint-disable-next-line func-call-spacing
}
	// eslint-disable-next-line no-undef
	( jQuery ) );

	( function( $ ) {

		const $filter = $('#filter');
		$filter.submit(function (e) {
			e.preventDefault();
			$.ajax({
				method: "POST",
				url: window.wp_ajax_url,
				type: 'post',
				data: {
					action: 'filter',
					keyword: $filter.find('button[name=category]').val(),
					// nonce: ajax.nonce,
				},
				success: function (data) {
					console.log(data);
					return;
					const $data = $('#data');
					$data.show();
					$data.html(data);
				},
			});
		});

// eslint-disable-next-line func-call-spacing
}
// eslint-disable-next-line no-undef
( jQuery ) );

//	=================================================================================================================

// jQuery('document').ready(function($) {
// 	// Google Maps
//
// 	function init() {
// 		// ***HERE I NEED TO PUT MY DATA***
// 		var mapdata = [(
// 			name:
// 			address:
// 			latlong:
// 		)]
// 	}
// })