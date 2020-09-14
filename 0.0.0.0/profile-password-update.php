<?php
  require('session.php');
  $a_id = $_SESSION["arkAdminLoginKey"];
  $db->where ("admin_id", $a_id);
  $user = $db->getOne ("tbl_admin");
  
  if(isset($_POST['btn_action']))
  {
    $old     = $_POST['old'];
    $new     = $_POST['new'];
    $confirm = $_POST['confirm'];

    $old_pass = md5($old);
    if($old_pass!=$user['password']){
      $_SESSION['response']="Invalid old password";
      $_SESSION['res_type']="danger";
    }else{
      $data = array('password'=>md5($new));
      $db->where ('admin_id', $a_id);
      if ($db->update ('tbl_admin', $data)){
          $_SESSION['response']="Successfully updated";
          $_SESSION['res_type']="success";
          }
      else{
          $_SESSION['response']="Error occured, try again!";
          $_SESSION['res_type']="danger";
          }
    }
  }

  include 'views/nav_header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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

          <div class="col-md-3">

           <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/default.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $user['name']; ?></h3>
                <p class="text-muted text-center">Administrator</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $user['email']; ?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col -->

          <div class="col-md-9">
           
           <div class="card">
              <div class="card-header p-2">
                Update password
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php if(isset($_SESSION['response'])){ ?>
                 <div class="alert alert-<?=$_SESSION['res_type']?> alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?=$_SESSION['response']?>
                 </div>
                <?php } unset($_SESSION['response']); ?>
                <form method="post" class="form-horizontal" id="updatepass">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Old password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="old" id="old" placeholder="Old password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">New password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="new" id="new" placeholder="New password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Confirm password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" name="btn_action" class="btn btn-primary" style="border-radius: 0px;">Update</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


<?php
  include 'views/footer.php';
?>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(document).ready(function () {
    
    $('#updatepass').validate({
    rules: {
      old: {
        required: true
      },
      new: {
        required: true,
        minlength: 8
      },
      confirm: {
        required: true,
        minlength: 8,
        equalTo: "#new"
      },
    },
    messages: {
      old: {
        required: "Old password is required"
      },
      new: {
        required: "New password is required",
        minlength: "Your password must be at least 8 characters long"
      },
      confirm: {
        required: "Confirm password is required",
        minlength: "Your password must be at least 8 characters long",
        equalTo: "Your confirm password should match new password"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.col-sm-10').append(error);
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