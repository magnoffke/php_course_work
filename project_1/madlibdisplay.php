<html>
    <head>
        <title>Madlib Display</title>
    </head>
    <body>
        <h2>It's Madlib Time!</h2>
        
        <?php
        
            $noun = $_POST['noun'];
            $adjective = $_POST['adjective'];
            $verb = $_POST['verb'];
            $adverb = $_POST['adverb'];
  
        	$dbc = mysqli_connect('localhost', 'magnoffke', '', 'madlibdatabase')
        	or die('Error connecting to MySQL server.');
        	
        
        	$query = "INSERT INTO madlib_entries (noun, adjective, verb, adverb) " . 
        		"VALUES ('$noun', '$adjective', '$verb', '$adverb')";
        
        	$result = mysqli_query($dbc, $query)
        	 or die('Error querying database.');
        	 
        	echo 'Your Madlib:<br /><br />';
            echo 'Enter a noun: ' . $noun . '<br />';
            echo 'Enter an adjective: ' . $adjective . '<br />';
            echo 'Enter a verb: ' . $verb . '<br />';
            echo 'Enter an adverb: ' . $adverb . '<br /><br /><br />';
            echo 'Your ' . $adjective . ' ' .  $noun .  ' likes to ';
            echo $verb . ' ' . $adverb . '. Is that even possible?<br />';
        
        	mysqli_close($dbc);
            
        ?>
 
    <body>

</html>