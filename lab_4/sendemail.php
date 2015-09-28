<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Send Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
  $from = 'elmer@makemeelvis.com';
  $subject = $_POST['subject'];
  $text = $_POST['elvismail'];

if ((!empty($subject)) && (!empty($text))) {
    echo 'You forgot the email subject and body text.<br />';
}
else {
        if (empty($subject) || empty($text)) {
            if (empty($subject)) {
                echo 'You forgot the subject line.<br />';
            } else {
                echo 'You forgot the email body text. <br />';
            }
        } else {
    
      $dbc = mysqli_connect('localhost', 'magnoffke', '', 'elvis_store')
        or die('Error connecting to MySQL server.');
    
      $query = "SELECT * FROM email_list";
      $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
    
      while ($row = mysqli_fetch_array($result)){
        $to = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $msg = "Dear $first_name $last_name,\n$text";
        mail($to, $subject, $msg, 'From:' . $from);
        echo 'Email sent to: ' . $to . '<br />';
      } 
    
      mysqli_close($dbc);
      
    }
  
}
?>

</body>
</html>
