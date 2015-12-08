<?php include('header.php') ?>
<?php
  require_once('authorize.php');
?>

<?php
    require_once ('connectvars.php');
    require_once ('appvars.php');
    session_start();
?>


<div class="row">
    <div class="col-lg-12">
        <h1>Vinyl Collection</h1>
        <h2>What's the latest addition?</h2>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
      <form enctype="multipart/form-data" action="upload_post.php" method="post" role="form">
         
        <fieldset>
        <legend>Add new post</legend>
          
        <div class="form-group">
          <label for="artistname" class="col-lg-2 control-label">Artist Name</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="artistname" id="artistname" >
          </div>
        </div>
          
          <div class="form-group">
          <label for="album" class="col-lg-2 control-label">Album Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="album" id="album" >
            </div>
          </div>

        <div class="form-group">
          <label for="yearreleased" class="col-lg-2 control-label">Year Released</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="yearreleased" id="yearreleased" >
          </div>
        </div>
    
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="select">
              <option value="rock">Rock</option>
              <option value="pop">Pop</option>
              <option value="folk">Folk</option>
              <option value="hiphop">Hip Hop</option>
              <option value="other">Other</option>
        </select>
    </div>

    <div class="form-group">
      <label for="moreinfo" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="moreinfo" name="moreinfo"></input>
      </div>
    </div> 
    
          <div class="form-group">
            <p>Upload image of album</p><input name="image" type="file"/>
          </div>
 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form> 
      
    </div>
</div>
<?php include('footer.php') ?>