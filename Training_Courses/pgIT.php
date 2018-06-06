<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Postgraduate Diploma in IT </title>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>  -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
<?php
require("../Layout/RequiredScripts.php");
?>
        <script type="text/javascript">
            $(function() {
                $("#menu").menu({'effect': 'slide'});
            });
        </script>
        <script type="text/javascript">
            $(window).load(function()
            {
                //show the scroll 
                $('body').addClass('loaded');
            });
        </script>
    </head>
    <body>
                        <?php
require("../Layout/Header_Courses.php");
?>

        <!-- *****************************************
                 *                SECTIONS               *
                 ***************************************** -->

            <section class="page-header-2">
                <div class="head-bg">
                    <div class="container">
                        <i class="fa fa-bullhorn"></i>
                        <h1>Postgraduate Diploma in IT </h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="pgIT.php">Postgraduate Diploma in IT </a></li>
                        </ol>
                    </div><!-- container -->
                </div><!-- head-bg -->
            </section><!-- page-header -->


            <section class="single-blog">
                <div class="container">
				            
                    <div class="row"> 
                        <div class="col-md-8 col-sm-12 col-xs-12 widget-10">
                            <div class="single">
                                <h1>Overview</h1>
                                <div class="content" >
                                    <p></p>
                                    <hr class="grid-hr">

                                    <div class="row">

                                        <div class="col-md-12 col-xs-12">
										 <h4 class="h4">Module List</h4>
									<blockquote class="quote1">

                                    <ul class="list3">
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT701:</b> Law and Ethics in Information Technology</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT702:</b> Web Designing and Multimedia</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT703:</b> IT Security in WWW</li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT704: </b> Business Information Technology Management</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED705: </b> Management Information System</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>T706:</b> Software Development</li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>IT707:</b> Web Engineering</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED708:</b> Project Management</li>
										

                                    </ul> 
                                    </blockquote>

                                        </div>

                                    </div>

                                                                   
									
									 
                                </div><!-- content -->
                            </div><!-- single -->
                        </div><!-- col-8 -->
                        <?php
require("../Layout/Courses_List.php");
?>
                    </div><!-- row -->

                </div><!-- container -->
            </section>
				 


           <!-- ****************************
             *          Footer          *
             **************************** -->
        <!-- start footer section -->
                      <?php
require("../Layout/Footer.php");
?>
        <!-- end footer section -->
        </div><!-- wrap -->

        <a class="totop" href="#">
            <i class="fa fa-angle-double-up"></i>
        </a>

        <script type="text/javascript" src="../js1/script.js"></script>




    </body>
</html>