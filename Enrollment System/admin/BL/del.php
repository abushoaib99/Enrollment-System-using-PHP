<?php 			
	if(isset($_GET['id']))
	{
		include("../storage/users.php");
		$delete=new users;
		$id=$_GET['id'];
		$query=$delete->conn->query("delete from studnet_profile where id='$id'");
		if($query)
		{
			header("location:../UI/profile.php");	
		}
		
		else{
			?>
			<script>
				alert("Fail to delete data");
				window.location.href="../UI/profile.php";
			</script>
			 
		<?php	
		}
	}
	else
	{
		echo "There are no Student";
	}
?>