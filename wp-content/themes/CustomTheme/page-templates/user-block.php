<?php
/*
 * Template Name: User Block
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Block - Bridget Harris</title>
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
							<h3>User Profile</h3>
							<a href="javascript:;" class="btn btn-custom">Block User</a>
						</div>
						<div class="top-info">
							<h4><span class="img"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-img.png" alt="No Image"></span>User Id: 0083</h4>
							<a href="javascript:;" class="simple-link">Send Reset Password Link</a>
						</div>
						<div class="user-info">
							<ul>
								<li>
									<span class="label">Name:</span>
									<span class="txt">Jhon Doe</span>
								</li>
								<li>
									<span class="label">Email:</span>
									<span class="txt">johnjoe@gmail.com</span>
								</li>
								<li>
									<span class="label">Registration Date:</span>
									<span class="txt">18 | 08 | 2022</span>
								</li>
								<li>
									<span class="label">Address:</span>
									<span class="txt">Taylor, MI 48180</span>
								</li>
								<li>
									<span class="label">Phone:</span>
									<span class="txt">000 111 2345</span>
								</li>
							</ul>
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
					        	<tr>
					        		<td>1</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>2</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>3</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>4</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>5</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>6</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>7</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>8</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>9</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>10</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>11</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>12</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>13</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>14</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>15</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
					        	<tr>
					        		<td>16</td>
					        		<td>Jhon Doe</td>
					        		<td>jhondoe@gmail.com</td>
					        		<td>18 | 08 | 2022</td>
					        		<td>
					        			<div class="actions">
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/edit-icon.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/eye.png"></a>
					        				<a href="javascript:;" class="edit"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/block-icon.png"></a>
					        			</div>
					        		</td>
					        	</tr>
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