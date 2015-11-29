<?php
    $filename = $_FILES['user_file']['name'];
    $filesize = $_FILES['user_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
    $uploadFile = $directory . $filename;
    $description = $_POST['description'];
    $time = date("Y-m-d H:i:s");
    
    $mysqli = mysqli_connect("localhost", "root", "", "instasomething");

    if (file_exists($_FILES['user_file']['tmp_name']))
    {
        if (move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadFile))
        {
            echo 'The file is valid and was successfully uploaded.  <br />';
            echo "The file, $filename, is $filesize bytes.<br />";
            
            $query = "INSERT INTO Posts (file_path, description, post_date) VALUES ('$filename', '$description', '$time');";
            $result = mysqli_query($mysqli, $query);
            if (!$result) {
                exit('Database query error: '. mysql_error($mysqli));
            }
            else
            {
              // We want them to see their post
              header('Location: index.php');
            }
        }
        else
        {
          echo 'The file was not moved';
        }
    }
    else
    {
        echo "The file is not there!";
    }

?>