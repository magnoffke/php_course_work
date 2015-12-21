<?php include('../header.php'); 
    require_once ('../connectvars.php');
    require_once ('../appvars.php');?>

<h2>B - Artists</h2>
<?php
	$dbc = mysqli_connect('localhost', 'magnoffke', '', 'vinyldatabase');

    $query = "SELECT * FROM vinylblog WHERE artistname LIKE 'B%' ORDER BY artistname DESC";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

?>

<table><tr> 
<td><strong>Artist</strong></td> 
<td><strong>Album Name</strong></td>  
</tr>

<?php
while($row = mysqli_fetch_array($result)) 
    { 
    echo "<tr>"; 
    echo "<td>" . $row['artistname'] . "</td>"; 
    echo "<td>" . $row['album'] . "</td>"; 
    echo "</tr>"; 
    } 
    echo "</table>"; 
    	mysqli_close($dbc);
    ?>
    
</table>    

<p><a href="../index.php">Back to Home &raquo;</a></p>
</body>
</html>

<?php include('../footer.php') ?> 