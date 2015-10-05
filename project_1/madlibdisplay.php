<html>
    <head>
        <title>Madlib Display</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>It's Madlib Time!</h2>
        
        <?php
        
            $noun = $_POST['noun'];
            $adjective = $_POST['adjective'];
            $verb = $_POST['verb'];
            $adverb = $_POST['adverb'];
            $story = 'Your ' . $adjective . ' ' .  $noun .  ' likes to ' . $verb . ' ' . $adverb . '. Is that even possible?';
  
        	$dbc = mysqli_connect('localhost', 'magnoffke', '', 'madlibdatabase')
        	or die('Error connecting to MySQL server.');
        	
        
        	$query = "INSERT INTO madlib_entries (noun, adjective, verb, adverb, story) " . 
        		"VALUES ('$noun', '$adjective', '$verb', '$adverb', '$story')";
        
        	$result = mysqli_query($dbc, $query)
        	 or die('Error querying database.');
        	 
        	echo 'Your Madlib:<br /><br />';
            echo 'Enter a noun: ' . $noun . '<br />';
            echo 'Enter an adjective: ' . $adjective . '<br />';
            echo 'Enter a verb: ' . $verb . '<br />';
            echo 'Enter an adverb: ' . $adverb . '<br /><br />';
            echo 'Your Story: Your ' . $adjective . ' ' .  $noun .  ' likes to ';
            echo $verb . ' ' . $adverb . '. Is that even possible?<br />';
        
        	mysqli_close($dbc);
            
        $mysqli = mysqli_connect("localhost", "magnoffke", "", "madlibdatabase");
        $query = "SELECT * FROM madlib_entries ORDER BY id DESC;";
        $result = mysqli_query($mysqli, $query);
            if (!$result) {
                exit("Database query [[$query]] error:" . mysql_error($mysqli));
            }
        ?>

        
        <div>
            <br /><hr />
            <h3>Other Madlib Entries</h3>

        </div>
    
        <?php while ($record = mysqli_fetch_assoc($result)) { ?>
            <div>
                <ul>
                    <?= '<li>' . $record["story"] . '</li>'; ?>
                </ul>
            </div>
        <?php } ?>
        
    <a href="madlibform.html">Back to Mad Lib Form &rsaquo;&rsaquo;</a>
 
    <body>

</html>