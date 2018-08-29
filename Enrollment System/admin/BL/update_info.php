<?php

	include("../storage/users.php");
	$register=new users;
	extract($_POST);
	$id = $_POST['id'];
	$img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	move_uploaded_file($tmp_name,"../storage/img/".$img_name);

	$query1="update studnet_profile set studnet_name='$SN',father_name='$FN',mother_name='$MN',presentadd_district='$presentadd_district',presentadd_upzila='$presentadd_upzila',presentadd_city='$presentadd_city',permanentadd_district='$permanentadd_district',permanentadd_upzila='$permanentadd_upzila',permanentadd_city='$permanentadd_city',dob='$dob',phone='$phone',email='$email',dept='$dept',roll_no='$roll',h_year='$h_year',h_roll='$h_roll',h_board='$HSC_BOARD',h_gpa='$h_gpa',s_year='$s_year',s_roll='$s_roll',s_board='$SSC_BOARD',s_gpa='$s_gpa' where id ='$id'";
	if($register->add_info($query1))
	{
		header("location:../UI/profile.php");
	}



?>