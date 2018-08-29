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
			<div class="col-sm-10">
				<div class="row">
					<?php
						include("navleft.php");
					?>
					<div style="margin-top:100px" class="tab-content">
							<div style="margin-top:10px" class="panel panel-primary">
								<div style="text-align:center;font-size:25px;font-family:arial black"class="panel-heading">Student Information</div>
							</div>
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
								<li><a data-toggle="tab" href="#About">About</a></li>
							</ul>
						  <div class="tab-content">
							 <div id="home" class="tab-pane fade in active">
							  <h3>Home</h3>
							</div>
							<div id="About" class="tab-pane fade">
							  <h3>About</h3>
							</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</body>
</html>
