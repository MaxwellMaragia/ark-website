<?php
if(isset($_POST['btn_add']))
{
  $title = $_POST['title'];
  $desc  = $_POST['desc'];

	$photo = $_FILES['image']['name'];
	$upload = "img/".$photo;
    
  $data = array("image"=>$upload,"title"=>$title,"description"=>$desc);
  if($db->insert('about_us',$data))
  {
      move_uploaded_file($_FILES['image']['tmp_name'], $upload);
      $_SESSION['response']="Added successfully";
      $_SESSION['res_type']="success";
  }
  else
  {

        $_SESSION['response']="Error while inserting";
        $_SESSION['res_type']="danger";
  }
}

if(isset($_POST['btn_update']))
{
    $updatekey   = $_POST['key'];
    $updatetitle = $_POST['updatetitle'];
    $updatedesc  = $_POST['updatedesc'];
    $oldimage 	 = $_POST['oldimage'];
    
    if(isset($_FILES['updateimage']['name']) && $_FILES['updateimage']['name']!=""){
      $newimage = $_FILES['updateimage']['name'];
      $upload = "img/".$newimage;
      unlink($oldimage);
      move_uploaded_file($_FILES['updateimage']['tmp_name'], $upload);
    }else{
      $upload=$oldimage;
    }

    $data = array("image"=>$upload,"title"=>$updatetitle,"description"=>$updatedesc);
    $db->where ('id', $updatekey);
    if ($db->update ('about_us', $data)){
      $_SESSION['response']="Successfully edited";
      $_SESSION['res_type']="success";
    }else{
      $_SESSION['response']="Something went wrong! try again";
      $_SESSION['res_type']="danger";
    }
 }

 if(isset($_POST['btn_delete']))
 {
    $deletekey = $_POST['deletekey'];
    $imgpath   = $_POST['imagepath'];
    
    unlink($imgpath);

    $db->where ("id", $deletekey);
    if($db->delete('about_us')){
      $_SESSION['response']="Successfully deleted";
      $_SESSION['res_type']="danger";
    }
  }

?>