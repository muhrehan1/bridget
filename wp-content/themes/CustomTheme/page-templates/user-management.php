<?php
/*
 * Template Name: User Management
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management - Bridget Harris</title>
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
                        <div class="top-info">
                            <h3>User Listing</h3>
                            <a href="javascript:;" class="btn btn-custom">Block User</a>
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
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Registration Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $incre_key = 1;
                                    $getusers = get_users();
                                    foreach($getusers as $key => $getuser){

                                        // echo '<pre>';
                                        // print_r($getuser);
                                        // exit();

                                        if($getuser->ID != 1 && $getuser->roles[0] != 'wcfm_vendor' && $getuser->roles[0] != 'disable_vendor'){
                                            
                                     
                                ?>
                            <tr>
                                <td><?php echo $incre_key++ ;?></td>
                                <td><?php echo $getuser->user_login; ?></td>
                                <td><?php echo $getuser->user_email; ?></td>
                                <td><?php echo $getuser->user_registered; ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="<?php echo home_url(); ?>/user-edit-profile/?user_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
                                        <a href="<?php echo home_url(); ?>/user-profile/?user_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
                                        <a href="<?php echo home_url(); ?>/block-user/?user_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
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
