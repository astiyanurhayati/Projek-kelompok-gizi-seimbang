


<?php
	function bmr_calories_metric($age, $height_cm, $weight_kg, $gender, $kilojoules = false) {
		$bmr = 0;
		if ($gender == "women") {
			//		Women Metric 	BMR = 655.1 + ( 9.563 × weight in kg ) + ( 1.850 × height in cm) – ( 4.676 × age in years )
			$bmr = 655.1 + (9.563 * $weight_kg) + (1.850 * $height_cm) - (4.676 * $age);
		}
		if ($gender == "men") {
			//Men 	Metric 	BMR = 66.5 + ( 13.75 × weight in kg ) + ( 5.003 × height in cm ) – ( 6.755 × age in years )
			$bmr = 66.5 + (13.75 * $weight_kg) + (5.003 * $height_cm) - (6.755 * $age);
		}
		if ($kilojoules) {
			$bmr = $bmr * 4.184;
		}
		return $bmr;
	}
	function bmr_calories_imperial($age, $height_inch, $weight_pound, $gender, $kilojoules = false) {
		$bmr = 0;
		if ($gender == "women") {
			//Women: Imperial 	BMR = 655.1 + ( 4.35 × weight in pounds ) + ( 4.7 × height in inches ) - ( 4.7 × age in years )
			$bmr = 655 + (4.35 * $weight_pound) + (4.7 * $height_inch) - (4.7 * $age);
		}
		if ($gender == "men") {
			//Men Imperial 	BMR = 66 + ( 6.2 × weight in pounds ) + ( 12.7 × height in inches ) – ( 6.76 × age in years )
			$bmr = 66 + (6.2 * $weight_pound) + (12.7 * $height_inch) - (6.76 * $age);
		}
		if ($kilojoules) {
			$bmr = $bmr * 4.184;
		}
		return $bmr;
	}
	$answer = "";
	$dob = "";
	$feet = "";
	$inches = "";
	$weight = "";
	$gender = "";
	$result = "";
	function yeardob($dob_val) {
		$dob = new DateTime($dob_val);
		$today = new DateTime('today');
		$obj = date_diff($dob, $today, FALSE);
		return $obj->y;
	}
	if (isset($_POST["bmrsubmit"])) {
		$dob = $_POST['dob'];
		$feet = $_POST['feet'];
		$inch = $_POST['inch'];
		$weight = $_POST['weight'];
		$gender = $_POST["gender"];
		/* Age */
		$dob = new DateTime($dob);
		$today = new DateTime('today');
		$obj = date_diff($dob, $today, FALSE);
		$age = $obj->y;
		$date = $dob->format("Y-m-d");
		/* Covert height */
		$feetcm = $feet * 30.48;
		$inchcm = $inch * 2.54;
		$cm = $feetcm + $inchcm;
		$bmr = bmr_calories_metric($age, $cm, $weight, $gender, false);
		$activity = $_POST["activity_level"];
		$bmrkj = $bmr * 4.184;
		switch ($activity) {
			/*
			 If you are sedentary (little or no exercise) : Calorie-Calculation = BMR x 1.2
			 If you are lightly active (light exercise/sports 1-3 days/week) :
			 Calorie-Calculation = BMR x 1.375
			 If you are moderatetely active (moderate exercise/sports 3-5 days/week) :
			 Calorie-Calculation = BMR x 1.55
			 If you are very active (hard exercise/sports 6-7 days a week) :
			 Calorie-Calculation = BMR x 1.725
			 If you are extra active (very hard exercise/sports & physical job or 2x
			 training) : Calorie-Calculation = BMR x 1.9
			 */
			case 1 :
				$activity_type = "No Activity or No Exercise";
				$calories = $bmr * 1.2;
				break;
			case 2 :
				$activity_type = "Light Exercise/Sports 1-3 Days/Week";
				$calories = $bmr * 1.375;
				break;
			case 3 :
				$activity_type = "Moderate Exercise/Sports 3-5 Days/Week";
				$calories = $bmr * 1.55;
				break;
			case 4 :
				$activity_type = "Hard Exercise/Sports 6-7 Days a Week";
				$calories = $bmr * 1.725;
				break;
			case 5 :
				$activity_type = "Very Hard Exercise/Sports & Physical Job or 2x Training";
				$calories = $bmr * 1.9;
				break;
			default :
				$activity_type = "No Activity or No Exercise";
				$calories = $bmr * 1.2;
				break;
		}
		$kilojoules = $calories * 4.184;
		$result = "<p>According to the Age $age Weight $weight Kg And Height $feet'$inch\" ($cm Cm) a ".ucfirst($gender).". BMR is  ".number_format($bmr).".</p><p>if you engage in $activity_type for that day. The estimate for maintaining your current weight (based upon your chosen activity level) is ".number_format($calories)." calories (".number_format($kilojoules)."KJ). </p> ";
	}
?>
<form method='post' >
	<p>Date of Birth : <input type="date" name="dob" value="<?php echo $date; ?>" required /></p>
	<p>Feet : <input type="number" name="feet" value="<?php echo $feet; ?>"   step="1" min="1" max="10" required  /> Inch : <input type="number" value="<?php echo $inch; ?>" min="0"  max="11" maxlength="2" name="inch" step="1" required  /></p>
	<p>Gender : <input type="radio" name="gender" value="women" <?php echo($gender == "women") ? "checked" : ""; ?> required  /> Women <input type="radio" name="gender" value="men" <?php echo($gender == "men") ? "checked" : ""; ?> /> Men </p>
	<p>Weight :<input type="number" name="weight" value="<?php echo $weight; ?>" step="1"  required  /></p>
	<p>
		<select name="activity_level" >
			<option>Select  Exercise Type</option>
			<option value ="1">No Activity or No Exercise</option>
			<option value ="2">Light Exercise/Sports 1-3 Days/Week</option>
			<option value ="3">Moderate Exercise/Sports 3-5 Days/Week</option>
			<option value ="4">Hard Exercise/Sports 6-7 Days a Week</option>
			<option value ="5">Very Hard Exercise/Sports & Physical Job or 2x Training</option>
		</select></p>
	<p><input type="submit" name="bmrsubmit" value="Get Result" /></p>
	<?php
	echo $result;
?>
</form>

