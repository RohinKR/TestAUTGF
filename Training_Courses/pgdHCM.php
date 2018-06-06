<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Postgraduate Professional Diploma in Health Care Management   </title>
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
                        <h1>Postgraduate Professional Diploma in Health Care Management  </h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="ppdHM.php">Postgraduate Professional Diploma in Health Care Management </a></li>
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
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HCM701:</b> Managing People and Health Care   </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED702: </b>HRM & Personal Professional Development </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b> HCM703:</b>  Management of Risk and Quality in the Health care Services </li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>HCM704: </b> Financial Management Accounting for Health Care</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED705: </b> Management Information System   </li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED706:</b>  Ethics, Law and Change Management</li>
										<li class = "h4"><i class="fa fa-arrow-circle-right"></i>  <b>HM707:</b> Communications Management for Health Care</li>
                                        <li class = "h4"><i class="fa fa-arrow-circle-right"></i> <b>MED708:</b> Health Care Policy and Strategic Planning</li>
										

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