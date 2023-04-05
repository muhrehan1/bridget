<?php
/*
 * Template Name: Edit Product
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product - Bridget Harris</title>
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
				<div class="storemain">
						<div class="row">
							<div class="col-md-12">
								<h1>Store</h1>
								<div class="inventory-main">
									<h2>Inventory Management</h2>
									<h3>Edit Product</h3>
									<main class="main_full">
											<div class="panel">
												<div class="button_outer">
													<div class="btn_upload">
														<input type="file" id="upload_file" name="">
														Upload Banner Image
													</div>
													<div class="processing_bar"></div>
													<div class="success_box"></div>
												</div>
											</div>
											<div class="error_msg"></div>											
									  		<h3>Base Image:</h3>
											<div class="uploaded_file_view" id="uploaded_view">	
												<span class="change-image"><a href="#">Change</a></span>
												<span class="file_remove">X</span>
											</div>
									</main>
									<div class="col multipleimages">
					        <form action="" method=""  class="add-image-form" enctype="multipart/for-data">
					        	<div class="addanother">
					        		<h3>Add Another</h3>
					        	</div>
									  <input type="file" id="files" name="files[]" multiple class="form-control"/>
									</form>
					      </div>

					      <div class="catedimenmain">
					      	<div class="catee">
					      		<h3>Select Category:</h3>
					      		<select name="category" class="form-control">
										  <option value="volvo" selected="selected">Select Category</option>
										  <option value="saab">Saab</option>
										  <option value="saab">Saab</option>
										</select>
					      	</div>
					      	<div class="specfication">
					      		<h3>Specifications:</h3>
					      		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor. </p>
					      	</div>
					      	<div class="specfication dimension">
					      		<h3>Dimensions:</h3>
									  <div class="row">
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Length</span>
									  				<input type="number" class="form-control" name="length" placeholder="length">	
									  			</label>
									  		</div>
									  	</div>
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Height</span>
									  				<input type="number" class="form-control" name="height" placeholder="height">	
									  			</label>
									  		</div>
									  	</div>
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Width</span>
									  				<input type="number" class="form-control" name="width" placeholder="width">	
									  			</label>
									  		</div>
									  	</div>
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Weight</span>
									  				<input type="number" class="form-control" name="weight" placeholder="weight">	
									  			</label>
									  		</div>
									  	</div>
									  </div>		      		
					      	</div>

					      	<div class="specfication dimension description">
					      		<h3>Description:</h3>
									  <div class="row">
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Title</span>
									  				<input type="number" class="form-control" name="title" placeholder="Product Name">	
									  			</label>
									  		</div>
									  	</div>
									  	<div class="col-md-6">
									  		<div class="dimensionnn">
									  			<label>
									  				<span>Price</span>
									  				<input type="number" class="form-control" name="height" placeholder="Price">	
									  			</label>
									  		</div>
									  	</div>
									  </div>		      		
					      	</div>

					      	<div class="specfication dimension description variations">
					      		<h3>Set Variations:</h3>									  
					      		<select name="variation" class="form-control">
										  <option value="volvo" selected="selected">Select Category</option>
										  <option value="saab">Saab</option>
										  <option value="saab">Saab</option>
										</select>										
										<div class="row nametyperow">
											<div class="col-md-6">
					      			<div class="dimensionnn">
									  			<label>
									  				<span>Name</span>
									  				<input type="name" class="form-control" name="length" placeholder="Name">	
									  			</label>
									  		</div>
					      		</div>					      		
					      		<div class="col-md-6">
					      			<div class="dimensionnn">
									  			<label>
									  				<span>Type</span>
									  				<input type="type" class="form-control" name="length" placeholder="Type">	
									  			</label>
									  		</div>
					      		</div>
										</div>
					      	</div>

					      	<div class="specfication dimension newrowadd">
					      		<table class="tablee">
									    <thead>
									      <tr>
									        <th>Label</th>
									        <th>Quantity</th>
									        <th></th>
									      </tr>
									    </thead>
									    <tbody id="table_body">
									      <tr>
									        <td>
									          <input type="text" class="form-control" placeholder="Small">
									        </td>
									        <td>
									          <input type="text" class="form-control" placeholder="Quantity">
									        </td>
									        <td>
									          <div class="action_container">
									            <button class="danger" onclick="remove_tr(this)">
									              <i class="fa fa-close"></i>
									            </button>
									          </div>
									        </td>
									      </tr>
									    </tbody>
									  </table> 
									  <div class="buttonsrow">
										  <div class="addbtn">
						            <button class="success btn btnnaddd">
						              Add New Row
						            </button>
						          </div>			
										  <div class="addbtn">
						            <button class="success btn btnadd" onclick="create_tr('table_body')">
						              Add New Option
						            </button>
						          </div>
									  </div>
					      	</div>

					      	<div class="specfication dimension description variations">
					      		<h3>Status:</h3>									  
					      		<select name="variation" class="form-control">
										  <option value="volvo" selected="selected">Active</option>
										  <option value="saab">Unactive</option>
										</select>													
									  <div class="addbtn">
					            <button class="success btn update">
					              Add New Product
					            </button>
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
windowsize = jQuery(window).width();
	 // if (windowsize >320) {
	 // 	jQuery(".add-image-form").insertAfter('.add-image-form .multipleimages .card');
	 // }
var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"img-thumb-wrapper card shadow\">" +
            "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove</span>" +
            "</div>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".img-thumb-wrapper").remove();
          });
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


var btnUpload = $("#upload_file"),
		btnOuter = $(".button_outer");
	btnUpload.on("change", function(e){
		var ext = btnUpload.val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			$(".error_msg").text("Not an Image...");
		} else {
			$(".error_msg").text("");
			btnOuter.addClass("file_uploading");
			setTimeout(function(){
				btnOuter.addClass("file_uploaded");
			},3000);
			var uploadedFile = URL.createObjectURL(e.target.files[0]);
			setTimeout(function(){
				$("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
			},3500);
		}
	});
	$(".file_remove").on("click", function(e){
		$("#uploaded_view").removeClass("show");
		$("#uploaded_view").find("img").remove();
		btnOuter.removeClass("file_uploading");
		btnOuter.removeClass("file_uploaded");
	});
	function create_tr(table_id) {
    let table_body = document.getElementById(table_id),
        first_tr   = table_body.firstElementChild
        tr_clone   = first_tr.cloneNode(true);

    table_body.append(tr_clone);

    clean_first_tr(table_body.firstElementChild);
}
function clean_first_tr(firstTr) {
    let children = firstTr.children;
    
    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x=>{
        if(x !== firstTr.lastElementChild)
        {
            x.firstElementChild.value = '';
        }
    });
}
function remove_tr(This) {
    if(This.closest('tbody').childElementCount == 1)
    {
        alert("You Don't have Permission to Delete This !");
    }else{
        This.closest('tr').remove();
    }
}

$(function(){
  $(".btnnaddd").on('click', function(){
    var ele = $(this).closest('.newrowadd').clone(true);
    $(this).closest('.newrowadd').after(ele);
  })
})


</script>

</body>
</html>