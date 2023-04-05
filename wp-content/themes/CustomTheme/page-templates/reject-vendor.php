<?php
    /*
     * Template Name: Reject Vendor
     */
    $user_id = $_GET['vendor_id'];
    // update_field('approved' , 'No' , 'user_'. $user_id);
    update_field('ban_user' , 1 , 'user_'. $user_id);

    $u = new WP_User( $user_id );

    // Switch role
    $u->set_role( 'um_rejected-vendor' );

    wp_redirect(home_url().'/vendor-approval-listing//' );

    exit;

?>

