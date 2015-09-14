<html>
    <head>
        <title>Aliens Abducted Me - Report an Abduction</title>
    </head>
    <body>
        <h2>Aliens Abducted Me - Report an Abduction</h2>
        
        <?php
            $when_it_happened = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
<<<<<<< HEAD
            $alien_description = $_POST['aliendescription'];
=======
            $alien_description = $_POST['description'];
>>>>>>> 0ee8d0a04a2439da881a2234a77b0fe094cd23f2
            $fang_spotted = $_POST['fangspotted'];
            $email = $_POST['email'];
            
            echo 'Thanks for submitting the form.<br />';
            echo 'You were abducted ' . $when_it_happened;
            echo ' and were gone for ' . $how_long . '<br />';
            echo 'Describe them: ' . $alien_description . '<br />';
            echo 'Was Fang there? ' . $fang_spotted . '<br />';
            echo 'Your email address is ' . $email;
            
        ?>
 
    <body>

</html>
