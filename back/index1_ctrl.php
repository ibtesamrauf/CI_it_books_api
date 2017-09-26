<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>
    <!-- Bootstrap Core CSS -->

    <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel = "stylesheet" type = "text/css" > 
    <link href = "<?php echo base_url(); ?>assets/css/thumbnail-gallery.css"  rel = "stylesheet" type = "text/css" > 
    <!-- Custom CSS -->

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/thumbnail-gallery.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                                        
                </ul>

                <ul class="nav navbar-nav" style="float:right"> 
                    <li>
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

            <div class="col-lg-12">
                <h1 class="page-header">Books List INDEX</h1>
            </div>

                <?php
                    // var_dump($aa);
                    // echo $aa[0]['ID'];
                    foreach ($aa as $value1) 
                    {
                        # code...
                ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="height:400px">
                    <!-- <img src="<?php echo $value1['Image']; ?>"> -->
                    <a class="thumbnail" style="text-decoration: none;height:400px" href="<?php echo base_url(); ?>index.php/welcome/showBookView/<?php echo $value1['ID']?>">
                    <img class="img-responsive"  style="width:400;height:300" src="<?php echo $value1['Image']; ?>" alt="show book detalis">
                    <!-- <figcaption><?php echo $value1['Title']; ?></figcaption> -->
                        <!-- <div class="info"> -->
                            <!-- <div class="row"> -->
                                <!-- <div class="price-details col-md-11"> -->
                                    <p style="font-size:22px;color: black;"><?php echo $value1['Title']; ?></p>
                                    <!-- <p class="details">
                                        <?php //echo $value1['SubTitle']; ?>
                                    </p> -->
                                    <!-- <span class="price-new">$110.00</span> -->
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </a>
            </div>

                <?php
                        // echo $value1['ID'];
                        // echo $value1['Title'];
                        // echo $value1['SubTitle'];
                        // echo $value1['Description'];
                        // echo $value1['Image'];
                        // echo $value1['isbn'];
                        // foreach ($value1 as $key => $value) 
                        // {
                        //  # code...
                        //  echo $key." is ".$value."<br>";
                        // }
                        
                        echo "<br>";
                    }
                    // echo $name;
                    // echo $userName->$name;
                    //      echo $model_return[0]->name;
                    // echo $name;
                ?>

                
            <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div> -->
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- "<?php echo base_url(); ?>assets/js/jquery.js" -->
     <!-- <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel = "stylesheet" type = "text/css" >  -->
   

</body>

</html>
