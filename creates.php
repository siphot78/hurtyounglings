<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$driving = $_POST['driving'];
		$fee = $_POST['fee'];
			$exam = $_POST['exam'];
		$book = $_POST['book'];
		$no = $_POST['no'];
	$total = $_POST['total'];
    

		//write sql query

		$sql = "INSERT INTO `learners_license_cost`(`Driving_School`, `Lesson_fee`, `Exam_Booking_fee`, `Booklet_fee`, `no`,`Total_Cost`) VALUES ('$driving','$fee','$exam','$book','$no','$total')";
    

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<h2>Register Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Leaners license cost:</legend>
    
    Driving School:<br>
    <input type="text" name="driving">
    <br>
     Lesson fee:<br>
    <input type="text" name="fee">
    <br>
    Exam Booking fee:<br>
    <input type="text" name="exam">
    <br>
    Booklet fee:<br>
    <input type="text" name="book">
    <br>
    No of times:<br>
    <input type="text" name="no">
    <br>
    Total cost:<br>
    <input type="text" name="total"

    <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>