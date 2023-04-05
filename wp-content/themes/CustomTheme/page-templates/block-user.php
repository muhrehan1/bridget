<?php
    /*
     * Template Name: Block User
     */
    $user_id = $_GET['user_id'];
    update_field('ban_user' , 1 , 'user_'. $user_id);
    wp_redirect('https://staging.designinternal.com/wp/bridget-harris/user-management/' );
    exit;

?>


