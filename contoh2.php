<DOCTYPE html>
<html lang="en">
<head>
<title>Calorie and BMR Calculator by John Keenan</title>
<style type="text/css">

* {
	font-family: helvetica;
	color: #000623;
}

body {
	background-color: #000623;
}
.wrapper {
	margin: 0 auto;
	width: 800px;
	text-align: center;
}

.ui {
	margin-top: 80px;
	background-color: #4A6C74;
	padding: 20px;
	border-radius: 3px;
	border: 3px solid #8BA693;
}

input:not([type='radio']) {
	height: 50px;
	width: 240px;
	font-size: 18px;
	border-radius: 6px;
	border: none;
}

input[type='submit'] {
	background-color: #28475C;
	color: #F0E3C0;
}

strong {
	color: #F0E3C0;
	line-height: 24px;
}

hr {
	border: 0; 
	height: 0; 
	border-top: 1px solid rgba(0, 0, 0, 0.1); 
	border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

p {
	color: #F0E3C0;
}

</style>
</head>
<body>
<div class="wrapper">
<div class="ui">
<h2>BMR & Calorie intake calculator</h2>
<form action="" method="get">
<div>
<strong>Weight:</strong><br />
<input type="number" name="weight" value="<?php echo @$_GET['weight']; ?>" required/>
</div>
<br />
<div>
<strong>Height:</strong><br />
<input type="number" style="width: 120px" name="feet"  value="<?php echo @$_GET['feet']; ?>" placeholder="Feet" required/>
<input type="number" style="width: 120px" name="inches" value="<?php echo @$_GET['inches']; ?>" placeholder="Inches" required/>
</div>
<br />
<div>
<strong>Age:</strong><br />
<input type="number" name="age" value="<?php echo @$_GET['age']; ?>" required/>
</div>
<br />
<div>
<strong>Gender:</strong><br />
<input type="radio" name="gender" value="M">Male
<input type="radio" name="gender" value="F">Female
</div>
<div>
	<br />
<input type="submit" value="Calculate!" />
</div>
</form>
<hr>
<?php

if(isset($_GET['weight']) && isset($_GET['inches']) && isset($_GET['age']) && isset($_GET['gender'])) {

@$pounds = $_GET['weight'];
	@$feet = $_GET['feet'] * 12;
	@$inches = $_GET['inches'];
	@$height = $feet + $inches;
	@$age = $_GET['age'];
	@$gender = $_GET['gender'];

	if($gender == "F") {
	//calculation for men | Forumual for Basal Metabolic Rate
	$bmr = 655 + (4.35 * $pounds) + (4.7 * $height) - (4.7 * $age);
	echo "<p>Your BMR is ".$bmr."</p>";

	$totalCaloriesNeeded = $bmr * 1.2;
	echo "<p>Total Calories Needed: ".$totalCaloriesNeeded." (to stay ".$pounds." lbs.)</p>";

	} elseif($gender == "M") {

	//calculation for women | Forumual for Basal Metabolic Rate
	$bmr = 66 + (6.23 * $pounds) + (12.7 * $height) - (6.8 * $age);
	echo "<p>Your BMR is ".$bmr."</p>";

	$totalCaloriesNeeded = $bmr * 1.2;
	echo "<p>Total Calories Needed: ".$totalCaloriesNeeded." (to stay ".$pounds." lbs.)</p>";

	} else {
		echo "Gender ".$gender." is not supported at this time.";
	}

}

?>
</div>
</div>
</body>
</html>