<?php
    require_once('Product.php');
    require_once('Tool.php');
    require_once('Electronic.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://gist.githubusercontent.com/johnsonch/d676338c09b58ab27675/raw/0fde8550ab8ea5e3db6f3ebf76cad873c5e95dd7/blogpost.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
          <h1>Shipping Manager</h1>
        </div>
        <div class="row">
          <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
            <fieldset>
              <legend>Product Type</legend>
              <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Choose 1</label>
                <div class="col-lg-10">
                  <select class="form-control" name="form_type" id="select">
                    <option value="generic">Generic</option>
                    <option value="tool">Tool</option>
                    <option value="electronic">Electronic</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <hr>


        <div class="row">
          <?php
            $show_shipping_form = false;
            if(isset($_POST))
            {
              if(isset($_POST['form_type']) && !empty($_POST['form_type']))
              {
                  switch ($_POST['form_type'])
                  {
                    case 'generic':
                        $form = new Product();
                        break;
                    case 'tool':
                      $form = new Tool();
                      break;
                    case 'electronic':
                      $form = new Electronic();
                      break;
                    default:
                      $form = new Product();
                      break;
                  }
                
                $show_shipping_form = true;
              } 
            }
          ?>

          <?php if($show_shipping_form): ?>
          <h2>Shipping form</h2> 
          <form class="form-horizontal" action="<?= $form->postTo() ?>" method="post" role="form">
            <fieldset>
            <legend><?= $form->productType() ?></legend>
              <?=  $form->renderForm(); ?>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
          
          <?php else: ?>
            <h3>Choose a product type to display the shipping form!</h3>
          <?php endif; ?>
          
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.jss"></script>

</body>

</html>