<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AET Level 4 - Diploma in Education and Training</title>
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
                        <h1>AET Level 4 - Diploma in Education and Training </h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="level4.php">AET Level 4 - Diploma in Education and Training</a></li>
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
						

									
									<li class = "h4"><i class = "fa fa-arrow-circle-right"></i><b>IT501:</b> Introduction to Information Technology</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM502: </b> Principles of Marketing </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM503:</b> Business Communication </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>AF504: </b> Introduction to Accounting</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM505: </b> Introduction to Quantitative Methods    </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM506:</b>  Business Economic Environment </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>AF507:</b> Management Accounting</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HM508:</b> Basics of Travel, Tourism and Hospitalit</li>
										<li class = "h4"><i class = "fa fa-arrow-circle-right"></i><b>BM509:</b> Internet Marketing</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HM510: </b> Contemporary Hospitality Industry </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HM511:</b> Hospitality & Tourism Operation Management </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM512: </b> Human Resources Management</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HM513: </b> Hospitality & Tourism Marketing Management   </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HM514:</b>  International Hospitality & Tourism Business Environment </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>HM515:</b> Hospitality Operations Management</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM516:</b> Reasearch Methodologies</li>	

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