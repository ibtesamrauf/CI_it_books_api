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

    <script language="JavaScript">
    // function enable_text(status)
    // {
    // status=!status; 
    //     document.f1.other_text.disabled = status;
    // }
    </script>

<script type="text/javascript">
                    // $(document).ready(function() {
                    //     $("#add_resume1").on("click", function(e) {                
                    //         e.preventDefault;
                    //         //your ajax here
                    //       $("#success").html('<div class="alert alert success">Basic details saved successfully.<div>');
                    //       $('#basicdetails').val('');
                    //       $('.btn.btn-home.save-button')
                    //         .removeClass('disabled')
                    //         .prop('disabled', false);
                    //       $('#add_resume1').prop('disabled', true);
                    //     });
                    // });
                    </script>

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


        <script type="text/javascript">
            
            // Ajax post
            $(document).ready(function() {
                $(".submit").click(function(event) {
                    event.preventDefault();
                    var user_name = $("input#inputdefault").val();
                    var password = $("input#inputlg").val();
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/welcome/discussion",
                        dataType: 'json',
                        data: {inputdefault: user_name, inputlg: password},
                        success: function(res) {
                            // showUser();
                            // alert('pass');
                            if (res)
                            {
               
                                
                                // jQuery("div#test").show();
                                // jQuery("div#value").html(res.inputdefault);
                                // jQuery("div#value_pwd").html(res.inputlg);
                            }
                        }
                    });
                                document.getElementById("inputdefault").value = "";
                                document.getElementById("inputlg").value = "";
                                alert('Comment menshioned');
                                showUser();
                });
            });
        </script> 



         <script type="text/javascript">
            


            // Ajax post
            // $(document).ready(function(){
            // $(document).ready(function(){
            //     // $(function() {
            //     // $(".submit").click(function(event) {
            //     //     event.preventDefault();
            //         // var user_name = $("input#inputdefault").val();
            //         // var password = $("input#inputlg").val();
            //         jQuery.ajax({
            //             type: "POST",
            //             url: "<?php echo base_url(); ?>" + "index.php/welcome/show_discussion_comments",
            //             dataType: 'json',
            //             data: {inputdefault: user_name, inputlg: password},
            //             success: function(res) {
            //                 if (res)
            //                 {
            //                     // Show Entered Value
            //                     jQuery("div#test1").show();
            //                     jQuery("div#value1").html(res.inputdefault);
            //                     jQuery("div#value_pwd1").html(res.inputlg);
            //                 }
            //             }
            //         });
            //     // });
            // });
// function showUser(){
//          event.preventDefault();
//                     var user_name = $("input#inputdefault").val();
//                     var password = $("input#inputlg").val();
//                 jQuery.ajax({
//                         type: "POST",
//                         url: "<?php echo base_url(); ?>" + "index.php/welcome/show_discussion_comments",
//                         dataType: 'json',
//                         data: {inputdefault: user_name, inputlg: password},
//                         success: function(res) {
//                             if (res)
//                             {
//                                 // Show Entered Value
//                                 jQuery("div#test1").show();
//                                 jQuery("div#value1").html(res.inputdefault);
//                                 jQuery("div#value_pwd1").html(res.inputlg);
//                             }
//                         }
//                     });
// }
// setInterval(function(){
//     showUser() // this will run after every 5 seconds
// }, 1000);
        </script>



</head>

<body onload="showUser();">
 <!-- body onload='enable_text(false)';>

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
                <ul class="nav navbar-nav">
                    <li>
                        <a >About</a>
                    </li>
                    <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Contact</a>
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
                        <p><strong>TITLE</strong><br><span style="font-size: 22pt"><?php echo $aa[0]->Title; ?></span></p>
                        <p><strong>Sub Title: </strong><?php echo $aa[0]->SubTitle; ?></p>
                        <p><strong>Desscription: </strong><?php echo $aa[0]->Description; ?></p>
                        <p>Download Link: <a target="_blank" href="https://www.google.com.pk/#q=<?php echo $aa[0]->isbn; ?>"><?php echo $aa[0]->isbn; ?></a>.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <!-- <div class="text-right">
                        <a href="<?php echo base_url(); ?>index.php/welcome/discussion" class="btn btn-success">Leave a Review</a>
                    </div> -->




                    
                       <div id="txtHint">
                            
                          <!-- </div> -->
                    </div>
              <!--       <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div> -->
                    


