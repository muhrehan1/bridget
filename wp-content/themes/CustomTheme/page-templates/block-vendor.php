<?php
    /*
     * Template Name: Block Vendor
     */
    $user_id = $_GET['vendor_id'];
    update_field('ban_user' , 1 , 'user_'. $user_id);
    wp_redirect('https://staging.designinternal.com/wp/bridget-harris/vendor-listing/' );
    exit;

?>


