<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Add Course</h1>
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
					<label for="crsname">Course Name: </label>
					<input type="text" class="form-control" id="crsname" name="crsname" />
				</div>
				<div class="form-group">
					<label for="crsdesc">Description: </label>
					<input type="text" class="form-control" id="crsdesc" name="crsdesc" />
				</div>	

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Add <span class="glyphicon glyphicon-save"></span> 
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
	alert("The new course was successfully added!");
	location.href = '<?php echo base_url('boots/readcrs'); ?>';
</script>
<?php
}

?>




