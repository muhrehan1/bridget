<?php
    /*
     * Template Name: UnBlock Vendor
     */
    $user_id = $_GET['vendor_id'];
    update_field('ban_user' , '' , 'user_'. $user_id);
    wp_redirect('https://staging.designinternal.com/wp/bridget-harris/vendor-listing/' );
    exit;

?>


