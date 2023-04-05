<?php
/*
 * Template Name: Vendor Approval Listing
 */
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Approval Management - Bridget Harris</title>
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
                            <h3 style="margin-bottom: 10px;">Vendor Approval Listing</h3>
                            
                            <!-- <div class="dropdown_custom"> -->
                                <!-- <select name="vendor-list" class="form-control">
                                    <option>Select Vendors</option>
                                    <option selected>Rejected Vendors</option>
                                    <option>Rejected Vendors</option>
                                    <option>Rejected Vendors</option>
                                    <option>Rejected Vendors</option>
                                    <option>Rejected Vendors</option>
                                </select> -->
                            <!-- </div> -->
                        </div>
                        <div class="filter_sort">
                                <div class="action-filter">
                                    <a href="<?php echo home_url(); ?>/rejected-vendor-listing" class="btn btn-apply">Rejected Vendors</a>
                                </div>
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
                            <tbody>
                                <?php   
                                    $incre_key = 1;
                                    $getusers = get_users();
                                    foreach($getusers as $key => $getuser){

                                        $value = get_field('approved', 'user_'.$getuser->ID);

                                        // echo '<pre>';
                                        // print_r($value);
                                        // exit();

                                        if($getuser->ID != 1  && $getuser->roles[0] == 'disable_vendor'){
                                            
                                     
                                ?>
                                <tr>
                                    <td><?php echo $incre_key++ ;?></td>
                                    <td><?php echo $getuser->ID;?></td>
                                    <td><?php echo $getuser->user_login; ?></td>
                                    <td><?php echo $getuser->user_email; ?></td>
                                    <td><?php echo $getuser->user_registered; ?></td>
                                    <td>
                                        <div class="actions">
                                            <a href="<?php echo home_url(); ?>/vendor-approval/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
                                            <a href="<?php echo home_url(); ?>/accept-vendor/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/tick.png"></a>
                                            <a href="<?php echo home_url(); ?>/reject-vendor/?vendor_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/cross.png"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php  
                            }
                        }
                            ?>
                      
                         
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