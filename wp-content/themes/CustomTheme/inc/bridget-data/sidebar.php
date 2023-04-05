<?php
?>

<div class="sidebar">
    <div class="logo">
        <a href="javascript:;">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/logo.png" alt="No Image">
        </a>
    </div>
    <div class="user-nav">
        <ul>
            <li class="active">
                <a href="<?php echo site_url();?>/account">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/home.png" alt="No Image">
						</span>
                    Dashboard
                </a>
            </li>
            <li class="have-child">
                <a href="javascript:;">User Management</a>
                <ul class="sub-dropdown">
                    <li>
                        <a href="<?php echo site_url();?>/user-management"">User Management</a>
                    </li>
                    <!-- <li>
                        <a href="<?php //echo site_url();?>/add-user">Add User</a>
                    </li> -->
                    <!--<li>-->
                    <!--    <a href="<?php //echo site_url();?>/user-edit-profile">User Edit Profile</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <a href="javascript:;">User Profile</a>-->
                    <!--</li>-->
                </ul>
            </li>
            <li class="have-child">
                <a href="javascript:;">Vendor</a>
                <ul class="sub-dropdown">
                    <li>
                        <a href="<?php echo site_url();?>/vendor-listing">Vendor Listing</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url();?>/vendor-approval-listing">Vendor Approval Listing</a>
                    </li>
                    
                    
                </ul>
            </li>
            <li class="have-child">
                <a href="javascript:;">Store</a>
                <ul class="sub-dropdown">
                    <li>
                        <a href="<?php echo site_url();?>/store-listing/"">Store Listing</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/inventory-management"">Inventory Management</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">Payment Log</a>
            </li>
            <li>
                <a href="javascript:;">Add Log</a>
            </li>
            <li>
                <a href="javascript:;">Settings</a>
            </li>
            <li>
                <a href="javascript:;">Feedback</a>
            </li>
            <li>
                <a href="javascript:;">Coupons</a>
            </li>
            <li>
                <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
            </li>
            
        </ul>
    </div>
</div>
