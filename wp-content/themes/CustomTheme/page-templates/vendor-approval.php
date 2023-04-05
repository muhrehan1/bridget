<?php
/*
 * Template Name: Vendor Approval
 */
$user_id = $_GET['vendor_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Approval - Bridget Harris</title>
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
                <?php $user = get_user_by( 'id', $user_id );
                                // print_r($user->user_login);
                                // exit();
                                
                                
                                ?>
                <div class="admin-startup">
                    <h2>Vendor Management</h2>
                    <div class="whiteBox list_table">
                        <h3>Vendor Profile</h3>
                        <div class="top-info">
                            <h4><span class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-img.png" alt="No Image"></span>Vendor Id: <?php echo $user_id; ?></h4>
                            <div class="commission input-field">
                                <label form="commission">Admin Commission
                                    <input type="text" class="form-control" name="commission" placeholder="Set Commission">
                                </label>
                            </div>
                        </div>
                        <div class="user-info vendor">
                            <ul>
                                    <li>
                                        <span class="label">Name:</span>
                                        <span class="txt"><?php echo $user->first_name; ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Email:</span>
                                        <span class="txt"><?php echo $user->user_email; ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Registration Date:</span>
                                        <span class="txt"><?php echo $user->user_registered; ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Card No:</span>
                                        <span class="txt">**** **** **** ****</span>
                                    </li>
                                    <li>
                                        <span class="label">Username:</span>
                                        <span class="txt"><?php echo $user->user_login; ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Address:</span>
                                        <span class="txt"><?php echo get_field('address' , 'user_'.$user_id); ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Phone:</span>
                                        <span class="txt"><?php echo get_field('phone_number' , 'user_'.$user_id); ?></span>
                                    </li>
                                </ul>
                            <div class="actions">
                                <a href="<?php echo home_url(); ?>/accept-vendor/?vendor_id=<?php echo $user_id; ?>" class="btn btn-custom btn-custom_reverse">Accept</a>
                                <a href="<?php echo home_url(); ?>/reject-vendor/?vendor_id=<?php echo $user_id; ?>" class="btn btn-custom">Reject</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
        $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
    });
</script>

</body>
</html>
