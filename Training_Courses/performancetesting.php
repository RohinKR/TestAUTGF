<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Performance Testing</title>
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
                        <h1>Performance Testing (JMeter)</h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="Software-Testing-Courses.php">Software Testing Courses</a></li>

                            <li><a href="performancetesting.php">Performance Testing (JMeter)</a></li>
                        </ol>
                    </div><!-- container -->
                </div><!-- head-bg -->
            </section><!-- page-header -->


            <section class="single-blog">
                <div class="container">
				
				        <div class="row"> 					
						
						<div class="col-md-8 col-sm-12 col-xs-12 widgets">
                            <div class="single">
                                <h1>Overview</h1>
                                <div class="content">
                                    <p>The course is designed for software testing professionals and anyone who is interested in planning and performing web application performance tests. The main goal of the training program is to define the process, tools, issues and challenges for the performance testing in variety of web environments. 
The course has two levels. Fundamental Level is addressing for professionals requiring to have a basic understanding of performance testing. However, they can move to Advance Level in order to learn the in depth knowledge. 
</p>
							    <hr class="grid-hr">                                
								<h2 class = "h2_blue">Pre-requisites</h2>
                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i>Delegated attending this training should have an exposure to software testing area in a professional environment. </li>
                                                                                         
                                  </ul>	
								  <hr class="grid-hr">								  
								  <h2 class = "h2_blue">Course Objectives</h2>
                                    
								   <ul class="list3">
                                                    <li><i class="fa fa-check"></i>Examine performance requirements and ensure that the requirements are realistic and achievable.</li>
                                                    <li><i class="fa fa-check"></i>Specify what types of performance tests are required and create tests, test cases and test scripts.</li>
													<li><i class="fa fa-check"></i>Communicate adequately with appropriate technical personnel to ensure that the correct test environments are set up</li>
                                                    <li><i class="fa fa-check"></i>Understand the capabilities of performance testing tools and make a significant contribution to tool selection.</li>
						   <li><i class="fa fa-check"></i>Execute performance tests and analyse the results</li>
                                                      <li><i class="fa fa-check"></i>Make a contribution to diagnosing performance problems.</li>
						   <li><i class="fa fa-check"></i>Understand how to test a site’s reliability and scalability prior to release.</li>
                                                   
                                                                                         
                                  </ul>	
								<hr class="grid-hr">
								<h2 class = "h2_blue">Training Delivery</h2>
                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i>2-4 Days training over the weekend</li>
                                                    <li><i class="fa fa-check"></i>In-class instructor led </li>
													<li><i class="fa fa-check"></i>10:00 am to 5:00 pm</li>
                                                    <li><i class="fa fa-check"></i>Theory & Practical Exercises</li>
                                                                                         
                                  </ul>	
								  <hr class="grid-hr">
								  <h2 class = "h2_blue">Course Curriculum</h2>
                                                                 <div class="col-md-6">
	                                                                  <h4 class="h4">Fundamental Level (Jmeter)</h4>
                                                <ul class="list3">
                                                    <li><i class="fa fa-yelp"></i>Introduction to Performance testing</li>
                                                    <li><i class="fa fa-yelp"></i>Purpose of performance testing </li>	
						    <li><i class="fa fa-yelp"></i> Threads and users</li>
                                                    <li><i class="fa fa-yelp"></i> Why use JMeter? </li>
                                                    <li><i class="fa fa-yelp"></i>Introduction to Jmeter</li>
						    <li><i class="fa fa-yelp"></i>JMeter installation</li>
			          		    <li><i class="fa fa-yelp"></i> configuring classpath</li>
                                                    <li><i class="fa fa-yelp"></i> Launching Jmeter Interface </li>	
						    <li><i class="fa fa-yelp"></i> Record and playing back with Proxy</li>
                                                    <li><i class="fa fa-yelp"></i> Applying Load on Testcases with Thread Group  </li>
                                                    <li><i class="fa fa-yelp"></i> Additional plugins to Listeners and Threadgroups</li>
						    <li><i class="fa fa-yelp"></i> Assertions in Jmeter</li>
                                                    <li><i class="fa fa-yelp"></i> Controllers in Jmeter</li>
			          		    <li><i class="fa fa-yelp"></i>  Listeners in JMeter</li>
                                                    <li><i class="fa fa-yelp"></i>  Analysing the Load with Listeners </li>	
						    <li><i class="fa fa-yelp"></i>  Sample, Average, Median, Deviation, Throughput</li>
                                                    <li><i class="fa fa-yelp"></i>  Regular expression extraction for dynamic responses </li>
                                                    <li><i class="fa fa-yelp"></i> Importance of Correlation </li>
						    <li><i class="fa fa-yelp"></i> Usage of Correlation on Dynamic values</li>
                                                </ul>
                                        </div>				
								<div class="col-md-6">
                                    <h4 class="h4">Advanced Level (Advanced Jmeter)</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i> Preparing remote environment</li>
                                        <li><i class="fa fa-check-circle-o"></i> BEAN SHELL SCRIPTING</li>
                                        <li><i class="fa fa-check-circle-o"></i> CONFIGURATION ELEMENTS</li>
                                        <li><i class="fa fa-check-circle-o"></i> Running distributed</li>
                                        <li><i class="fa fa-check-circle-o"></i> Gathering and analysing results</li>
                                        <li><i class="fa fa-check-circle-o"></i> Running tests for long durations</li>
                                        <li><i class="fa fa-check-circle-o"></i> Response time graphs</li>
                                        <li><i class="fa fa-check-circle-o"></i> Running distributed</li>
                                        <li><i class="fa fa-check-circle-o"></i> Analyzing results</li>
                                        <li><i class="fa fa-check-circle-o"></i> Margins of Error</li>
                                        <li><i class="fa fa-check-circle-o"></i> Interpreting statistical results</li>
                                        <li><i class="fa fa-check-circle-o"></i> Finding the bottlenecks</li>
                                        <li><i class="fa fa-check-circle-o"></i> Integration of Selenium Testcases with Jmeter</li> 
                                       
                                    </ul>
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

