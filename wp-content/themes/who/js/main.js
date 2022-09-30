
( function( $ ) {

		// fetchData();


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


	// function fetchData() {
	//
	// 	if ( searchForm.length ) {
	// 		// const minLengthSearchQuery = 3;
	//
	// 		$( '#search-query' ).keyup( function() {
	// 			const value = $( this ).val();
	//
	// 			if ( value.length >= minLengthSearchQuery ) {
	// 				$.ajax( {
	// 					url: ajax.url,
	// 					type: 'post',
	// 					data: {
	// 						action: 'fetch_data',
	// 						keyword: value,
	// 						nonce: ajax.nonce,
	// 					},
	// 					success( data ) {
	// 						$( '#data' ).show();
	// 						$( '#data' ).html( data );
	// 					},
	// 				} );
	// 			} else {
	// 				$( '#data' ).empty();
	// 			}
	// 		} );
	// 	}
	// }
// eslint-disable-next-line func-call-spacing
}
// eslint-disable-next-line no-undef
( jQuery ) );
