<?php
/*
 * Template Name: Order Logs
 */
$order_id = $_GET['order_id'];
$order = wc_get_order( $order_id );
$order_data = $order->get_data();
$user      = $order->get_user();

$order_date = $order_data['date_created']->date('d-m-Y');
$payment_method = $order_payment_method = $order_data['payment_method'];
$user_id = $order->get_user_id();
$user_email = $user->user_email;
$user_number = $order_data['billing']['phone'];

$first_name = $user->first_name;
$last_name = $user->last_name;

$billing_address = $order_data['billing']['address_1'];
$billing_city = $order_data['billing']['city'];
$billing_country = $order_data['billing']['country'];
$billing_state = $order_data['billing']['state'];
$billing_postcode = $order_data['billing']['postcode'];


$items = $order->get_items();
echo '<pre>';

foreach ( $items as $item_id => $item_data ) {

	$product_name = $item_data['name'];
	$product_quantity = $item_data['quantity'];
	$product_price = $item_data['price'];

	echo '<h4>RAW OUTPUT OF THE ORDER ITEM NUMBER: '. $item_id .'): </h4>';
	print_r($item_data);
	exit();
	echo '<br><br>';
	echo 'Item ID: ' . $item_id. '<br>';
	echo '$item_data["product_id"] <i>(product ID)</i>: ' . $item_data['product_id'] . '<br>';
	echo '$item_data["name"] <i>(product Name)</i>: ' . $item_data['name'] . '<br>';

	// Using get_item_meta() method
	echo 'Item quantity <i>(product quantity)</i>: ' . $order->get_item_meta($item_id, '_qty', true) . '<br><br>';
	echo 'Item line total <i>(product quantity)</i>: ' . $order->get_item_meta($item_id, '_line_total', true) . '<br><br>';
	echo 'And so on ……… <br><br>';
	echo '- - - - - - - - - - - - - <br><br>';
}

// echo '<pre>';
// print_r($user);
// exit();

?>
		<!DOCTYPE html>
		<html>
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Order Logs - Bridget Harris</title>
				<?php  require(get_template_directory() . '/inc/bridget-data/links.php'); ?>
			</head>
			<body>
				<section class="user-dashboard">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-2">
							<?php  require(get_template_directory() . '/inc/bridget-data/sidebar.php'); ?>
>
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
									<!-- <div class="user-detail">
										<div class="notifications">
											<a href="javascript:;">
												<img src="assets/images/bell.png" alt="No Image">
											</a>
										</div>
										<div class="account-details">
											<a href="javascript:;">
												<span class="avatar">
													<img src="assets/images/user-avatar.png" alt="No Image">
												</span>
												Jhon Doe
											</a>
										</div>
									</div> -->
									<?php  require(get_template_directory() . '/inc/bridget-data/header.php'); ?>

								</div>
								<div class="admin-startup store_profile order-logs">
									<h2>Order Log</h2>
									<div class="whiteBox list_table inventory-managment">
										<div class="order-log-info row">
											<h3>Order & Account Informations</h3>
											<div class="col-6">
												<h4>Order Information</h4>
												<ul class="order-info-list">
													<li>Order Date:<span>18 Jan, 2023</span></li>
													<li>Order Status:<span><label class="dropdown_custom">
														<select class="form-control" name="vendor-name">
															<option selected>Select</option>
															<option>Vendor A</option>
															<option>Vendor B</option>
															<option>Vendor C</option>
															<option>Vendor D</option>
															<option>Vendor E</option>
														</select>
													</label></span></li>
													<li>Order Id:<span>18 Jan, 2023</span></li>
													<li>Payment Method:<span>Abc</span></li>
												</ul>
											</div>
											<div class="col-6">
												<h4>Account Information</h4>
												<ul class="order-info-list">
													<li>User Name:<span>Rikkard Ambrose</span></li>
													<li>User Email:<span>rikkard@gmail.com</span></li>
													<li>User Phone:<span>(000) 111 23456</span></li>
													<li>User Id:<span>01</span></li>
												</ul>
											</div>
										</div>
										<div class="order-log-info row">
											<h3>Order & Account Informations</h3>
											<div class="col-6">
												<h4>Billing Address</h4>
												<ul class="addres-info">
													<li>Street:<span>Street</span></li>
													<li>City:<span>City</span></li>
													<li>Country:<span>Country</span></li>
													<li>State:<span>State</span></li>
													<li>Zip:<span>Zip</span></li>
												</ul>
											</div>
											<div class="col-6">
												<h4>Account Information</h4>
												<ul class="addres-info">
													<li>Street:<span>Street</span></li>
													<li>City:<span>City</span></li>
													<li>Country:<span>Country</span></li>
													<li>State:<span>State</span></li>
													<li>Zip:<span>Zip</span></li>
												</ul>
											</div>
										</div>
										<div class="row cart-details">
											<div class="col-8">
												<table class="cart-table">
													<tr>
														<th><strong>Product</strong></th>
														<th><strong>Quantity</strong></th>
														<th><strong>Unit Price</strong></th>
														<th><strong>Commision</strong></th>
													</tr>
													<tr>
														<td>
															<div class="cart-item-details d-flex">
																<img src="./assets/images/cam.png" alt="">
																<div class="det">
																	<span>Product Name</span>
																	<b>Store Name</b>
																	<p>Description</p>
																</div>
															</div>
														</td>
														<td>01</td>
														<td>$200.00</td>
														<td>$10</td>
													</tr>
												</table>
											</div>
											<div class="col-4">
												<div class="cart-total">
													<h5>Product total</h5>
													<ul>
														<li>Sub Total:<span>$475.00</span></li>
														<li>Tax:<span>$25.00</span></li>
														<li>Shipping Rates:<span>$25.00</span></li>
													</ul>
													<strong class="total">
													Total:<span>$500.00</span>
													</strong>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
					</div>
				</section>
			</body>
		</html>