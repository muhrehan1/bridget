<?php
/*
 * Template Name: Add Category
 */
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Category Management - Bridget Harris</title>
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
					<h2>Store</h2>
					<div class="whiteBox list_table">						
						<h3>Add Category</h3>						
						<form class="form add_form" action="" method="post">
							<div class="user-info">
								<div class="txt-block">									
									<label>Category Name:</label>
									<span class="txt input-field">
										<input type="text" class="form-control" name="cat_name" placeholder="Enter Category Name">
									</span>
								</div>
								<div class="txt-block">									
									<label>Category Type:</label>
									<span class="txt input-field">
										<select class="form-control" name="cat_type">
										<?php
									// Taxonomy for product categories
									$taxonomy = 'product_cat';

									// Get parent product categories
									$parent_product_cats = get_terms( $taxonomy, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );

									// Iterating through each parent categories (WP_Term Objects)
									foreach ( $parent_product_cats as $product_cat_obj ) {
										$term_id = $product_cat_obj->term_id; // term ID
										$term_name = $product_cat_obj->name; // term Name
										$term_slug = $product_cat_obj->slug; // term slug
										if($term_id !=15){
								?>
										<option value="<?php echo $term_slug ?>" ><?php echo $term_name ?></option>
								<?php
										}
									}
									
								?>
										</select>
									</span>
								</div>
								<?php
$term = get_term_by('slug', 'product', 'category'); $name = $term->name;

									print_r ($term);
?>
								
								<div class="txt-block">									
									<label>Category Status:</label>
									<span class="txt input-field">
										<select class="form-control" name="cat_status">
											<option value="active">Active</option>
											<option value="inactive">Disabled</option>
										</select>
									</span>
								</div>
								
								<div class="input-submit">
									<!-- <input type="submit" name="submit" value="Add" class="btn btn-custom"> -->
                                    <input type="hidden" id="nonce" name="category_add_nonce" value="<?php echo wp_create_nonce('category_add_nonce'); ?>"/>
                                        <input type="submit" name="submit" value="<?php _e('Add'); ?>" class="btn btn-custom">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php





?>

<script type="text/javascript">
	$(document).ready(function () {
	    $('#example').DataTable();
	    $('.dataTables_wrapper .dataTables_filter input').attr('placeholder',"Search");
	});
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#file_upload')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>