<?php include('header.php') ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Noffke Vinyl Collection</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="aboutus.html">About</a>
                    </li>
                    <li>
                        <a href="#">Alphabetical Listing</a>
                    </li>
                    <li>
                        <a href="#">Albums by Category</a></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Noffke Vinyl
                    <small>Our Collection</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Post a New Record</h4>
                    <div class="input-group">
                    <p><i>You must supply a username and password to add a new record.</i></p>    
                        <form action="new_post.php">
                            <input type="submit" value="Get Started">
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>See Vinyl by Genre</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Rock</a>
                                </li>
                                <li><a href="#">Pop</a>
                                </li>
                                <li><a href="#">Folk</a>
                                </li>
                                <li><a href="#">Other</a>
                                </li>
                            </ul>
                        </div>

                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>About Us</h4>
                    <p>The Noffkes have been collecting vinyl for at least 10 years.</p>
                    <a href="aboutus.html">Read more about us &raquo;</a>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
            <?php

            require_once('appvars.php');
            require_once('connectvars.php');
    
            // Connect to the database 
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Retrieve the score data from MySQL
            $query = "SELECT * FROM vinylblog ORDER BY id DESC";
            $data = mysqli_query($dbc, $query);
            
            // Loop through the array of albums, formatting it as HTML 
              echo '<table>';
              $i = 0;
              while ($row = mysqli_fetch_array($data)) { 
                // Display the album data
                if ($i == 0) {
                  echo '<tr><td colspan="2" class="albumrecord">Artist: ' . $row['artistname'] . '</td></tr>';
                }
                
                echo '<tr><td class="albumrecord">';
                echo '<span class="score">' . $row['score'] . '</span><br />';
                echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
                echo '<strong>Date:</strong> ' . $row['date'] . '</td></tr>';
                echo '<td><img src="' . GW_UPLOADPATH . $row['albumart'] . '" alt="album image" /></td></tr>';
 
                $i++;
              }
              echo '</table>';
            
              mysqli_close($dbc);
            ?>
    

<?php include('footer.php') ?>        