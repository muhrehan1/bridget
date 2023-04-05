<?php
    /*
     * Template Name: Accept Vendor
     */
    $user_id = $_GET['vendor_id'];
    update_field('approved' , 'Yes' , 'user_'. $user_id);
    update_field('ban_user' , '' , 'user_'. $user_id);

    $u = new WP_User( $user_id );

    // Switch role
    $u->set_role( 'wcfm_vendor' );

    wp_redirect(home_url().'/vendor-approval-listing//' );
    exit;

?>

