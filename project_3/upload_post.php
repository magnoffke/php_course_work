<?php
    require_once ('connectvars.php');
    require_once ('appvars.php');

    if (isset($_POST['submit'])) 
    {
     
     $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
     
     //get the info from the post
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    
    
    $artistname = mysqlI_real_escape_string($dbc, $_POST['artistname']);
    $album = mysqli_real_escape_string($dbc, $_POST['album']);
    $yearreleased = $_POST['yearreleased'];
    $category = mysqli_real_escape_string($dbc, $_POST['category']);
    $moreinfo = mysqli_real_escape_string($dbc, $_POST['moreinfo']);
    
        if (!empty($moreinfo) && !empty($artistname) && !empty($album) && !empty($category))
        {
            if ((($image_type == 'image/gif') || ($image_type == 'image/jpeg') || ($image_type == 'image/pjpeg') || ($image_type == 'image/png'))
                && ($image_size > 0) && ($image_size <= GW_MAXFILESIZE))
            {
            
                if ($_FILES['image']['error'] == 0) 
                {
                // Move the file to the target upload folder
                $target = GW_UPLOADPATH . $image;
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
                    {
                    
                    // Connect to the database   
                    $dbc = mysqli_connect('localhost', 'magnoffke', '', 'vinyldatabase') or die('Error connecting to MySQL server.');
                    
                    //write the data to the database
                    $query = "INSERT INTO vinylblog (artistname, album, yearreleased, category, moreinfo, image) " . 
                    "VALUES ('$artistname', '$album', '$yearreleased', '$category', '$moreinfo', '$image')";

                    
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