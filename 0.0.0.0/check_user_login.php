<?php 
session_start();

include('model/db_connect.php');

$email=$password=$error_email=$error_password='';
$error = 0;
$base_url = '';

if(empty($_POST['email']))
{
   $error_email = "Email is required";
   $error++;
}
else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
  $error_email = "Email is invalid";
  $error++;
}
else
{
  $email = $_POST['email'];
}
if(empty($_POST['password']))
{
   $error_password = "Password is required";
   $error++;
}
else
{
  $password = md5($_POST['password']);
}

if($error == 0)
{
	$query = "SELECT * FROM tbl_admin WHERE email=?";
	$stmt = $connect->prepare($query);
	$stmt->bind_param("s",$_POST['email']);

	if($stmt->execute())
	{
      $result = $stmt->get_result();
      if($result->num_rows > 0)
      {
         $row = $result->fetch_assoc();
         if($password == $row['password'])
          {
            $_SESSION['arkAdminLoginKey'] = $row['admin_id'];
            $base_url = "http://localhost/ark/0.0.0.0/index";
          }
          else
          {
            $error_password = "Incorrect password";
            $error++;
          }
      }
      else
      {
        $error_email = "Incorrect Email address";
        $error++;
      }
	}
}

if($error > 0)
{
	$output = array(
         'error'=>true,
         'error_email'=>$error_email,
         'error_password'=>$error_password
	);
}
else
{
	$output = array(
         'success'=>true,
         'base_url'=>$base_url
	);
}

echo json_encode($output);

?>