<?php
    require_once ('connectvars.php');
    require_once ('appvars.php');

    if (isset($_POST['submit'])) 
    {
      
     //get the info from the post
    $albumart = $_FILES['albumart']['name'];
    $albumart_size = $_FILES['albumart']['size'];
    $albumart_type = $_FILES['albumart']['type'];
    
    
    $artistname = $_POST['artistname'];
    $album = $_POST['album'];
    $yearreleased = $_POST['yearreleased'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
        if (!empty($description) && !empty($artistname) && !empty($album) && !empty($category))
        {
            if ((($albumart_type == 'image/gif') || ($albumart_type == 'image/jpeg') || ($albumart_type == 'image/pjpeg') || ($albumart_type == 'image/png'))
                && ($albumart_size > 0) && ($albumart_size <= GW_MAXFILESIZE))
            {
            
                if ($_FILES['albumart']['error'] == 0) 
                {
                // Move the file to the target upload folder
                $target = GW_UPLOADPATH . $albumart;
                    if (move_uploaded_file($_FILES['albumart']['tmp_name'], $target)) 
                    {
                    
                    // Connect to the database   
                    $dbc = mysqli_connect('localhost', 'magnoffke', '', 'vinyldatabase') or die('Error connecting to MySQL server.');
                    //write the data to the database
                    $query = "INSERT INTO vinylblog (id, artistname, album, yearreleased, category, description, image) 
                    VALUES (0, '$artistname', '$album', '$yearreleased', '$category', '$description', '$albumart')";
                    
                    mysqli_query($dbc, $query)
        	        or die('Error querying database.');
            
                    echo 'Your post  was successfully uploaded.  <br />';
                    echo '<p><a href="index.php">&lt;&lt; Back to blog home.</a></p>';
                    
                    mysqli_close($dbc);
                    }
            
                }
                else
                {
                    echo '<p class="error">Sorry, there was a problem uploading your post.</p>';
                }
            }
            else
            {
                echo '<p class="error">The album art must be a GIF, JPEG, or PNG image file no greater than ' . (GW_MAXFILESIZE / 1024) . ' KB in size.</p>';
            }
    
        }
        
        else {
            echo '<p class="error">Please enter all of the information to add your blog post.</p>';
        }
    }
    
?>