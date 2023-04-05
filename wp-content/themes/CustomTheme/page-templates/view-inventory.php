<?php
/*
 * Template Name: View Inventory
 */
$product_id = $_GET['product_id'];
$product = wc_get_product( $product_id );

$product_name = $product->name;
$product_price = $product->price;
$product_stock = $product->stock_quantity;
$product_desc = $product->get_description();
$product_short_desc = $product->get_short_description();
$product_image = $product->get_image();
$product_total_sold = $product->get_total_sales();

$product_review_count = $product->get_review_count();
$product_rating_average = $product->get_average_rating();
$product_reviews_allowed = $product->get_reviews_allowed();

$product_attributes = $product->get_attributes();


$attachment_ids = $product->get_gallery_image_ids();


// echo '<pre>';
// print_r($product_reviews_allowed);
// exit();


// echo $product_id.",";
// $args = array ('post_type' => 'product', 'post_id' => $product_id);
// $comments = get_comments( $args );
// wp_list_comments( array( 'callback' => 'woocommerce_comments' ), $comments);

?>





<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>View Product - Bridget Harris</title>
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
						<h2 class="main-heading-product-view">Store</h2>
						<div class="admin-startup review_ratings product-view-head">
							<h4>Inventory Management</h4>
							<div class="product-view">
								<div class="container">
									<div class="row">
										<div class="col-7">
											<div class="product-img">
												<?php echo  $product_image ;?>
											</div>
											<div class="product-gallery d-flex">
                                                <?php

                                                foreach( $attachment_ids as $attachment_id )
                                                {
                                                    // Display the image URL
                                                    echo $Original_image_url = wp_get_attachment_url( $attachment_id );

                                                    // Display Image instead of URL
                                                    echo wp_get_attachment_image($attachment_id, 'full');

                                                }
                                                ?>
												<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/productimage.png" alt="">
												<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/productimage.png" alt="">
												<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/productimage.png" alt="">
												<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/productimage.png" alt="">
											</div>
										</div>
										<div class="col-5 products-details">
											<h2><?php echo $product_name; ?></h2>
											<span class="orange">Store Name</span>
											<p><?php echo $product_short_desc; ?></p>
											<span class="price">$<?php echo $product_price; ?>USD</span>
											
											<div class="sizes ">
												<?php
												foreach($product_attributes as $prod_att){
													
													$prod_att_name = $prod_att['name'];
													?>
													<div class="sizes d-flex">
														<span><?php echo $prod_att_name; ?></span>
														<ul class="d-flex size-list	">
															<?php
															$prod_att_options = $prod_att['options'];
															foreach($prod_att_options as $prod_att_options){
																?>
																<li><input data-image="xs" type="radio" id="<?php echo $prod_att_options; ?>" name="<?php echo $prod_att_name ; ?>" value="<?php echo $prod_att_options; ?>" checked><label for="<?php echo $prod_att_options; ?>"><?php echo $prod_att_options; ?></label></li>
																<?php
																
															
															}
															?>
														</ul>
													</div>
													<br>
													<?php
												}
												?>
											</div>
												
											<div class="stock-avaiable">
												<ul>
													<li><span>In Stock:</span><?php echo $product_stock; ?></li>
												</ul>
											</div>
											<div class="stock-sold">
												<ul>
													<li><span>Sold:</span><?php echo $product_total_sold; ?></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row specifications">
										<div class="container">
											<div class="col-12">
												<h3>Product Specifications</h3>
												<p><?php echo $product_desc; ?></p>
												<div class="review-ating-main d-flex">
													<div class="rating-points">
														<span>Rating & Reviews</span>
														<b><?php echo $product_rating_average; ?></b>
														<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														<span class="total-review"><?php echo $product_review_count; ?> Reviews</span>
													</div>
													<div class="progress-rating-total">
														<div class="rating-progress d-flex">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
														</ul>
														</div>
														<div class="progress">
														<progress id="file" value="25" max="25"> 32% </progress>
														</div>
													</div>
													<div class="rating-progress d-flex">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<div class="progress">
														<progress id="file" value="18" max="25"> 32% </progress>
														</div>
													</div>
													<div class="rating-progress d-flex">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<div class="progress">
														<progress id="file" value="14" max="25"> 32% </progress>
														</div>
													</div>
													<div class="rating-progress d-flex">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<div class="progress">
														<progress id="file" value="9" max="25"> 32% </progress>
														</div>
													</div>
													<div class="rating-progress d-flex">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<div class="progress">
														<progress id="file" value="4" max="25"> 32% </progress>
														</div>
													</div>
													</div>
													</div>
												<div class="clients-comment d-flex">
													<div class="col-2">
														<div class="customer-info">
															<img src="assets/images/user-avatar.png" alt="No Image">
															<h4>James Oliver</h4>
															<div id="datetime">
																18 | Nov | 2020
															</div>
														</div>
													</div>
													<div class="col-10">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor. </p>
													</div>
												</div>
												<div class="clients-comment d-flex">
													<div class="col-2">
														<div class="customer-info">
															<img src="assets/images/user-avatar.png" alt="No Image">
															<h4>James Oliver</h4>
															<div id="datetime">
																18 | Nov | 2020
															</div>
														</div>
													</div>
													<div class="col-10">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor. </p>
													</div>
												</div>
												<div class="clients-comment d-flex">
													<div class="col-2">
														<div class="customer-info">
															<img src="assets/images/user-avatar.png" alt="No Image">
															<h4>James Oliver</h4>
															<div id="datetime">
																18 | Nov | 2020
															</div>
														</div>
													</div>
													<div class="col-10">
														<div class="star">
															<ul class="stars-icons d-flex">
															<li><i class="fa-solid fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
															<li><i class="fa-regular fa-star"></i></li>
														</ul>
														</div>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor. </p>
													</div>
												</div>


												</div>
											</div>
										</div>
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
			// document.getElementById("current_date").innerHTML = Date('y/m/d');
		</script>
	</body>
</html>