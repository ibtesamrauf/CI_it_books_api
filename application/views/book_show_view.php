<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->
    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


                       <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script>

function showUser() {
  // var str1 = document.getElementById("btn");
  // var str = str1.value;
  // var x = $("#std_roll").val();
  // var xa = document.getElementById("txt1").value;
  
     // if (x == "") 
     // {
     //    document.getElementById("txtHint").innerHTML = "";
     //    return;
    // } else 
    { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","<?php echo base_url(); ?>" + "index.php/welcome/show_discussion_comments",  true);
        xmlhttp.send();

         // document.getElementById("inputdefault").value = "My value";
         //                        document.getElementById("inputlg").value = "My value";
                                // alert('pass');
    }
}
// setInterval(function(){
//     showUser() // this will run after every 5 seconds
// }, 1000);
 </script>


        



      




</head>

<!-- <body onload="showUser();"> -->
<body>
 <!-- body onload='enable_text(false)';>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="<?php echo base_url() ?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <!--    <li>
                        <a >About</a>
                    </li> -->
                    <!-- <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

           <!--  <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div> -->
<?php 
// print_r($aa);

// echo $aa[0]->idii."<br>";
// echo $aa[0]->ID."<br>";
// echo $aa[0]->Title."<br>";
// echo $aa[0]->SubTitle."<br>";
// echo $aa[0]->Description."<br>";
// echo $aa[0]->Image."<br>";
// echo $aa[0]->isbn."<br>";

?>
            <div class="col-md-9">

                <div class="thumbnail">
                <br><br><br>
                    <!-- <img class="img-responsive" src="http://www.intrawallpaper.com/static/images/thor_2_the_dark_world-1920x1080.jpg" alt=""> -->
                    <img class="img-responsive" src="<?php echo $aa[0]->Image; ?>" alt="">
                    
                    <div class="caption-full">
                        <!-- <h4 class="pull-right">$24.99</h4> -->
                        <!-- <p><strong>TITLE</strong><br><span style="font-size: 22pt"><?php echo $aa[0]->Title; ?></span></p> -->
<h1><?php echo $aa[0]->Title; ?></h1>
                        <!-- <p><strong>Sub Title: </strong><?php echo $aa[0]->SubTitle; ?></p> -->
<strong>Sub Title: </strong><h2><?php echo $aa[0]->SubTitle; ?></h2>

                                                
                        <p><strong>Desscription: </strong><?php echo $aa[0]->Description; ?></p>
                        <p><strong>Download Link: </strong><a target="_blank" href="https://www.google.com.pk/#q=<?php echo $aa[0]->isbn; ?>"><?php echo $aa[0]->isbn; ?></a>.</p>
                    </div>
                 <!--    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div> -->
                </div>

                <div class="well">

      
                  

                </div>

            </div>

        </div>

    </div>


    

                 
<div class="container">

        <div class="row">
 <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "http://localhost/as/2217/index.php/welcome/showBookView/"+<?php echo $aa[0]->ID; ?>;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = <?php echo $aa[0]->ID; ?> // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//ibtesamkhan.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div></div>
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; IT Books Finder <?php echo date("Y");?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets2/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
   <script id="dsq-count-scr" src="//ibtesamkhan.disqus.com/count.js" async></script>
</body>

</html>
