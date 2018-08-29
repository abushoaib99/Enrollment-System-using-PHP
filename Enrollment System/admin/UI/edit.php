<?php
include("../storage/users.php");
$info=new users;
if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query=$info->conn->query("select * from studnet_profile where id='$id'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
	}
else
{
	header("location:../UI/profile.php");
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
		<script type="text/javascript" src="model/validate.js"></script>
		<script type="text/javascript" src="model/validatephoto.js"></script>
		<script type="text/javascript" src="model/dateandselect.js"></script>	
		<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<div style="background: #222222;" class="sidebar">
					<label for=""><h3 style="color:white">Dashboard</h3></label>
						<ul class="nav nav-sidebar">
							<li><a href="profile.php">Profile</a></li>
							<li><a href="AddStudentInfo.php">Add Information</a></li>
							<li><a id="h2" href="edit.php?id=<?php echo $row['id'];?>">Update Information</a></li>
						</ul>
										
					</div>
					<style>
					 
					#h2:hover{
						
					}
					#h2{
						background-color:#337AB7;
						color:#fff;
						font-size:16px
					}
					
					
					</style>
					
					<script>
					$(document).ready(function(){
						
						$("#change-photo").click(function(){
							$("#change-photo").hide();
							$("#show").slideDown();
						});
					});
					</script>
				  
					
					<div style="margin-top:100px">
						
							<div class="panel panel-primary">
								<div style="text-align:center;font-size:25px;font-family:arial black"class="panel-heading">Update Information</div>
							</div>
							<form style="float:right" method="post" action="../BL/update_photo.php" enctype="multipart/form-data">
								<div style="margin-right:50px;background-color:;border:1px solid #B9B9B9;padding-top:12.5px;padding-right:12.5px;padding-left:12.5px;" class="form-group">
								
									<div class="form-group">
										
										<div id="imagePreview">
										<img src="../storage/img/<?php echo $row['img'];?>" alt="" width="148px" height="180px"/>
										</div>
										<div class="smaller"style="text-align:center;margin-top:px">
										<a style="font-size:12.5px" id="change-photo" href="#">Change photo</a>
										</div>
									</div>
									<div style="display:none"id="show">
										<div class="form-group">
											<input id="img" type="file" style="width:150px;font-size:10px" name="img" required onchange="return fileValidation()">
										</div>
										<div class="form-group">
											<button  name="id" value="<?php echo $id?>" type="submit" class="btn btn-primary btn-xs" onclick="return confirm('Are you sure?')">Upload</button>
										</div>
									</div>
								
								</div>
								
							</form>
							
						<form class="form-horizontal" name="StudentRegistration"  method="post" action="../BL/update_info.php"  enctype="multipart/form-data" onsubmit="return(validate());">
								
							<div style="margin-right:60px" class="form-group">
								<div style="height:50px" class="form-group">
									<label class="control-label col-sm-3" for="SN">Student's Name</label>
									<div class="control-label col-sm-5">
										<input id="SN" type="text" name="SN" class="form-control" value="<?php echo $row['studnet_name']?>" required  placeholder="Enter Student's Name">
									 </div>
									
								</div>
								
								<div style="height:50px" class="form-group">
									<label class="control-label col-sm-3" for="FN">Father's Name</label>
									<div class="control-label col-sm-5">
										<input id="FN" type="text" name="FN" class="form-control" value="<?php echo $row['father_name']?>" required  placeholder="Enter Father's Name">
									</div>
								</div>
								
								<div style="height:50px" class="form-group">
									<label class="control-label col-sm-3" for="MN">Mother's Name</label>
									<div class="control-label col-sm-5">
										<input id="MN" type="text" name="MN" class="form-control" value="<?php echo $row['mother_name']?>" required  placeholder="Enter Mother's Name">
									</div>
								</div>
								
								<div style="height:40px"class="form-group">
									<label class="control-label col-sm-3">Present Address</label>
									<div class="control-label col-sm-4">
									<select class="form-control" id="slct1" name="presentadd_district" onchange="populate(this.id,'slct2')"> 
										<option value="<?php echo $row['presentadd_district']?>" selected="selected"><?php echo $row['presentadd_district']?></option>
										<option value="COMILLA">COMILLA</option>
										<option value="DHAKA">DHAKA</option>
										
									</select>
									</div>
									
								</div>
								
								<div style="height:40px" class="form-group">
								<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<select style="text-transform: capitalize;" class="form-control"  name="presentadd_upzila" id="slct2"><option value="<?php echo $row['presentadd_upzila']?>" selected="selected"><?php echo $row['presentadd_upzila']?></option></select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<input id="presentadd_city" name="presentadd_city" class="form-control" value="<?php echo $row['presentadd_city']?>" required  placeholder="City/Village">
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Permanent Address</label>
									<div class="control-label col-sm-4">
									<select class="form-control" id="slct3" name="permanentadd_district" onchange="populate(this.id,'slct4')"> 
										<option value="<?php echo $row['permanentadd_district']?>" selected="selected"><?php echo $row['permanentadd_district']?></option>
										<option value="COMILLA">COMILLA</option>
										<option value="DHAKA">DHAKA</option>
										
									</select>
									</div>
									
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<select style="text-transform: capitalize;" class="form-control" name="permanentadd_upzila" id="slct4"><option value="<?php echo $row['permanentadd_upzila']?>" selected="selected"><?php echo $row['permanentadd_upzila']?></option></select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<input id="permanentadd_city" name="permanentadd_city" class="form-control" value="<?php echo $row['permanentadd_city']?>" required  placeholder="City/Village">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="datepicker">Date of Birth</label>
									<div class="control-label col-sm-4">
									<input style="cursor: no-drop;" type="text" id="datepicker" readonly name="dob" class="form-control" value="<?php echo $row['dob']?>" required  placeholder="DD/MM/YYYY">

									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="phone">Mobile</label>
									<div class="control-label col-sm-4">
									<input id="phone" type="text" name="phone" class="form-control" value="<?php echo $row['phone']?>" minlength="11" maxlength="11" required  placeholder="Enter Mobile">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="email">Email</label>
									<div class="control-label col-sm-4">
									<input id="email" type="email" name="email" class="form-control" value="<?php echo $row['email']?>" required  placeholder="Enter Email">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Department</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="dept">
										<option value="<?php echo $row['dept']?>" selected="selected"><?php echo $row['dept']?></option>
										<option value="CSE">CSE</option>
										<option value="ECE">ECE</option>
										<option value="BBA">BBA</option>
									</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="roll">Roll No</label>
									<div class="control-label col-sm-3">
									<input id="roll" type="text" name="roll" class="form-control" value="<?php echo $row['roll_no']?>" required   placeholder="Enter Roll No">
									</div>
								</div>
								
								<div style="margin-top:50px" class="form-group">
								<label class="control-label col-sm-3"><p style="font-size:20px;color:#337AB7;font-family:arial black"><strong>H.S.C Information</strong></p></label>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Passing Year</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="h_year">
										<option value="<?php echo $row['h_year']?>" selected="selected"><?php echo $row['h_year']?></option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
									</select>
									</div>
								</div>
                                    
								
                               <div class="form-group">
									<label class="control-label col-sm-3" for="h_roll">Roll</label>
									<div class="control-label col-sm-3">
									<input id="h_roll" type="text" name="h_roll" class="form-control" value="<?php echo $row['h_roll']?>" required   placeholder="Enter Roll No">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Board</label>
									<div class="control-label col-sm-3">
									<select class="form-control" name="HSC_BOARD">
										<option value="<?php echo $row['h_board']?>" selected="selected"><?php echo $row['h_board']?></option>
										<option value="DHAKA">DHAKA</option>
										<option value="COMILLA">COMILLA</option>
										<option value="BARISAL">BARISAL</option>
										<option value="JESSORE">JESSORE</option>
										<option value="DINAJPUR">DINAJPUR</option>
										<option value="RAJSHAHI">RAJSHAHI</option>
										<option value="CHITTAGON">CHITTAGON</option>
										<option value="SYLHET">SYLHET</option>
										<option value="TECHNICAL">TECHNICAL</option>
										<option value="OTHERS">OTHERS</option>
									</select>
									</div>
								</div>
                              
								<div class="form-group">
									<label class="control-label col-sm-3" for="h_gpa">GPA</label>
									<div class="control-label col-sm-3">
									<input id="h_gpa" type="text" name="h_gpa" class="form-control" value="<?php echo $row['h_gpa']?>" required   placeholder="Enter GPA">
									</div>
								</div>
                                
								<div style="margin-top:50px" class="form-group">
                                <label class="control-label col-sm-3"><p style="font-size:20px;color:#337AB7;font-family:arial black"><strong>S.S.C Information</strong></p></label>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Passing Year</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="s_year">
										<option value="<?php echo $row['s_year']?>" selected="selected"><?php echo $row['s_year']?></option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										
										
									</select>
									</div>
								</div>
                                    
								
                               <div class="form-group">
									<label class="control-label col-sm-3" for="s_roll">Roll</label>
									<div class="control-label col-sm-3">
									<input id="s_roll" type="text" name="s_roll" class="form-control"  value="<?php echo $row['s_roll']?>" required   placeholder="Enter Roll">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Board</label>
									<div class="control-label col-sm-3">
									<select class="form-control" name="SSC_BOARD">
										<option value="<?php echo $row['s_board']?>" selected="selected"><?php echo $row['s_board']?></option>
										<option value="DHAKA">DHAKA</option>
										<option value="COMILLA">COMILLA</option>
										<option value="BARISAL">BARISAL</option>
										<option value="JESSORE">JESSORE</option>
										<option value="DINAJPUR">DINAJPUR</option>
										<option value="RAJSHAHI">RAJSHAHI</option>
										<option value="CHITTAGON">CHITTAGON</option>
										<option value="SYLHET">SYLHET</option>
										<option value="TECHNICAL">TECHNICAL</option>
										<option value="OTHERS">OTHERS</option>
									</select>
									</div>
								</div>
                              
								<div class="form-group">
									<label class="control-label col-sm-3" for="s_gpa">GPA</label>
									<div class="control-label col-sm-3">
									<input id="s_gpa" type="text" name="s_gpa" class="form-control"  value="<?php echo $row['s_gpa']?>" required   placeholder="Enter GPA">
									</div>
								</div>
								<div class="form-group">        
								  <div class="col-sm-offset-3 col-sm-12">
									<button type="submit" name="id" value="<?php echo $id?>" class="btn btn-success">Save</button>
								  </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			<div class="col-sm-2"></div>
		</div>
	</body>
</html>
