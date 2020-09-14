<?php
if(isset($_POST['btn_add']))
{
	$link = $_POST['link'];

	$photo = $_FILES['image']['name'];
	$upload = "logo_imgs/".$photo;
    
  $data = array("logo"=>$upload,"link"=>$link);
  if($db->insert('tbl_brands',$data))
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
    $updatelink  = $_POST['updatelink'];
    $oldimage 	 = $_POST['oldimage'];
    
    if(isset($_FILES['updateimage']['name']) && $_FILES['updateimage']['name']!=""){
      $newimage = $_FILES['updateimage']['name'];
      $upload = "logo_imgs/".$newimage;
       unlink($oldimage);
      move_uploaded_file($_FILES['updateimage']['tmp_name'], $upload);
    }else{
      $upload=$oldimage;
    }

    $data = array("logo"=>$upload,"link"=>$updatelink);
    $db->where ('id', $updatekey);
    if ($db->update ('tbl_brands', $data)){
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
    if($db->delete('tbl_brands')){
      $_SESSION['response']="Successfully deleted";
      $_SESSION['res_type']="danger";
    }
  }

?>