<?php
/*
 * Template Name: Orders
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orders - Bridget Harris</title>
	<?php  require(get_template_directory() . '/inc/bridget-data/links.php'); ?>

</head>

<style>
	.tabcontent {
  display: none;
	}
</style>
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
				<div class="admin-startup store_profile">
					<h2>Orders</h2>
					<div class="whiteBox list_table">
						<h3>Order Log</h3>
						<div class="filter_sort">
							<div class="fields">
								<h4>Sort By:</h4>
								<label class="dropdown_custom">From
									<!-- <select class="form-control" name="vendor-name">
										<option selected>All Vendor</option>
										<option>Vendor A</option>
										<option>Vendor B</option>
										<option>Vendor C</option>
										<option>Vendor D</option>
										<option>Vendor E</option>
									</select> -->
									<input type="date" id="birthday" name="birthday">
								</label>
								<label class="dropdown_custom">To <input type="date" id="birthday" name="birthday">
									<!-- <select class="form-control" name="vendor-name">
										<option selected>All Category</option>
										<option>Vendor A</option>
										<option>Vendor B</option>
										<option>Vendor C</option>
										<option>Vendor D</option>
										<option>Vendor E</option>
									</select> -->
								</label>
								<!-- <label class="dropdown_custom">
									<select class="form-control" name="vendor-name">
										<option selected>Availability Status</option>
										<option>Vendor A</option>
										<option>Vendor B</option>
										<option>Vendor C</option>
										<option>Vendor D</option>
										<option>Vendor E</option>
									</select>
								</label> -->
							</div>
							<div class="action-filter">
								<button class="btn btn-apply">Apply</button>
								<button class="btn btn-apply">Clear</button>
							</div>
						</div>
						<div class=" filter_sort ">
							<div class="row order-row d-flex action-filter">
								<button class="btn btn-apply tablinks" onclick="openCity(event, 'pendnig')">Pending Orders</button>
								<button class="btn btn-apply tablinks" onclick="openCity(event, 'inprocess')">In Process Orders</button>
								<button class="btn btn-apply tablinks" onclick="openCity(event, 'delivered')">Delivered Orders</button>
								<button class="btn btn-apply tablinks" onclick="openCity(event, 'refunded')">Refunded Orders</button>
							</div>
						</div>
						<div>

						</div>
						<!-- <div class="top-info">
							<h4><span class="img"><img src="assets/images/user-img.png" alt="No Image"></span><span class="txt">Vendor Id: 0083 <br><a href="javascript:;" class="edit-link">View Profile</a></span></h4>
						</div> -->
						<div id="pendnig" class="tabcontent">
							<table id="example" class="display inventory_table" style="width:100%">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Order</th>
										<th>Date</th>
										<th>Title</th>
										<th>Quantity</th>
										<th>Paid</th>
										<th>Order Status</th>
										<th>Payment Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php
										$query = new WC_Order_Query( array(
											'limit' => -1,
											'orderby' => 'date',
											'order' => 'DESC',
										) );
										$orders_id = $query->get_orders();

										foreach ($orders_id as $order_id):
											
										$order_amount = $order_id->total;
										$order_status = $order_id->status;
										$order_date = $order_id->order_date;
										$orderid = $order_id->get_id();
										$payment_status = 'paid';
										// echo '<pre>';
										// print_r($order_id);
										// exit();
										$items_loop =$order_id->get_items();
										foreach($items_loop as $item){

											$product_name = $item->get_name();
											$product_quantity = $item->get_quantity();
										}

										if($order_status =='pending'){
										$incre = 1;

									?>
									<tr>
										<td><?php echo $incre ?></td>
										<td><?php echo $orderid ?></td>
										<td><?php echo $order_date ?></td>
										<td><?php echo $product_name ?></td>
										<td><?php echo $product_quantity ?></td>
										<td><?php echo $order_amount ?></td>
										<td><?php echo $order_status ?></td>
										<td><?php echo $payment_status ?></td>
										<!-- <td>Active</td> -->
										<td>
										<a href="<?php echo home_url(); ?>/order-logs/?order_id=<?php echo $orderid; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
										</td>
									</tr>
									<?php

										$incre++;
										}
										endforeach;
									?>
									
								</tbody>
							</table>
						</div>
						<div id="inprocess" class="tabcontent">
							<table id="example1" class="display inventory_table" style="width:100%">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Order</th>
										<th>Date</th>
										<th>Title</th>
										<th>Quantity</th>
										<th>Paid</th>
										<th>Order Status</th>
										<th>Payment Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php
										$query = new WC_Order_Query( array(
											'limit' => -1,
											'orderby' => 'date',
											'order' => 'DESC',
										) );
										$orders_id = $query->get_orders();

										foreach ($orders_id as $order_id):
											
										$order_amount = $order_id->total;
										$order_status = $order_id->status;
										$order_date = $order_id->order_date;
										$orderid = $order_id->get_id();
										$payment_status = 'paid';
										// echo '<pre>';
										// print_r($order_id);
										// exit();
										$items_loop =$order_id->get_items();
										foreach($items_loop as $item){

											$product_name = $item->get_name();
											$product_quantity = $item->get_quantity();
										}
										if($order_status =='processing'){
											$incre1 = 1;

									?>
									<tr>
										<td><?php echo $incre1 ?></td>
										<td><?php echo $orderid ?></td>
										<td><?php echo $order_date ?></td>
										<td><?php echo $product_name ?></td>
										<td><?php echo $product_quantity ?></td>
										<td><?php echo $order_amount ?></td>
										<td><?php echo $order_status ?></td>
										<td><?php echo $payment_status ?></td>
										<!-- <td>Active</td> -->
										<td>
										<a href="<?php echo home_url(); ?>/order-logs/?order_id=<?php echo $orderid; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>

										</td>
									</tr>
									<?php
										}

									$incre1++;
									endforeach;
									?>
									
								</tbody>
							</table>
						</div>
						<div id="delivered" class="tabcontent">
							<table id="example2" class="display inventory_table" style="width:100%">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Order</th>
										<th>Date</th>
										<th>Title</th>
										<th>Quantity</th>
										<th>Paid</th>
										<th>Order Status</th>
										<th>Payment Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php
										$query = new WC_Order_Query( array(
											'limit' => -1,
											'orderby' => 'date',
											'order' => 'DESC',
										) );
										$orders_id = $query->get_orders();

										foreach ($orders_id as $order_id):
											
										$order_amount = $order_id->total;
										$order_status = $order_id->status;
										$order_date = $order_id->order_date;
										$orderid = $order_id->get_id();
										$payment_status = 'paid';
										// echo '<pre>';
										// print_r($order_id);
										// exit();
										$items_loop =$order_id->get_items();
										foreach($items_loop as $item){

											$product_name = $item->get_name();
											$product_quantity = $item->get_quantity();
										}
										if($order_status =='completed'){
											$incre2 = 1;

									?>
									<tr>
										<td><?php echo $incre2 ?></td>
										<td><?php echo $orderid ?></td>
										<td><?php echo $order_date ?></td>
										<td><?php echo $product_name ?></td>
										<td><?php echo $product_quantity ?></td>
										<td><?php echo $order_amount ?></td>
										<td><?php echo $order_status ?></td>
										<td><?php echo $payment_status ?></td>
										<!-- <td>Active</td> -->
										<td>
										<a href="<?php echo home_url(); ?>/order-logs/?order_id=<?php echo $orderid; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>

										</td>
									</tr>
									<?php
										}
									$incre2++;
									endforeach;
									?>
									
								</tbody>
							</table>
						</div>
						<div id="refunded" class="tabcontent">
							<table id="example3" class="display inventory_table" style="width:100%">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Order</th>
										<th>Date</th>
										<th>Title</th>
										<th>Quantity</th>
										<th>Paid</th>
										<th>Order Status</th>
										<th>Payment Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php
										$query = new WC_Order_Query( array(
											'limit' => -1,
											'orderby' => 'date',
											'order' => 'DESC',
										) );
										$orders_id = $query->get_orders();

										foreach ($orders_id as $order_id):
											
										$order_amount = $order_id->total;
										$order_status = $order_id->status;
										$order_date = $order_id->order_date;
										$orderid = $order_id->get_id();
										$payment_status = 'paid';
										// echo '<pre>';
										// print_r($order_id);
										// exit();
										$items_loop =$order_id->get_items();
										foreach($items_loop as $item){

											$product_name = $item->get_name();
											$product_quantity = $item->get_quantity();
										}
										if($order_status =='refunded'){
											$incre3 = 1;

									?>
									<tr>
										<td><?php echo $incre3 ?></td>
										<td><?php echo $orderid ?></td>
										<td><?php echo $order_date ?></td>
										<td><?php echo $product_name ?></td>
										<td><?php echo $product_quantity ?></td>
										<td><?php echo $order_amount ?></td>
										<td><?php echo $order_status ?></td>
										<td><?php echo $payment_status ?></td>
										<!-- <td>Active</td> -->
										<td>
										<a href="<?php echo home_url(); ?>/order-logs/?order_id=<?php echo $orderid; ?>" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>

										</td>
									</tr>
									<?php
										}
									$incre3++;
									endforeach;
									?>
									
								</tbody>
							</table>
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
	    $('.inventory_table .open_action').on('click',function(){
		    $(this).parent('td').find('.actions').fadeToggle(300);
		})
	});
	$(document).ready(function () {
	    $('#example1').DataTable();
	    $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
	    $('.inventory_table .open_action').on('click',function(){
		    $(this).parent('td').find('.actions').fadeToggle(300);
		})
	});
	$(document).ready(function () {
	    $('#example2').DataTable();
	    $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
	    $('.inventory_table .open_action').on('click',function(){
		    $(this).parent('td').find('.actions').fadeToggle(300);
		})
	});
	$(document).ready(function () {
	    $('#example3').DataTable();
	    $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
	    $('.inventory_table .open_action').on('click',function(){
		    $(this).parent('td').find('.actions').fadeToggle(300);
		})
	});

	function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>