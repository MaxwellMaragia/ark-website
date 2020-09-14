<?php
if(isset($_POST['btn_add']))
{
  $icon  = $_POST['icon'];
  $title = $_POST['title'];
  $desc  = $_POST['desc'];
      // validation
  $db->where ('title', $title);
  if($db->get ('services'))
  {
      $_SESSION['response']="Same title exists!";
      $_SESSION['res_type']="danger";
  }else
  {
  	$data = array("icon"=>$icon,"title"=>$title,"description"=>$desc);
    if($db->insert('services',$data))
    {
        $_SESSION['response']="Added successfully";
        $_SESSION['res_type']="success";
    }
    else
    {

          $_SESSION['response']="Error while inserting";
          $_SESSION['res_type']="danger";
    }
  }
}

if(isset($_POST['btn_update']))
{
    $key 	     = $_POST['editkey'];
    $editicon  = $_POST['updateicon'];
    $edittitle = $_POST['updatetitle'];
    $editdesc  = $_POST['updatedesc'];
    
    $data=array('icon'=>$editicon,"title"=>$edittitle,"description"=>$editdesc);
    $db->where ('id', $key);
    if ($db->update ('services', $data)){
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
    $db->where('id', $deletekey);
    if($db->delete('services')){
      $_SESSION['response']="Successfully deleted";
      $_SESSION['res_type']="danger";
    }else{
      $_SESSION['response']="Restricted action!";
      $_SESSION['res_type']="danger";
    } 
}
?>