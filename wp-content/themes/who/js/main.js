
// jQuery(function($){
//     $('.page-id-12 #searchform').on('submit', function(e){
//             e.preventDefault();
//             var postData = {
//                 'action' : 'ajax_fetch',
//                 'searchTerm' : $(this).find('input#search').val(),
//                 'category' : //get the id of the active selected category       
//             };
//             $.ajax(//send dta to url
//              done:function(data){

//             })
//     });

// });
$('#productPageSearch form').submit(function (e) {
    e.preventDefault();
    var $search = $.trim($(this).find('input[name="s"]').val());
    if ($search.length > 0) {
        window.productAjaxSearch = $search;
        window.productAjaxPage = 1;
        var $category = 'All';
        if ($('#menu-concern-menu li.active').length > 0) {
            $category = $.trim($('#menu-concern-menu li.active a').attr('href'));
        }
        var data = {
            'action': 'ajax_load_more_products',
            'page': window.productAjaxPage,
            'search': window.productAjaxSearch,
            'category': $category,
        };
        if (!window.doingProductAjax) {
            window.doingProductAjax = true;
            window.productAjaxScroll = true;
            $.post(divi.ajaxurl, data, function (response) {
                if (response !== 'NULL') {
                    $('.et_pb_ajax_pagination_container').html(response);
                    window.productAjaxPage++;
                } else {
                    $('.et_pb_ajax_pagination_container').html('<p>No products found matching your search term. <a href="' + divi.productPage + '">Browse all products</a></p>');
                }
                window.doingProductAjax = false;
            });
        }
    }
});