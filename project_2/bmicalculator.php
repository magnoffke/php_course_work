<html>
    <head>
        <title>Madlib Display</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>Your BMI: </h2>
        
        <?php
        
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $numweight = (int)$weight;
            $numheight = (int)$height;
            
            $bmi = (($numweight / ($numheight * $numheight)) * 703);
 
        	
        	if ($bmi >= 18.5 && $bmi <= 25) 
        	{
        	    echo 'Your BMI is ' . round($bmi, 2) . ' . You are a normal weight.';
        	}
            elseif ($bmi < 18.5)
            {
                echo 'Your BMI is ' . round($bmi, 2) . ' . You are under weight.';
            } 
            else
            {
                echo 'Your BMI is ' . round($bmi, 2) . ' . You are over weight.';
            }
        
        ?>
 
    <body>

</html>