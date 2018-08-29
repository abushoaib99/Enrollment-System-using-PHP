<?php
include("../storage/users.php");
$profile=new users;

if(isset($_POST['search']))
	{
		$searchkey=$_POST['search'];
		$profile->search($searchkey);
	}
	else
	{
		$profile->student_profile();
	}

?>

<!DOCTYPE html>
<html lang="en">
	<?php
		include("head.php");
	?>
	
	<body>
		<?php
		include("navtop.php");
		?>

		<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-14">
					<?php
					include("navleft.php");
					?>
					<style>
					 
					#h1:hover{
						
					}
					#h1{
						background-color:#337AB7;
						color:#fff;
						font-size:16px
					}
					</style>
					
					<script>
						$(document).ready(function(){
						  $("#search").on("keyup", function() {
							var value = $(this).val().toLowerCase();
							$("#mydata tr").filter(function() {
							  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						  });
						});

					</script>
								
					<div style="margin-top:10px" class="panel panel-primary">
						<div style="text-align:center;font-size:25px;font-family:arial black"class="panel-heading">Profile</div>
					</div>
					<ul class="nav nav-tabs">
						
						<div class="row">
							
							<form action="" method="POST"> 
								<div class="col-md-3">
									<input type="text" id="search" name="search" class='form-control' placeholder="Search..." value="" > 
								</div>
								<div class="col-sm-2">
									<button class="btn">Search</button>
								</div>
							</form>
							
							
							<br>
							<br>
						</div>
						
					</ul>
					<div class="tab-content">
				  
						<div class="tab-pane fade in active">
							<table class="table">
								<thead>
								  <tr>
									<th>Roll</th>
									<th>Name</th>
									<th>Department</th>
									<th>Father Name</th>
									<th>Mother Name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Image</th>
									<th><center>Action</center></th>
								  </tr>
								</thead>
								<tbody id="mydata">
								
								<?php
								if($profile->data){
									
								foreach($profile->data as $prof)
								{?>
								
								  <tr>
									<td><?php echo $prof['roll_no'];?></td>
									<td><?php echo $prof['studnet_name'];?></td>
									<td><?php echo $prof['dept'];?></td>
									<td><?php echo $prof['father_name'];?></td>
									<td><?php echo $prof['mother_name'];?></td>
									<td><?php echo $prof['phone'];?></td>
									<td><?php echo $prof['email'];?></td>
									<td><img src="../storage/img/<?php echo $prof['img'];?>" alt="" width="25px" height="20px"/></td>
									<td><center><a href="edit.php?id=<?php echo $prof['id'];?>" class="btn btn-primary btn-xs action">Edit</a> | <a onclick="return confirm('Are you sure?')" href="../BL/del.php?id=<?php echo $prof['id'];?>" class="btn btn-danger btn-xs action">Delete</a></center></td>
								  </tr>
								  <?php	}}?>
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			<div class="col-sm-2"></div>
		</div>

	</body>
</html>
