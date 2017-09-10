<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Add Student</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		
		</div>
		
		<div class="col-md-6 contents">
			<br />
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="idno" name="idno" />
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>	
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				
				<!-- Eto YON GELOOOO!-->
				<div class="form-group">
					<label for="course">Course:</label>
					<select class="form-control" id="course" name="course">
					<?php
							foreach($course as $c){
								echo '<option value="'.$c['crsname'].'">'.$c['crsdesc'].'</option>';
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="sex">Sex</label>
					<input type="radio" class="" id="sex" name="sex" value="M" /> Male
					<input type="radio" class="" id="sex" name="sex" value="F" /> Female
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
				
				<div class="col-md-3">
		
				</div>
			</form>
	
			<hr />
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Student Management System
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('boots'); ?>';
</script>
<?php
}

?>




