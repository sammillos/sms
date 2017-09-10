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
				<a href="boots" class="active btn btn-primary justify"><span class="glyphicon glyphicon-home"></span> Home</a>
				<a href="boots/stud" class="btn btn-primary justify"><span class="glyphicon glyphicon-user"></span> Students</a>
				<a href="boots/readcrs" class="btn btn-primary"><span class="glyphicon glyphicon-briefcase"></span> Course</a>
			 </div>
			 <br />
			 <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search">
                        <div class="input-group-btn">
                            <a class="btn btn-default btn-block" role="button" href="#"><i class="glyphicon glyphicon-search"></i></a>
                        </div>
			</div>
		</div>
		
		<div class="col-md-8 contents">
		
			<h2>Welcome to SMS!</h2>
			
			<!-- Students Section -->
			<div class="col-md-6">
				<h3>Students</h3>
				<hr />
				
					<?php
					foreach($students as $s){
						echo '
									<p>'.$s['lastname'].', '.$s['firstname'].' '.$s['middlename'].'<p/>
							
								';
					}
					?>
	
			</div>
			
			<!--Course Section -->
			<div class="col-md-6">
				<h3 >Course</h3>
				<hr />
				
					<?php
					foreach($students as $s){
						echo '
									<p>'.$s['course'].'<p/>
										
								';
					}
					?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer fixed-bottom">
			Copyright &copy; 2017. Student Management System.
		</div>
	</div>
</div>





