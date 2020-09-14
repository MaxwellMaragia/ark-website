<?php
session_start();
// include('model/db_connect.php');

// if(isset($_SESSION["admin_id"]))
// {
//  header('location:index');
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>House Of Fundi | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>HOUSE OF FUNDI</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post" id="user_login">
        <span id="error_email" class="text-danger"></span><br>
        <span id="error_password" class="text-danger"></span>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" id="btn_login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<!-- custom js -->
  <script type="text/javascript">
    $(document).ready(function(){
     $('#user_login').on('submit', function(event){
      event.preventDefault();
      $.ajax({
         method:"POST",
         url:"check_user_login.php",
         data:$(this).serialize(),
         dataType:"json",
         beforeSend:function(){
          $('#btn_login').val('validating..');
          $('#btn_login').attr('disabled', 'disabled');
         },
         success:function(data){
           if(data.success)
           {
            location.href = data.base_url;
           }
           if(data.error)
           {
            $('#btn_login').val('Sign In');
            $('#btn_login').attr('disabled', false);
            if(data.error_email != '')
            {
              $('#error_email').text(data.error_email);
            }
            else
            {
              $('#error_email').text('');
            }
            if(data.error_password != '')
            {
              $('#error_password').text(data.error_password);
            }
            else
            {
              $('#error_password').text('');
            }
           }
         }
      });
     });
    });
  </script>
