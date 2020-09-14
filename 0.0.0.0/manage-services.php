<?php
  require('session.php');
  require('manageServices.php');
  include 'views/nav_header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
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
		      
		      <div class="col-md-12 mb-2" style="margin-top: -10px;">
		      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                  Add service
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
              	    <table id="tbl_service" class="table table-bordered table-striped">
              	    	<thead>
		                <tr>
		                  <th>Icon</th>
		                  <th>Title</th>
		                  <th>Description</th>
		                </tr>
		                </thead>
		                <tbody>
		                 <?php
                          $shop = $db->get('services');
                          foreach ($shop as $row)
                          {
                          	$id = $row['id'];

                          	?>
                            <tr>
		                  	<td><?php echo $row['icon']; ?></td>
		                  	<td><?php echo $row['title']; ?></td>
		                  	<td><?php echo $row['description']; ?></td>
		                  	<td>
		                  	<a href="#edit<?=$id?>" data-toggle="modal"><button type="button" class="btn btn-default btn-sm"><span class="fa fa-edit"></span></button></a> |
				            <a href="#delete<?=$id?>" data-toggle="modal"><button type="button" class="btn
				            btn-default btn-sm"><span class="fa fa-trash"></span></button></a>
		                  	</td>
		                    </tr>
		                    <!-- edit modal -->
		                    <div class="modal fade" id="edit<?=$id?>">
						    <div class="modal-dialog">
						      <form method="POST" id="edit_form">
						      <div class="modal-content">
						        <div class="modal-header">
						          <h4 class="modal-title">Edit service</h4>
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">&times;</span>
						          </button>
						        </div>
						        <div class="modal-body">
						          <div class="form-group">
					                <label for="exampleInputEmail1">Icon name</label>
					                <input type="text" name="updateicon" class="form-control" value="<?php echo $row['icon']; ?>">
					              </div>
					              <div class="form-group">
					                <label for="exampleInputEmail1">Title</label>
					                <input type="text" name="updatetitle" class="form-control" value="<?php echo $row['title']; ?>">
					              </div>
					              <div class="form-group">
					                <label for="exampleInputEmail1">Icon name</label>
					                <textarea class="form-control" name="updatedesc"><?php echo $row['description']; ?></textarea>
					              </div>
					              <div class="form-group">
					              	<input type="hidden" name="editkey" class="form-control" value="<?=$id?>">
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
						          <h4 class="modal-title">Remove service</h4>
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">&times;</span>
						          </button>
						        </div>
						        <div class="modal-body">
						          <div class="alert alert-danger" role="alert">
				                    Confirm deleting <b><?=$row['title']?></b> service ?
				                  </div>
					              <div class="form-group">
					              	<input type="hidden" name="deletekey" class="form-control" value="<?=$id?>">
					              </div>
						        </div>
						        <div class="modal-footer justify-content-between">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          <button type="submit" name="btn_delete" id="btn_delete" class="btn btn-danger">Continue</button>
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
	    <div class="modal-dialog">
	      <form method="POST" id="s_form">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 class="modal-title">Add new service</h4>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	        <div class="modal-body">
	          <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" name="icon" id="icon" class="form-control" placeholder="Enter icon name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea name="desc" id="desc" class="form-control" cols="3" placeholder="type description here.."></textarea>
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
<script>
  $(document).ready(function () {
    $("#tbl_service").DataTable();

    $('#s_form').validate({
    rules: {
      icon: {
        required: true
      },
      title: {
        required: true
      },
      desc: {
        required: true
      },
    },
    messages: {
      icon: {
        required: "Field is required"
      },
      title: {
        required: "Title field is required"
      },
      desc: {
        required: "Description field is required"
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

  });
</script>