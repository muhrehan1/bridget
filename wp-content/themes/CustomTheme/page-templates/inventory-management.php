<?php
/*
 * Template Name: Inventory Management
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management - Bridget Harris</title> 
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
                    <h2>Inventory Management</h2>
                    <div class="whiteBox list_table">
                        <div class="top-info">
                            <h3>Inventory Management</h3>
                            <!-- <a href="javascript:;" class="btn btn-custom">Block User</a> -->
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
                                <th>Vendor Name</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Availability Status</th>
                                <th>Currently in Stock</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    global $wpdb;
                                    $total_vendor_product = $wpdb->get_results("SELECT * FROM `wp_wcfm_marketplace_store_taxonomies`");
                                    // echo '<pre>';
                                    
                                    $incre_key = 1;
                                    // $getusers = get_users();
                                    foreach($total_vendor_product as $key => $t_prod){
                                    //     if($getuser->ID != 1){
                                        $vendor_id = $t_prod->vendor_id;
                                        $product_id = $t_prod->product_id;
                                        $term_id = $t_prod->term;

                                        $product_name = get_the_title( $product_id );

                                        $vendor = get_user_by( 'id', $vendor_id );
                                        $vendor_name = $vendor->user_nicename;

                                        $_product = wc_get_product( $product_id );
                                        $product_price = $_product->get_price();

                                         $term = get_term_by( 'id', $term_id, 'product_cat' ) ;
                                         $category_name = $term->name;
                                         
                                         $product_stock = $_product->sku;

                                         $product_status = $_product->status;
                                        

                                        // print_r($_product);
                                        // exit();

                                     
                                ?>
                            <tr>
                                <td><?php echo $incre_key++ ;?></td>
                                <td><?php echo $vendor_name; ?></td>
                                <td><?php echo $product_name; ?></td>
                                <td><?php echo $category_name; ?></td>
                                <td><?php echo $product_price; ?>$</td>
                                <td><?php echo ($product_stock >= 1) ? 'in stock' : 'sold out'; ?></td>
                                <td><?php echo $product_stock; ?></td>
                                <td><?php echo ($product_status >= 'publish') ? 'Active' : 'Inactive'; ?></td>
                                <td>
                                    <div class="actions">
                                    <div class="actions">
                                        <a href="<?php echo home_url(); ?>/view-inventory/?product_id=<?php echo $product_id; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
                                        <a href="<?php echo home_url(); ?>/block-user/?user_id=<?php echo $getuser->ID; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/star.png"></a>
                                        <a href="<?php echo home_url(); ?>/edit-inventory-management/?product_id=<?php echo $product_id; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <?php  
                            // }
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
