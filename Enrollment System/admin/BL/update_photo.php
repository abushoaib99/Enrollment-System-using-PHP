<?php

	include("../storage/users.php");
	$register=new users;
	extract($_POST);
	$id = $_POST['id'];
	$img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	move_uploaded_file($tmp_name,"../storage/img/".$img_name);
	$query1="update studnet_profile set img='$img_name' where id ='$id'";
	if($register->add_info($query1))
	{
		header("location:../UI/edit.php?id=$id");
	}



?>