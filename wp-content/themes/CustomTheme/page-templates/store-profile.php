<?php
/*
 * Template Name: Store Profile
 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Store Profile - Bridget Harris</title>
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
					<div class="user-detail">
						<div class="notifications">
							<a href="javascript:;">
								<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/bell.png" alt="No Image">
							</a>
						</div>
						<div class="account-details">
							<a href="javascript:;">
								<span class="avatar">
									<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-avatar.png" alt="No Image">
								</span>
								Jhon Doe
							</a>
						</div>
					</div>
				</div>
				<div class="admin-startup store_profile">
					<h2>Store</h2>
					<div class="whiteBox list_table">
						<h3>Store A</h3>
						<div class="top-info">
							<h4><span class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-img.png" alt="No Image"></span><span class="txt">Vendor Id: 0083 <br>Vendor Name: Jhon Doe</span></h4>
						</div>
						<div class="store-detail">
							<div class="thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/store_thumb.png" alt="No Image">
							</div>
							<h3>Short Description</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
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
