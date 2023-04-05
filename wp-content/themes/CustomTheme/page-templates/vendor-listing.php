<?php
/*
 * Template Name: Vendor Listing
 */
if (! is_user_logged_in()){
    wp_redirect(home_url(),302);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Management - Bridget Harris</title>
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
                    <h2>Vendor Management</h2>
                    <div class="whiteBox list_table">
                        <div class="top-info">
                            <h3>Vendor Listings</h3>
                            <a href="javascript:;" class="btn btn-custom">Block Vendor</a>
                        </div>
                        <div class="filter_sort">
                            <div class="fields">
                                <h4>Sort By:</h4>
                                <label>
                                    From
                                    <input type="date" name="from" class="form-control">
                                </label>
                                <label>
                                    To
                                    <input type="date" name="to" class="form-control">
                                </label>
                            </div>
                            <div class="action-filter">
                                <button class="btn btn-apply">Apply</button>
                                <button class="btn btn-clear">Clear</button>
                            </div>
                        </div>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Vendor Id</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Registration Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            </thead>
                            <tbody>
                                <?php 
                                    $incre_key = 1;
                                    $getusers = get_users();
                                    foreach($getusers as $key => $getuser){
                                        $ban_user = get_field('ban_user','user_'. $getuser->ID);
                                        // echo '<pre>';
                                        // print_r($ban_user);
                                        // exit();

                                        if($getuser->ID != 1 && ($getuser->roles[0] == 'wcfm_vendor' || $getuser->roles[0] == 'disable_vendor')){
                                            
                                     
                                ?>
                            <tr>
                                <td><?php echo $incre_key++ ;?></td>
                                <td><?php echo $getuser->ID;?></td>
                                <td><?php echo $getuser->user_login; ?></td>
                                <td><?php echo $getuser->user_email; ?></td>
                                <td><?php echo $getuser->user_registered; ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="<?php echo home_url(); ?>/vendor-profiles/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
                                        <a href="<?php echo home_url(); ?>/vendor-edit-profile/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
                                        <?php
                                        if($ban_user == '1'){
                                        ?>
                                        <a href="<?php echo home_url(); ?>/unblock-vendor/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/unblock-icon.png"></a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <a href="<?php echo home_url(); ?>/block-vendor/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </td>
                            </tr>
                            <?php  }} ?>
                      
                         
                            </tbody>
                        </table>
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
