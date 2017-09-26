<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IT Books Search</title>
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

  <!--   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 -->
<script type="text/javascript">
//     $.fn.pageMe = function(opts){
//     var $this = this,
//         defaults = {
//             perPage: 7,
//             showPrevNext: false,
//             hidePageNumbers: false
//         },
//         settings = $.extend(defaults, opts);
    
//     var listElement = $this;
//     var perPage = settings.perPage; 
//     var children = listElement.children();
//     var pager = $('.pager');
    
//     if (typeof settings.childSelector!="undefined") {
//         children = listElement.find(settings.childSelector);
//     }
    
//     if (typeof settings.pagerSelector!="undefined") {
//         pager = $(settings.pagerSelector);
//     }
    
//     var numItems = children.size();
//     var numPages = Math.ceil(numItems/perPage);

//     pager.data("curr",0);
    
//     if (settings.showPrevNext){
//         $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
//     }
    
//     var curr = 0;
//     while(numPages > curr && (settings.hidePageNumbers==false)){
//         $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
//         curr++;
//     }
    
//     if (settings.showPrevNext){
//         $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
//     }
    
//     pager.find('.page_link:first').addClass('active');
//     pager.find('.prev_link').hide();
//     if (numPages<=1) {
//         pager.find('.next_link').hide();
//     }
//     pager.children().eq(1).addClass("active");
    
//     children.hide();
//     children.slice(0, perPage).show();
    
//     pager.find('li .page_link').click(function(){
//         var clickedPage = $(this).html().valueOf()-1;
//         goTo(clickedPage,perPage);
//         return false;
//     });
//     pager.find('li .prev_link').click(function(){
//         previous();
//         return false;
//     });
//     pager.find('li .next_link').click(function(){
//         next();
//         return false;
//     });
    
//     function previous(){
//         var goToPage = parseInt(pager.data("curr")) - 1;
//         goTo(goToPage);
//     }
     
//     function next(){
//         goToPage = parseInt(pager.data("curr")) + 1;
//         goTo(goToPage);
//     }
    
//     function goTo(page){
//         var startAt = page * perPage,
//             endOn = startAt + perPage;
        
//         children.css('display','none').slice(startAt, endOn).show();
        
//         if (page>=1) {
//             pager.find('.prev_link').show();
//         }
//         else {
//             pager.find('.prev_link').hide();
//         }
        
//         if (page<(numPages-1)) {
//             pager.find('.next_link').show();
//         }
//         else {
//             pager.find('.next_link').hide();
//         }
        
//         pager.data("curr",page);
//         pager.children().removeClass("active");
//         pager.children().eq(page+1).addClass("active");
    
//     }
// };

// $(document).ready(function(){
    
//   $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:24});
    
// });
</script>

</head>

<body>

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
                <ul class="nav navbar-nav" >
                   <!--  <li>
                        <a href="">About</a>
                    </li> -->
                    <!-- <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                                        
                </ul>

                <ul class="nav navbar-nav" style="float:right"> 
                  <!--   <li>
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

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <?php 

 


    if (isset($_SESSION['alert1'])) 
    {
        # code...
    ?>
    <CENTER><h3 style="color:red;"><?php echo $_SESSION['alert1']?></h3></CENTER><br>

    
    <?php
    }
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Books List</h1>
            </div>

<div id="myTable">
<?php 

// var_dump($aa);

?>
                <?php
                    // var_dump($aa);
                    // var_dump($aa[0]->ID);
                    foreach ($aa as $value1) 
                    {
                        // foreach ($variable as $key => $value) {
                        //     # code...
                        // }
                        # code...
                ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="height:400px">
                    <!-- <img src="<?php //echo $value1['Image']; ?>"> -->
                    <a class="thumbnail" style="text-decoration: none;height:380px" href="<?php echo base_url(); ?>index.php/welcome/showBookView/<?php echo $value1->ID?>">
                    <img class="img-responsive"  style="width:400;height:270" src="<?php echo $value1->Image; ?>" alt="show book detalis">
                    <!-- <figcaption><?php //echo $value1['Title']; ?></figcaption> -->
                        <!-- <div class="info"> -->
                            <!-- <div class="row"> -->
                                <!-- <div class="price-details col-md-11"> -->
                                    <p style="font-size:17px;color: black;"><?php echo $value1->Title; echo "    ".$value1->idii;  ?></p>
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
</div>
                <!--  <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div> -->

        

            <!--   <div class="col md 12 text-right">
              <p>Default:</p>
              <ul class="pagination pagination-lg">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
             </div>-->
        
        </div>


              <div class="col md 12 text-right">

              <?php 
$Current_page_number = $this->session->userdata('pagenumberSession');

echo "<p style='font-size:18pt' align='left'>Current page number: $Current_page_number</p>";
?>
              <!-- <p>Pagination:</p> -->
              <ul class="pagination pagination">
             
<?php 
// var_dump($_SESSION['lastpageSession']); 
$pageNum = $_SESSION['lastpageSession'];
for ($i=1; $i <=$pageNum  ; $i++) { 
?>

    <li><a href="<?php echo base_url(); ?>index.php/Welcome/showData/<?php echo $i;?>"><?php echo $i ?></a></li>

<?php
}
?>
  </ul>
            </div>


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
     <!-- // <script src="<?php //echo base_url(); ?>assets/js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
     <!-- // <script src="<?php// echo base_url(); ?>assets/js/bootstrap.min.js"></script> -->
<!-- "<?php //echo base_url(); ?>assets/js/jquery.js" -->
     <!-- <link href = "<?php //echo base_url(); ?>assets/css/bootstrap.min.css"  rel = "stylesheet" type = "text/css" >  -->
   

</body>

</html>
