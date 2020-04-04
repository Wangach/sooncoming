<?php 
include 'db.php';

if (isset($_POST['sub'])) {
	$random = ["a", "b", "c", "d", "e", "F", "1", "2", "3", "5", "6"];
	$holder = "";

	for ($i=0; $i < 8; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}
	$em = mysqli_real_escape_string($conn, $_POST['barua']);

	$ins = "INSERT INTO data(id, email, ukey) VALUES ('', '$em', '$holder')";
	$actual = mysqli_query($conn, $ins);
	if ($actual) {
		echo "Subscribed Successfully!";
	}else{
		echo "Sorry. There Has Been An Error!";
	}

}
 ?>