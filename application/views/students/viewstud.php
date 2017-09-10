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
				<a href="stud" class="active btn btn-primary"><span class="glyphicon glyphicon-user"></span> Students</a>
				<a href="readcrs" class="btn btn-primary"><span class="glyphicon glyphicon-briefcase"></span> Course</a>
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
		<h2>Student List </h2>
			<hr />
			
			<!-- Students List -->
			<?php
					foreach($students as $s){
						echo '
									<p>'.$s['lastname'].', '.$s['firstname'].' '.$s['middlename'].'<p/>
							
								';
					}
					?>
			
			<br />

		</div>
			<br />
			<br />
			<br />
			<div class="col-md-2">
			<a href="add_student" class="btn btn-primary btn-lg">Add Student</a>
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
