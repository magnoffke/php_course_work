
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Calculate Your BMI</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h1>BMI Calculator</h1>
    <h2>Enter your information to calculate your BMI...</h2>
  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset id="mainForm">
        <label for="noun">Enter Your Weight (pounds):</label>
        <input type="text" id="weight" name="weight" /><br />
        <label for="verb">Enter Your Height (inches):</label>
        <input type="text" id="height" name="height" /><br />

    <input type="submit" value="Submit" name="submit" />
  
    </form>
        
    <h3>Your BMI: </h3>
        
        <?php
        
        if (isset($_POST['submit']))
        {
        
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $numweight = (int)$weight;
            $numheight = (int)$height;
            
            $bmi = (($numweight / ($numheight * $numheight)) * 703);
 
        	
        	if ($bmi >= 18.5 && $bmi <= 25) 
        	{
        	    echo '<p>Your BMI is ' . round($bmi, 2) . '. You are a normal weight.</p>';
        	}
            elseif ($bmi < 18.5)
            {
                echo '<p>Your BMI is ' . round($bmi, 2) . '. You are underweight. You should probably see a doctor.</p>';
            } 
            else
            {
                echo '<p>Your BMI is ' . round($bmi, 2) . '. You are overweight. You should probably see a doctor.</p>';
            }
            
        }
    
        
        ?>
 
    </body>

</html>