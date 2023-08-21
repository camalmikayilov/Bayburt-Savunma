jQuery(document).ready(function($) {
    "use strict";
    //like button
    jQuery("a.like_button").click(function(e){
        e.preventDefault();
        var $this = jQuery(this);
        if(!$this.hasClass('like_active_button')) {
            //return;
        }
        var $parent = $this.parent();
        var id = $parent.data('id'),
            data = {
                action: 'add_like',
                security : MyAjax.security,
                pID: id
            };

        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        var post_result = $.post(MyAjax.ajaxurl, data, function(response) {
            $parent.html('<span class="like_button highlight"><i class="fa fa-check"></i></span>');
            jQuery('.votes_count_'+id).html(response);
        }).done(function() {

        }).fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        }).always(function() {
        });

    });
});