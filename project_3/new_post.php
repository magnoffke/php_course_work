<?php include('header.php') ?>
<?php
  require_once('authorize.php');
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
      <label for="albumname" class="col-lg-2 control-label">Album Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="albumname" id="albumname" >
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
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="Folk">Folk</option>
              <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
      <label for="description" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="description" name="description"></textarea>
      </div>
    </div> 
    
          <div class="form-group">
            <p>Upload image of album</p><input name="albumart" type="file"/>
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