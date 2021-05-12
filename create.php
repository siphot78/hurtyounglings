<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$name = $_POST['names'];
		$Surname = $_POST['surname'];
			$idno = $_POST['idno'];
		$Date = $_POST['Date-of-birth'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
    $year = $_POST['year'];	
    $intake = $_POST['intake'];
    $no = $_POST['no'];
    

		//write sql query

		$sql = "INSERT INTO `entry_details`(`Name`, `Surname`, `idno`, `Date-of-birth`, `Contact-No`,`Address`,`Year-enrolled`,`Intake`,`Reference-Contact-No`) VALUES ('$name','$Surname','$idno','$Date','$contact','$address','$year','$intake','$no')";

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
    <legend>Personal information:</legend>
    Name:<br>
    <input type="text" name="names">
    <br>
    Surname:<br>
    <input type="text" name="surname">
    <br>
     ID No.:<br>
    <input type="text" name="idno">
    <br>
    Date-of-birth:<br>
    <input type="date" name="Date-of-birth">
    <br>
    Contact-No:<br>
    <input type="text" name="contact">
    <br>
    Address:<br>
    <input type="text" name="address">
    <br>
    Year-enrolled:<br>
    <input type="number" placeholder="YYYY" name="year">
    <br>Intake:<br>
    <select name=intake>
        <option value="1st_semester">1st semester</option>
  <option value="2nd_semester">2nd semester</option>
        
    </select>
    <br>Reference Contact No. :<br>
    <input type="text" name="no">

    <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>