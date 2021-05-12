<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM learners_license_cost";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Learn</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/10a0ef1231.js" crossorigin="anonymous"></script>
    <style>
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





    </style>
</head>
<body>
    <div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded "></i>Zam Foundation Leaners License Intake</h1>

	<div class="container" class="d-flex table-data">
		
<table class="table" class="table table-striped table-dark">
	<thead class="thead-dark">
		<tr>
		<th>Driving id</th>
		<th>Driving School</th>
			<th>Lesson fee</th>
		<th>Exam Booking fee</th>
		<th>Booklet fee</th>
		<th>No of times</th>
	
		<th>Total Cost</th>
		
	
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['Driving_School']; ?></td>
					<td><?php echo $row['Lesson_fee']; ?></td>
					<td><?php echo $row['Exam_Booking_fee']; ?></td>
					<td><?php echo $row['Booklet_fee']; ?></td>
                    <td><?php echo $row['no']; ?></td>
					<td><?php echo $row['Total_cost']; ?></td>
					
				

					
					<td><a class="btn btn-danger" href="deletes.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>

				
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	<a class="btn btn-info" href="creates.php?id=<?php echo $row['id']; ?>">Insert</a>
	<br><br><br>
<a class="btn btn-danger" href="first.php">Personal Information</a>
<a class="btn btn-info">Drivers</a>
</body>
</html>