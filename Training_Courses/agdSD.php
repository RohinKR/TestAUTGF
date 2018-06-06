<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Advanced Graduate Diploma (AGD) in Software Development</title>
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
                        <h1>Advanced Graduate Diploma (AGD) in Software Development</h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="agdSD.php">Advanced Graduate Diploma (AGD) in Software Development</a></li>
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
                                   <ul class = "list3">								
									<li class = "h4"><i class = "fa fa-arrow-circle-right"></i><b>IT501:</b> Introduction to Information Technology</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM502: </b> Principles of Marketing </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM503:</b> Business Communication </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT504: </b> Introduction to Programming</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT505: </b> User Interface and Web Designing   </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT506:</b>  Database Essentials </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>IT507:</b> Networking Essentials</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT508:</b> Internet Concepts</li>
										<li class = "h4"><i class = "fa fa-arrow-circle-right"></i><b>BM509:</b> Internet Marketing</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT510: </b> Computer Ethics </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT511:</b>Basics of Software Development</li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT512: </b> Numerical Methods</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>513: </b> Operating Systems  </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>IT514:</b>  Basics of Object Oriented Programming</li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>IT515:</b> Advanced OOP</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>BM516:</b> Research Methodologies</li>	

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