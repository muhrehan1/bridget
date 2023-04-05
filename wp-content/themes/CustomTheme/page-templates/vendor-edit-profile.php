<?php
/*
 * Template Name: Vendor Edit Profile
 */

 $user_id = $_GET['vendor_id'];

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Edit Profile - Bridget Harris</title>
    <?php  require(get_template_directory() . '/inc/bridget-data/links.php'); ?>
</head>
<body>
<section class="user-dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <?php  require(get_template_directory() . '/inc/bridget-data/sidebar.php'); ?>
            </div>
            <div class="col-sm-12 col-md-10">
                <div class="user-head">
                    <div class="search-toggle">
                        <div class="toggler">
                            <button class="btn-toggle">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/toggle-icon.png" alt="No Image">
                            </button>
                        </div>
                        <div class="search_area">
                            <form class="form" method="" action="">
                                <div class="input-field">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </div>
                                <div class="input-submit">
                                <span class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/search-icon.png" alt="No Image">
                                </span>
                                    <input type="submit" name="submit" value="S">
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php  require(get_template_directory() . '/inc/bridget-data/header.php'); ?>
                </div>
                <div class="admin-startup">
                    <h2>User Management</h2>
                    <div class="whiteBox list_table">
                        <h3>User Profile</h3>
                        <form class="form" action="" method="POST">
                            <div class="top-info edit_head">
                                <h4>
                                    <div class="input-file field">
                                        <?php 
                                        // print_r(get_field('file' , 'user_'.$user_id)['url']);
                                        // exit();
                                        ?>
                                        <img id="file_upload" src="<?php echo get_field('file' , 'user_'.$user_id)['url']; ?>" alt="No Image" class="upload-img">
                                        <div class="input-file-upload">
                                            <span class="upload-label"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/camera.png"></span>
                                            <input type='file' onchange="readURL(this);" class="user-img" name="file" />
                                        </div>
                                    </div>
                                    User Id: <?php echo $user_id; ?>
                                </h4>
                            </div>
                            <div class="user-info">
                            <?php $user = get_user_by( 'id', $user_id );
                            // print_r($user->user_login);
                            // exit();
                            
                            
                            ?>
                                        <input type="hidden" class="form-control" name="user_cstm_id" placeholder="Name" value="<?php echo $user_id; ?>" >

                                <ul>
                                    <li>
                                        <span class="label">Name:</span>
                                        <span class="txt input-field">
                                        <input type="text" class="form-control" name="user_name" placeholder="Name" value="<?php echo $user->user_login; ?>" disabled>
                                    </span>
                                    </li>
                                    <li>
                                        <span class="label">Email:</span>
                                        <span class="txt input-field">
                                        <input type="email" class="form-control" name="user_email" placeholder="Email Address" value="<?php echo $user->user_email; ?>" disabled>
                                    </span>
                                    </li>
                                    <li>
                                        <span class="label">Registration Date:</span>
                                        <span class="txt input-field">
                                        <input type="text" class="form-control" name="user_reg_date" placeholder="Registration Date" value="<?php echo $user->user_registered; ?>" disabled>
                                    </span>
                                    </li>
                                    <li>
                                        <span class="label">Address:</span>
                                        <span class="txt input-field">
                                        <input type="text" class="form-control" name="user_address" placeholder="Address" value="<?php echo get_field('address' , 'user_'.$user_id); ?>">
                                    </span>
                                    </li>   
                                    <li>
                                        <span class="label">Phone:</span>
                                        <span class="txt input-field">
                                        <input type="text" class="form-control" name="user_phone" placeholder="Phone" value="<?php echo get_field('phone_number' , 'user_'.$user_id); ?>">
                                    </span>
                                    </li>
                                </ul>
                                <div class="input-submit">
                                    <input type="submit" name="submit" value="<?php _e('Update User'); ?>" class="btn btn-custom">
                                    <input type="hidden" id="nonce" name="user_update_nonce" value="<?php echo wp_create_nonce('user_update_nonce'); ?>"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php


?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
        $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#file_upload')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