<!--                     <hr>

                     <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>
 -->                    

                    <?php
                    // // Form Open
                    echo form_open();
                    
                    // // Name Field
                    // echo form_label('User Name');
                    // $data_name = array(
                    //     'name' => 'name',
                    //     'class' => 'input_box',
                    //     'placeholder' => 'Please Enter Name',
                    //     'id' => 'name'
                    // );
                    // echo form_input($data_name);
                    // echo "<br>";
                    // echo "<br>";
                    
                    // // Password Field
                    // echo form_label('Password');
                    // $data_name = array(
                    //     'type' => 'password',
                    //     'name' => 'pwd',
                    //     'class' => 'input_box',
                    //     'placeholder' => '',
                    //     'id' => 'pwd'
                    // );
                    // echo form_input($data_name);
                    ?>
                    <!-- <form action="<?php echo base_url(); ?>index.php/welcome/discussion" method="GET"> -->
                    <div class="form-group">
                      <label for="inputdefault"><?php echo form_label('Name: ');?></label>
                      <?php  
                      $data_name = array(
                        'name' => 'comment_name',
                        'class' => 'form-control',
                        'placeholder' => 'Enter Name',
                        'id' => 'inputdefault',
                        'type' => 'text'
                    );
                    echo form_input($data_name);?>
                      <!-- <input class="form-control" id="inputdefault" name="comment_name" type="text"> -->
                    </div>

                    <div class="form-group">
                      <label for="inputlg"><?php echo form_label('Comment: ');?></label>
                      <?php  
                      $data_name = array(
                        'name' => 'comment',
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Enter Comment',
                        'id' => 'inputlg',
                        'type' => 'text'
                    );
                    echo form_input($data_name);?>
                      <!-- <input class="form-control input-lg" id="inputlg" name="comment" type="text"> -->
                    </div>

                    <div class="text-right">
                        <!-- <input class="btn btn-success" type="submit" value="Leave a Review"> -->
                        <?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
                        <!-- <a href="<?php //echo base_url(); ?>index.php/welcome/discussion" class="btn btn-success">Leave a Review</a> -->
                    </div>
                     <?php 
                // Form Close
                echo form_close(); 


                //  echo "<div id='test'style='display: none'>";
                // echo "<div id='content_result'>";
                // echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
                // echo "<div id='result_show'>";
                // echo "<label class='label_output'>Entered Name :<div id='value'> </div></label>";
                // echo "<br>";
                // echo "<br>";
                // echo "<label class='label_output'>Entered Password :<div id='value_pwd'> </div></label>";
                // echo "<div>";
                // echo "</div>";
                // echo "</div>";

                ?>
                    <!-- </form> -->
                     <div class="row">
                    

                     



                   <!--  <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>
                    
                    <!-- <form name='f1' method='post'>
                    <input type="checkbox" name='others' onclick="enable_text(this.checked)" >Others
                    <input type=text name=other_text>
                    </form> -->

                </div>

            </div>

        </div>

    </div>


      <?php 
                // echo "<div class='row'>";
                // echo "<div id='test1'style='display: none'>";
                // echo "<div id='content_result'>";
                // echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
                // echo "<div id='result_show'>";
                // echo "<label class='label_output'>Entered Name :<div id='value1'> </div></label>";
                // echo "<br>";
                // echo "<br>";
                // echo "<label class='label_output'>Entered Password :<div id='value_pwd1'> </div></label>";
                // echo "<div>";
                // echo "</div>";
                // echo "</div>"; 
                // echo "</div>";
            ?>
    <!-- /.container -->


                  <!--   <button type="submit" class="btn btn-home" name= "btn-save5" id= "add_resume1" required="required">Click</button>

                    <input type="text" class="btn btn-home save-button" name= "btn-save5" id= "btn-save5" disabled required="required" >
                    <button type="submit" class="btn btn-home save-button" name= "btn-save5" id= "btn-save4" disabled required="required">Save</button>

                    <button type="submit" class="btn btn-home save-button" name= "btn-save5" id= "btn-save3" disabled required="required">Save</button>
 -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; My Website 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets2/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>

</body>

</html>
