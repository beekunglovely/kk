<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>

	<div class="container">
		<div class = "row">
			<div class="col-md-12">
				<h1>My first  bootstrap</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMember">
						Add Member
					</button>
					
					
					<?php
					require('retive.php');
					?>
					
					<table class="table">
						<tr>
							<th>Seq.</th>
							<th> id</th>
							<th> fname</th>
							<th>lname </th>
							<th>contact </th>
							<th>Operator</th>
						</tr>
						<?php
							
							$x=1;
							foreach($data as $row){
						?>
						
						<tr>
							<td> <?php echo $x; ?></td>
							<td> <?php echo $row[0]; ?></td>
							<td> <?php echo $row[1]; ?></td>
							<td> <?php echo $row[2]; ?></td>
							<td> <?php echo $row[3]; ?></td>
							<td>
								<button type="button" class="btn btn-warning"> Edit</button>
								<button type="button" class="btn btn-danger" onclick="deleteMember(<?php echo $row[0]; ?>)">Delete</button>
							</td>
						</tr>
						<?php
							$x++;
						}
						?>
						
					</table>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" id="addMember">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Please Input Member Data
				</div>
				
				
			<form class="form-horiaontal" method="POST" action="create.php">
				<div class="modal-body">
					<div class="form-group">
					<label class="col-md-12 control-label">Id: </label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="id">
					</div>
					</div>
					
				<div class="form-group">
					<label class="col-md-12 control-label">Fname: </label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="id">
					</div>
					</div>
					<div class="form-group">
					<label class="col-md-12 control-label">Lname: </label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="id">
					</div>
					</div>
					<div class="form-group">
					<label class="col-md-12 control-label">contact: </label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="id">
					</div>
					</div>
				</div>
			
			
				<div class="modal-footer">
				<div class="col-sm-10">
					<input type="Submit" value="Submit">
					</div>
					<div class="col-sm-10">
					<input type="Reset" value="Reset">
					</div>
				</div>
			</form>
			</div>
			</div>
		</div>
	</div>

	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	function deleteMember(id){
		//alert(id);
		$.ajax({
			url:'delete.php',
			type:'POST',
			data:{mid:id},
			success:function(response){
				
					alert('deleted');
					window.location.replace("http://localhost/crud/index.php");
				
			}
		});
	}
	</script>
	
	
	
	
	
	
	
	

</body>
</html>