<?php include('header.php') ?>
<?php  require_once ('connectvars.php');
        require_once ('appvars.php');
        ?>

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
                        <a href="alphabeticalArtists/alphalist.php">Alphabetical Artist Listing</a>
                    </li>
                    <li>
                        <a href="genreArtists/genrelist.php">Albums by Genre</a></a>
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
                <img style="border:2px solid" width="699" height="264" alt="RecordSplash" title="RecordSplash" src="images/recordsheader.jpg" />

                <h1 class="page-header">
                    Noffke Vinyl
                    <small>Our Collection in No Particular Order</small>
                </h1>

                <!-- Blog Posts -->
                
            <?php

            require_once('appvars.php');
            require_once('connectvars.php');
    
            // Connect to the database 
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Retrieve the score data from MySQL
            $query = "SELECT * FROM vinylblog ORDER BY id DESC";
            $result= mysqli_query($dbc, $query);
            
            // Loop through the array of albums, formatting it as HTML 
              echo '<table>';
              while ($row = mysqli_fetch_array($result)) { 
                // Display the album data
                echo '<tr><td>';
                echo '<h3>' . $row['artistname'] . ': ' . $row['album'] . '</h3><br />';
                echo '</tr></td>';
                echo '<tr><td>';
                echo '<strong>Year Released:</strong> ' . $row['yearreleased'] . '<br />';
                echo '</tr></td>';
                echo '<tr><td>';
                echo '<strong>Genre:</strong> ' . $row['category'] . '</td></tr>';
                echo '<tr><td>';
                echo '<strong>Description:</strong> ' . $row['moreinfo'] . '</td></tr>';
                echo '<tr><td>';
                echo '<td><img src="' . GW_UPLOADPATH . $row['image'] . '" alt="album image" /></td></tr>';
              }
              echo '</table>';
              
            
              mysqli_close($dbc);
            ?>
    



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
                                <li><a href="genreArtists/rock.php">Rock</a>
                                </li>
                                <li><a href="genreArtists/pop.php">Pop</a>
                                </li>
                                <li><a href="genreArtists/folk.php">Folk</a>
                                </li>
                                <li><a href="genreArtists/other.php">Other</a>
                                </li>
                            </ul>
                        </div>

                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                
                <div class="well">
                    <h4>See Vinyl Alphabetically</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="alphabeticalArtists/a.php">A</a>
                                </li>
                                <li><a href="alphabeticalArtists/b.php">B</a>
                                </li>
                                <li><a href="alphabeticalArtists/c.php">C</a>
                                </li>
                                <li><a href="alphabeticalArtists/d.php">D</a>
                                </li>
                                <li><a href="alphabeticalArtists/e.php">E</a>
                                </li>
                                <li><a href="alphabeticalArtists/f.php">F</a>
                                </li>
                                <li><a href="alphabeticalArtists/g.php">G</a>
                                </li>
                                <li><a href="alphabeticalArtists/h.php">H</a>
                                </li>
                                <li><a href="alphabeticalArtists/i.php">I</a>
                                </li>
                                <li><a href="alphabeticalArtists/j.php">J</a>
                                </li>
                                <li><a href="alphabeticalArtists/k.php">K</a>
                                </li>
                                <li><a href="#">L</a>
                                </li>
                                <li><a href="#">M</a>
                                </li>
                                <li><a href="#">N</a>
                                </li>
                                <li><a href="#">O</a>
                                </li>
                                <li><a href="#">P</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Q</a>
                                </li>
                                <li><a href="#">R</a>
                                </li>
                                <li><a href="#">S</a>
                                </li>
                                <li><a href="#">T</a>
                                </li>
                                <li><a href="#">U</a>
                                </li>
                                <li><a href="#">V</a>
                                </li>
                                <li><a href="#">W</a>
                                </li>
                                <li><a href="#">X</a>
                                </li>
                                <li><a href="#">Y</a>
                                </li>
                                <li><a href="#">Z</a>
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
 

<?php include('footer.php') ?>        