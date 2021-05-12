<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM entry_details";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/10a0ef1231.js" crossorigin="anonymous"></script>
    <style>
	.fas {
		padding-right:25px;
	}
.d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}

.d-flex table{
    margin: 1em 10em;
}

table .btnedit{
    color: lightsalmon;
    cursor: pointer;
}

.success{
    background-color: lightgreen;
    padding: 1em;
}

.error{
    background-color: tomato;
    padding: 1em;
}


.is4am{
	padding-right:25px;
}

.img3{
	
	margin-right:70px;
}
    </style>
</head>
<body>
    <div class="container text-center">

    <h1 class="py-4 bg-dark text-light rounded ">Cosat</i></h1>

	<div class="container" class="d-flex table-data">
		
<table class="table" class="table table-striped table-dark">
	<thead class="thead-dark">
		<tr>
		<th>Name</th>
		<th>Surname</th>
			<th>ID No.</th>
		<th>Date-of-birth</th>
		<th>Contact-No</th>
		<th>Address</th>
	
		<th>Year-enrolled</th>
		<th>Intake</th>
		<th>Reference-Contact-No</th>
	
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Surname']; ?></td>
					<td><?php echo $row['idno']; ?></td>
					<td><?php echo $row['Date-of-birth']; ?></td>
					<td><?php echo $row['Contact-No']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
					<td><?php echo $row['Year-enrolled']; ?></td>
					<td><?php echo $row['Intake']; ?></td>
					<td><?php echo $row['Reference-Contact-No']; ?></td>
				
					<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				
					</tr>	
					

		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	
	<td>
					<a class="btn btn-info" href="create.php?id=<?php echo $row['id']; ?>">Insert</a></td>
<br><br><br><br><br>



</body>
</html>