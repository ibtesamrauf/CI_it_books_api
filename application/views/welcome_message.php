<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

  <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel = "stylesheet" type = "text/css" > 
    <link href = "<?php echo base_url(); ?>assets/css/thumbnail-gallery.css"  rel = "stylesheet" type = "text/css" > 
  
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

</head>
<body>

 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>  -->
                <a class="navbar-brand" href="<?php echo base_url() ?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav" > -->
                    <!-- <li> 
                        <a href="">About</a>
                    </li> 
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                                        
                <!-- </ul> -->

                <!-- <ul class="nav navbar-nav" style="float:right">  -->
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/firstPage1">First Page</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/previousPage1">Previous Page</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/nextPage1">Next Page</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/lastPage1">Last Page</a>
                    </li> -->

                <!-- </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<div id="container">

<?php 
if (isset($_SESSION['errorZeroBooks'])) 
{
?>
<CENTER><h3 style="color:red;"><?php echo $_SESSION['errorZeroBooks']?></h3></CENTER><br>
<?php
}
?>
<br>


<div class="container">
	<div class="row">
		<h2 align="center"><img style="display:inline;;" class="img-responsive" src="<?php echo base_url(); ?>assets2/images/cc1.jpg"></h2>
		<form action="index.php/welcome/index" method="GET">
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" id="searchBar" name="searchBar" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit" value="Show Data" id="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
        </form>
	</div>

	   <!-- Footer -->
   <style type="text/css">


  .footer, .push {
    height: 97px; /* .push must be the same height as .footer */
	}
 
</style>
        <footer class="footer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="push"></div>
</div>
                    <p>Copyright &copy; IT Books Finder <?php echo date("Y");?></p>
                </div>
            </div>
</div>



	
	<br><br><br>

        </footer>
	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
</div>

</body>
</html>
