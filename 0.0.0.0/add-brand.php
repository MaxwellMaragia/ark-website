<?php
  require('session.php');
  require('brandActions.php');
  include 'views/nav_header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Brand</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		  <div class="container-fluid">
		    <div class="row">
		      
		      <div class="col-md-6 mb-2" style="margin-top: -10px;">
		      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                  Add brand
                </button>
              </div>

		      <div class="col-md-12">

		        <div class="card">

		          <div class="card-body">
		          	<?php if(isset($_SESSION['response'])){ ?>
				     <div class="alert alert-<?=$_SESSION['res_type']?> alert-dismissible">
				      <button type="button" class="close" data-dismiss="alert">&times;</button>
				      <?=$_SESSION['response']?>
				     </div>
				    <?php } unset($_SESSION['response']); ?>
              	    <table id="table_brands" class="table table-bordered table-striped">
              	    	<thead>
		                <tr>
		                  <th>Image</th>
		                  <th>Link</th>
		                  <th>Actions</th>
		                </tr>
		                </thead>
		                <tbody>
		                 <?php
                          $brand = $db->get('tbl_brands');
                          foreach ($brand as $row)
                          {
                          	$id = $row['id'];
                          	?>
                            <tr>
                            <td><img src="<?php echo $row['logo']; ?>" width="50"></td>
                            <td><?php echo $row['link']; ?></td>
                            <td>
		                  	<a href="#edit<?=$id?>" data-toggle="modal"><button type="button" class="btn btn-default btn-sm"><span class="fa fa-edit"></span></button></a> |
				            <a href="#delete<?=$id?>" data-toggle="modal"><button type="button" class="btn
				            btn-default btn-sm"><span class="fa fa-trash"></span></button></a>
		                  	</td>
		                    </tr>
		                    <!-- edit modal -->
		                    <div class="modal fade" id="edit<?=$id?>">
						    <div class="modal-dialog">
						      <form method="POST" id="edit_form" enctype="multipart/form-data">
						      <div class="modal-content">
						        <div class="modal-header">
						          <h4 class="modal-title">Edit brand</h4>
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">&times;</span>
						          </button>
						        </div>
						        <div class="modal-body">
						          <div class="form-group">
						      		<input type="hidden" name="key" class="form-control" value="<?=$id?>">
						      	  </div>
						          <div class="form-group">
					                <label for="exampleInputEmail1">Link</label>
					                <input type="text" name="updatelink" class="form-control" value="<?php echo $row['link']; ?>">
					              </div>
					              <div class="form-group">
					                <label for="exampleInputFile">Logo</label>
					                  <div class="custom-file">
					                      <input type="file" name="updateimage" class="custom-file-input" id="customFile">
					                      <label class="custom-file-label" for="customFile">Choose file</label>
					                      <img src="<?php echo $row['logo']; ?>" width="100" class="img-thumbnail">
					                      <input type="hidden" name="oldimage" value="<?=$row['logo']?>">
					                  </div>
					              </div>
						        </div>
						        <div class="modal-footer justify-content-between">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          <button type="submit" name="btn_update" id="btn_update" class="btn btn-primary">Save changes</button>
						        </div>
						      </div>
						      <!-- /.modal-content -->
						  	 </form>
						    </div>
						    <!-- /.modal-dialog -->
						   </div>
						   <!-- /. edit modal -->

						   <!-- delete modal -->
                           <div class="modal fade" id="delete<?=$id?>">
						    <div class="modal-dialog">
						      <form method="POST" id="delete_form">
						      <div class="modal-content">
						        <div class="modal-header">
						          <h4 class="modal-title">Delete brand</h4>
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">&times;</span>
						          </button>
						        </div>
						        <div class="modal-body">
						          <div class="alert alert-danger" role="alert">
				                    Confirm deleting this brand ?
				                  </div>
					              <div class="form-group">
					              	<input type="hidden" name="deletekey" class="form-control" value="<?=$id?>">
					              	<input type="hidden" name="imagepath" value="<?=$row['logo']?>">
					              </div>
						        </div>
						        <div class="modal-footer justify-content-between">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          <button type="submit" name="btn_delete" id="btn_delete" class="btn btn-danger">Delete</button>
						        </div>
						      </div>
						      <!-- /.modal-content -->
						  	 </form>
						    </div>
						    <!-- /.modal-dialog -->
						   </div>
						   <!-- /. delete modal -->

                          	<?php
                          }
		                 ?>
		                </tbody>
              	    </table>
              	  </div>
                 
		        </div>
		        <!-- /.card -->

		        </div>
		      <!--/.col -->
		    </div>
		    <!-- /.row -->
		  </div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->

	<div class="modal fade" id="add">
	    <div class="modal-dialog modal-lg">
	      <form method="POST" id="b_form" enctype="multipart/form-data">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 class="modal-title">Add brand</h4>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	        <div class="modal-body">
	          <div class="form-group">
                <label for="exampleInputFile">Select logo</label>
                  <div class="custom-file">
                      <input type="file" name="image" id="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
              </div>
	          <div class="form-group">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="link" id="link" class="form-control" placeholder="Enter link">
              </div>
	        </div>
	        <div class="modal-footer justify-content-between">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          <button type="submit" name="btn_add" id="btn_add" class="btn btn-primary">Save changes</button>
	        </div>
	      </div>
	      <!-- /.modal-content -->
	  	 </form>
	    </div>
	    <!-- /.modal-dialog -->
	 </div>
	 <!-- /.modal -->

<?php
  include 'views/footer.php';
?>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(document).ready(function () {
    $("#table_brands").DataTable();

    $('#b_form').validate({
    rules: {
      image: {
        required: true
      },
      link: {
        required: true
      },
    },
    messages: {
      image: {
        required: "Logo is required"
      },
      link: {
        required: "Link is required"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

    bsCustomFileInput.init();

  });
</script>