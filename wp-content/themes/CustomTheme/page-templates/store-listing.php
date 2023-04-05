<?php
/**
 * Template Name: Store Listing
 */
?>
<?php
if ( !is_user_logged_in()) {
    wp_redirect( home_url(), 302 );
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store - Bridget Harris</title>
    <?php  require(get_template_directory() . '/inc/bridget-data/links.php'); ?>
</head>
<body>
<section class="user-dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <?php require(get_template_directory() . '/inc/bridget-data/sidebar.php');?>
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
                    <?php
                    require(get_template_directory() . '/inc/bridget-data/header.php');
                    ?>
                </div>
                <div class="admin-startup">
                    <h2>Store Management</h2>
                    <div class="whiteBox list_table">
                        <h3>Store Listing</h3>
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
                                <th>Vendor ID</th>
                                <th>Vendor Name</th>
                                <th>Store Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                                global $wpdb;
                                $total_store_listing = $wpdb->get_results("SELECT * FROM `wp_usermeta` WHERE `meta_key` = 'store_name';");
                                $incre_key = 1;
                                // echo '<pre>';
                                // print_r($total_store_listing);
                                // exit();
                                foreach($total_store_listing as $key => $t_vendor){

                                    $new_user = get_user_meta( $t_vendor->user_id );
                                // echo '<pre>';
                                // print_r($new_user['first_name'][0]);
                                // exit();
                            ?>

                            <tr>
                                <td><?php echo $incre_key++; ?></td>
                                <td><?php echo $t_vendor->user_id; ?></td>
                                <td><?php echo $new_user['first_name'][0]; ?></td>
                                <td><?php echo $t_vendor->meta_value; ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
                                        <a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
                                        <a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
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