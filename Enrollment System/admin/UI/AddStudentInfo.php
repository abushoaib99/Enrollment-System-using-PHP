
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
				<div class="col-sm-12">
					<?php
						include("navleft.php");
					?>
					<style>
					 
					#h2:hover{
						
					}
					#h2{
						background-color:#337AB7;
						color:#fff;
						font-size:16px
					}
					</style>
					
					
					
					
					<div style="margin-top:50px">
						
							<div class="panel panel-primary">
								<div style="text-align:center;font-size:25px;font-family:arial black"class="panel-heading">Add Information</div>
							</div>
							
							
							<form class="form-horizontal" name="StudentRegistration"  method="post" action="../BL/add_info.php"  enctype="multipart/form-data" onsubmit="return(validate());">
							<div class="form-group">
							<label class="control-label col-sm-4"></label>
								<?php
								if(isset($_GET['run']) && $_GET['run']=="exist")
								{
									echo "<span style='color:#C9302C;font-family:arial black;font-size:18px'>Department and Roll are already exist</span>";
									
									
								}
								if(isset($_GET['run']) && $_GET['run']=="success")
								{
									echo "<span style='color:#398439;font-family:arial black;font-size:18px'>Information has been successfully Inserted</span>";
									
									
								}
								
								
								?>
								</div>
							
								<div class="form-group">
									<label class="control-label col-sm-3" for="SN">Student's Name</label>
									<div class="control-label col-sm-5">
										<input id="SN" type="text" name="SN" class="form-control" required autofocus  placeholder="Enter Student's Name">
									 </div>
									
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="FN">Father's Name</label>
									<div class="control-label col-sm-5">
										<input id="FN" type="text" name="FN" class="form-control" required  placeholder="Enter Father's Name">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="MN">Mother's Name</label>
									<div class="control-label col-sm-5">
										<input id="MN" type="text" name="MN" class="form-control" required  placeholder="Enter Mother's Name">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Present Address</label>
									<div class="control-label col-sm-4">
									<select class="form-control" id="slct1" name="presentadd_district" onchange="populate(this.id,'slct2')"> 
										<option value="" selected="selected">Select District</option>
										<option value="COMILLA">COMILLA</option>
										<option value="DHAKA">DHAKA</option>
										
									</select>
									</div>
									
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<select class="form-control" name="presentadd_upzila" id="slct2">
										<option value="" selected="selected">Select Upzila</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<input id="presentadd_city" name="presentadd_city" class="form-control" required  placeholder="City/Village">
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Permanent Address</label>
									<div class="control-label col-sm-4">
									<select class="form-control" id="slct3" name="permanentadd_district" onchange="populate(this.id,'slct4')"> 
										<option value="" selected="selected">Select District</option>
										<option value="COMILLA">COMILLA</option>
										<option value="DHAKA">DHAKA</option>
										
									</select>
									</div>
									
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<select class="form-control" name="permanentadd_upzila" id="slct4">
										<option value="" selected="selected">Select Upzila</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-4">
										<input id="permanentadd_city" name="permanentadd_city" class="form-control" required  placeholder="City/Village">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="datepicker">Date of Birth</label>
									<div class="control-label col-sm-4">
									<input style="cursor: no-drop;" type="text" id="datepicker" readonly name="dob" class="form-control" required  placeholder="DD/MM/YYYY">

									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="phone">Mobile</label>
									<div class="control-label col-sm-4">
									<input id="phone" type="text" name="phone" minlength="11" maxlength="11" class="form-control" required  placeholder="Enter Mobile">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="email">Email</label>
									<div class="control-label col-sm-4">
									<input id="email" type="email" name="email" class="form-control" required  placeholder="Enter Email">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="img">Upload Image</label>
									<div class="control-label col-sm-4">
									
									<input type="file" id="img" name="img" class="form-control" required onchange="return fileValidation()"/>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3"></label>
									<div class="control-label col-sm-2">
									<div id="imagePreview"></div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Department</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="dept">
										<option value="-1" selected="selected">Select</option>
										<option value="CSE">CSE</option>
										<option value="ECE">ECE</option>
										<option value="BBA">BBA</option>
									</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="roll">Roll No</label>
									<div class="control-label col-sm-3">
									<input id="roll" type="text" name="roll" class="form-control" required   placeholder="Enter Roll No">
									</div>
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-3"><p style="font-size:20px;color:#337AB7;font-family:arial black"><strong>H.S.C Information</strong></p></label>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Passing Year</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="h_year">
										<option value="-1" selected="selected">Select</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
									</select>
									</div>
								</div>
                                    
								
                               <div class="form-group">
									<label class="control-label col-sm-3" for="h_roll">Roll</label>
									<div class="control-label col-sm-3">
									<input id="h_roll" type="text" name="h_roll" class="form-control" required   placeholder="Enter Roll No">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Board</label>
									<div class="control-label col-sm-3">
									<select class="form-control" name="HSC_BOARD">
										<option value="-1" selected="selected">Select</option>
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
									<input id="h_gpa" type="text" name="h_gpa" class="form-control" required   placeholder="Enter GPA">
									</div>
								</div>
                                
								<div class="form-group">
                                <label class="control-label col-sm-3"><p style="font-size:20px;font-family:arial black;color:#337AB7"><strong>S.S.C Information</strong></p></label>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-sm-3">Passing Year</label>
									<div class="control-label col-sm-2">
									<select class="form-control" name="s_year">
										<option value="-1" selected="selected">Select</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										
										
									</select>
									</div>
								</div>
                                    
								
                               <div class="form-group">
									<label class="control-label col-sm-3" for="s_roll">Roll</label>
									<div class="control-label col-sm-3">
									<input id="s_roll" type="text" name="s_roll" class="form-control" required   placeholder="Enter Roll">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Board</label>
									<div class="control-label col-sm-3">
									<select class="form-control" name="SSC_BOARD">
										<option value="-1" selected="selected">Select</option>
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
									<input id="s_gpa" type="text" name="s_gpa" class="form-control" required   placeholder="Enter GPA">
									</div>
								</div>
								<div class="form-group">        
								  <div class="col-sm-offset-3 col-sm-12">
									<button type="submit" name="b" value="1" class="btn btn-success">Save</button>
								  </div>
								</div>
							</form>
						
					</div>
					</div>
			<div class="col-sm-2"></div>
			
		</div>
	</body>
</html>
