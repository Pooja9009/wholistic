 
 
 function fetchposts() {

    var ajaxurl = "<?php admin_url('admin-ajax.php');?>";

        var postdata = "action = get_products()";

        jQuery.post(ajaxurl, postdata, function (response) {

            console.log(response);
            $("#postcontainer").html(response);
            
        });

}