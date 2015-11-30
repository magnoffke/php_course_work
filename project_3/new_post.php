<?php include('header.php') ?>
<?php require_once('db.php') ?>

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
          <label for="ArtistName" class="col-lg-2 control-label">Artist Name</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="ArtistName" id="ArtistName" >
          </div>
        </div>
          
          <div class="form-group">
      <label for="AlbumName" class="col-lg-2 control-label">AlbumName</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="AlbumName" id="AlbumName" >
      </div>
    </div>

    <div class="form-group">
      <label for="YearReleased" class="col-lg-2 control-label">Year Released</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="YearReleased" id="YearReleased" >
      </div>
    </div>
    
    <div class="form-group">
        <label for="Category">Category</label>
        <select name="Category">
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="fiat">Fiat</option>
              <option value="audi">Audi</option>
        </select>
    </div>

    <div class="form-group">
      <label for="Description" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="Description" name="Description"></textarea>
      </div>
    </div> 
    
          
          <div class="form-group">
            <input name="user_file" type="file"/>
          </div>
          
          
          <div class="form-group">
              Description:
              <textarea name="description" class="form-control" rows="3">
              </textarea>
          </div>
          <div class="form-group">
            <input type=submit value="Get File"/>
          </div>
         
         </fieldset>  
      </form>
      

  <fieldset>
 



 
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