
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Calculate Your BMI</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h2>BMI Calculator</h2>
    <p>Enter your information to calculate your BMI!</p>
  
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    
    <label for="noun">Enter Your Weight :</label>
    <input type="text" id="weight" name="weight" /><br />
    <label for="verb">Enter Your Height:</label>
    <input type="text" id="height" name="height" /><br />

    <input type="submit" value="Submit" name="submit" />
  
    </form>
        
    <h2>Your BMI: </h2>
        
        <?php
        
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $numweight = (int)$weight;
            $numheight = (int)$height;
            
            $bmi = (($numweight / ($numheight * $numheight)) * 703);
 
        	
        	if ($bmi >= 18.5 && $bmi <= 25) 
        	{
        	    //don't use echo, Maggie - Find the replacement!
        	    echo 'Your BMI is ' . round($bmi, 2) . ' . You are a normal weight.';
        	}
            elseif ($bmi < 18.5)
            {
                echo 'Your BMI is ' . round($bmi, 2) . ' . You are underweight. You should probably see a doctor.';
            } 
            else
            {
                echo 'Your BMI is ' . round($bmi, 2) . ' . You are overweight. You should probably see a doctor.';
            }
        
        ?>
 
    </body>

</html>