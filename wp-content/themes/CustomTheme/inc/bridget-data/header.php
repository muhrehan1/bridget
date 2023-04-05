<?php
global $current_user;
$username =  $current_user->display_name;
?>

<div class="user-detail">
    <div class="notifications">
        <a href="javascript:;">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/bell.png" alt="No Image">
        </a>
    </div>
    <div class="account-details">
        <a href="javascript:;">
            <span class="avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-avatar.png" alt="No Image">
            </span>
           <?php
             echo $username;
           ?>

        </a>

    </div>
</div>
