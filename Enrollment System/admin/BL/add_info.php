<?php
if($_POST['b']==1){
	include("../storage/users.php");
	$register=new users;
	extract($_POST);
	$query=$register->conn->query("select id from studnet_profile where dept='$dept' and roll_no ='$roll'");
	if(mysqli_num_rows($query))
	{
		header("location:../UI/AddStudentInfo.php?run=exist");
	}
	else
	{
		$img_name=$_FILES['img']['name'];
		$tmp_name=$_FILES['img']['tmp_name'];
		move_uploaded_file($tmp_name,"../storage/img/".$img_name);
		$query1="insert into studnet_profile values('','$SN','$FN','$MN','$presentadd_district','$presentadd_upzila','$presentadd_city','$permanentadd_district','$permanentadd_upzila','$permanentadd_city','$dob','$phone','$email','$img_name','$dept','$roll','$h_year','$h_roll','$HSC_BOARD','$h_gpa','$s_year','$s_roll','$SSC_BOARD','$s_gpa')";
		if($register->add_info($query1))
		{
			header("location:../UI/AddStudentInfo.php?run=success");
		}
	}
}
else
	header('location:djfksjfkdsjfkjdincieo1548.jfdsk');
?>