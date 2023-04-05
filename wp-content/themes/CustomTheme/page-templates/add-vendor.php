<?php
    /*
     * Template Name: Add Vendor
     */
?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Vendor - Bridget Harris</title>
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
                            <?php
                                // global $UM;
                                // print_r($UM);
                                // exit();
                            ?>
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
                            <h3>Add User</h3>
                            <form class="form" action="" method="post">
                                <div class="top-info edit_head">
                                    <h4>
                                        <div class="input-file field">
                                            <img id="file_upload" src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/user-img.png" alt="No Image" class="upload-img">
                                            <div class="input-file-upload">
                                                <span class="upload-label"><img src="<?php echo get_template_directory_uri(); ?>/inc/bridget-data/assets/images/camera.png"></span>
                                                <input type='file' onchange="readURL(this);" class="user-img" name="user_img" />
                                            </div>
                                        </div>
                                        <!-- User Id: 0083 -->
                                    </h4>
                                </div>
                                <div class="user-info">
                                    <ul>
                                        <li>
                                            <span class="label">Name:</span>
                                            <span class="txt input-field">
											<input type="text" class="form-control" name="user_name" placeholder="Jhone Doe" value="">
										</span>
                                        </li>
                                        <li>
                                            <span class="label">Email:</span>
                                            <span class="txt input-field">
											<input type="email" class="form-control" name="user_email" placeholder="johnjoe@gmail.com" value="">
										</span>
                                        </li>
                                        <!-- <li>
                                            <span class="label">Registration Date:</span>
                                            <span class="txt input-field">
											<input type="date" class="form-control" name="user_reg_date" placeholder="18 | 08 | 2022" value="">
										</span>
                                        </li> -->
                                        <li>
                                            <span class="label">Address:</span>
                                            <span class="txt input-field">
											<input type="text" class="form-control" name="user_address" placeholder="Taylor, MI 48180" value="">
										</span>
                                        </li>
                                        <li>
                                            <span class="label">User Name:</span>
                                            <span class="txt input-field">
											<input type="text" class="form-control" name="user_username" placeholder="Username" value="">
										</span>
                                        </li>
                                        <li>
                                            <span class="label">Password:</span>
                                            <span class="txt input-field">
											<input type="text" class="form-control" name="user_password" placeholder="Password" value="">
										</span>
                                        </li>
                                        <li>
                                            <span class="label">Phone:</span>
                                            <span class="txt input-field">
											<input type="text" class="form-control" name="user_phone" placeholder="000 111 2345" value="">
										</span>
                                        </li>
                                    </ul>
                                    <div class="input-submit">
                                        <input type="hidden" id="nonce" name="user_add_nonce" value="<?php echo wp_create_nonce('user_add_nonce'); ?>"/>
                                        <input type="submit" name="submit" value="<?php _e('Add User'); ?>" class="btn btn-custom">
                                    </div>
                                </div>
                            </form>
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
