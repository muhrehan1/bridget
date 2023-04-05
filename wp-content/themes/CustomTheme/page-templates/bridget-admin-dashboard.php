<?php
/*
 * Template Name: Admin Dashboard
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Bridget Harris</title>
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
                    <h2>Admin Dashboard</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="statbox">
                                <h3>Quick Stat</h3>
                                <div class="rangeBox">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="--value: 80"></div>
                                    <h4>Average Monthly Income</h4>
                                </div>
                                <div class="rangeBox clr-orange">
                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="--value: 90"></div>
                                    <h4>Average Yearly Income</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="statbox userBox bg_green">
                                <h4>Total Registered Users</h4>
                                <h3 class="count">
                                    <?php
                                    $totalUsers = count_users();
                                    echo $totalUsers['total_users'] ;
                                    ?>
                                </h3>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/users.png">
                                </div>
                            </div>
                            <div class="statbox userBox">
                                <h4>Total Registered Vendors</h4>
                                <h3 class="count">
                                    <?php
                                    $user_count_data = count_users();
                                    $avail_roles = $user_count_data['avail_roles'];
                                    $vendors = $avail_roles['wcfm_vendor'];
                                    echo  $vendors;
                                    ?>
                                </h3>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/vendors.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="whiteBox">
                        <h2>Revenue Generated Per Month</h2>
                        <div id="chart" class="chart"></div>
                    </div>
                    <div class="recent-orders">
                        <h2>Recent Orders</h2>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Order Id</th>
                                <th>Order Date</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Amount Paid</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            global $wpdb;
                            $recent_orders = $wpdb->get_results("SELECT wp_wc_order_product_lookup.order_id as p_order_id, wp_wc_order_stats.status, 
                            wp_wc_order_stats.date_created, wp_wc_order_stats.num_items_sold,
                            wp_wc_order_stats.total_sales,wp_wc_order_stats.tax_total,wp_wc_order_stats.shipping_total,
                            wp_wc_order_stats.net_total,wp_wc_order_stats.customer_id,wp_wc_order_product_lookup.product_id,
                            wp_wc_order_product_lookup.order_item_id,wp_wc_order_product_lookup.product_qty,wp_wc_order_product_lookup.product_net_revenue
                            FROM wp_wc_order_product_lookup
                            LEFT JOIN wp_wc_order_stats ON wp_wc_order_product_lookup.order_id = wp_wc_order_stats.order_id", OBJECT);
//                            echo "<pre>";
//                            print_r($recent_orders);
//                            exit;
                                $i= 1;
                            foreach ($recent_orders as $key=> $recent_order){
                            $date=date_create($recent_order->date_created);
                            $dateformat = date_format($date,"F j, Y");
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $recent_order->p_order_id; ?></td>
                                <td><?php echo $dateformat; ?></td>
                                <td><?php echo get_the_title($recent_order->product_id); ?></td>
                                <td><?php echo $recent_order->product_qty; ?></td>
                                <td><?php echo $recent_order->product_net_revenue; ?></td>
                                <td><?php
                                    if ($recent_order->status== 'wc-processing'){
                                        echo 'Processing';
                                    }elseif($recent_order->status == 'wc-refunded'){
                                        echo 'Refunded';
                                    }elseif($recent_order->status == 'wc-pending'){
                                        echo 'Pending';
                                    }elseif($recent_order->status == 'wc-completed'){
                                        echo 'Completed';
                                    }elseif($recent_order->status == 'wc-on-hold'){
                                        echo'On Hold';
                                    }elseif($recent_order->status == 'wc-cancelled'){
                                        echo'Cancelled';
                                    }elseif($recent_order->status == 'wc-failed'){
                                        echo 'Failed';
                                    }
                                    ?></td>
                                <td><a href="javascript:;" class="action">
                                        <img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png" alt="No Image">
                                    </a></td>
                            </tr>
                            <?php  } ?>
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

    var options = {
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 687,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>

</body>
</html>