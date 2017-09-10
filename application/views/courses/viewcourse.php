<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<br />
			<p class="lead text-center">Menu</p>
			<div class="btn-group btn-group-justified">
				<a href="<?php echo base_url('boots');?>" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Home</a>
				<a href="stud" class="btn btn-primary justify"><span class="glyphicon glyphicon-user"></span> Students</a>
				<a href="readcrs" class="active btn btn-primary"><span class="glyphicon glyphicon-briefcase"></span> Course</a>
			 </div>
			 <br />
			 <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search">
                        <div class="input-group-btn">
                            <a class="btn btn-default btn-block" role="button" href="#"> <i class="glyphicon glyphicon-search"></i></a>
                        </div>
				</div>
		</div>
		<div class="col-md-6 contents">
		<h2>Course List </h2>
			<hr />
			
			<!-- Students List -->
			<?php
					foreach($course as $c){
						echo '<p class=""><b>'.$c['crsname'].'</b>
							<br />&nbsp&nbsp&nbsp<small>'.$c['crsdesc'].'</small></p>';
					}
					?>
			
			<br />

		</div>
			<br />
			<br />
			<br />
			<div class="col-md-2">
			<a href="addcrs" class="btn btn-primary btn-lg">Add Course</a>
			</div>
			<br />
		
	</div>
	
	<br />
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Student Management System.
		</div>
	</div>
</div>
