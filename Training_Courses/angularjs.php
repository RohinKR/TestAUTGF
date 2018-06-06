<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AngularJS</title>
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
                        <h1>Angular JS Training </h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="angularjs.php">Angular JS</a></li>
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
                                    <p> This training is focussed towards the web developers who are looking to use Angular Js to its fullest potential to develop, deploy and test single page applications. During the training a delegate will be acquiring essential skills and knowledge about Angular Js including directives, expressions, templates, filters services and data binding along with MVC.</p>
                                    <hr class="grid-hr">                                
								<h2 class = "h2_blue">Pre-requisites</h2>
                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i>Delegates attending this training should have prior knowledge of web development with HTML and JavaScript. Some Object Oriented Programming knowledge will be advantageous however it is not essential. </li>
                                                                                         
                                  </ul>	
								 
								<hr class="grid-hr">
								<h2 class = "h2_blue">Training Delivery</h2>
                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i>4 Days training over the weekend</li>
                                                    <li><i class="fa fa-check"></i>In-class instructor led </li>
						    <li><i class="fa fa-check"></i>10:00 am to 5:00 pm</li>
                                                    <li><i class="fa fa-check"></i>Theory & Practical Exercises</li>
                                                                                         
                                  </ul>	
								  <hr class="grid-hr">
								  <h2 class = "h2_blue">Course Curriculum</h2>
                                                                 <div class="col-md-6">
	                                                                  <h4 class="h4">Introduction to AngularJS</h4>
                                                <ul class="list3">
                                                    <li><i class="fa fa-yelp"></i>What it is and why you should use it</li>
                                                    <li><i class="fa fa-yelp"></i>Obtaining and Installing AngualrJS</li>	
						    </ul>
                                        </div>				
								<div class="col-md-6">
                                    <h4 class="h4">Core Angular JS Concepts</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i> Single Page Application</li>
                                        <li><i class="fa fa-check-circle-o"></i> Bootstrapping ng-app directives</li>
                                        <li><i class="fa fa-check-circle-o"></i> Templates</li>
                                        <li><i class="fa fa-check-circle-o"></i> Repeaters</li>
                                        <li><i class="fa fa-check-circle-o"></i> Data Binding</li>
                                                                              
                                    </ul>
                                    </div>
                                   <div class="col-md-6">
                                    <h4 class="h4">Your first AngularJS project</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-yelp"></i> Tool Dependencies</li>
                                        <li><i class="fa fa-yelp"></i> installing node.js </li>
                                        <li><i class="fa fa-yelp"></i> npm scripts</li>
                                        <li><i class="fa fa-yelp"></i> Managing your source code</li>
                                                                           
                                    </ul>
                                    </div>
                                                              
				<div class="col-md-6">
                                    <h4 class="h4">Angular JS - MVC </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i> MVC Design Pattern</li>
                                        <li><i class="fa fa-check-circle-o"></i> Models</li>
                                        <li><i class="fa fa-check-circle-o"></i> Views</li>
                                        <li><i class="fa fa-check-circle-o"></i> Controllers</li>
                                        <li><i class="fa fa-check-circle-o"></i> Scope</li>
                                        <li><i class="fa fa-check-circle-o"></i> Inversion of control</li>
                                      
                                    </ul>
                                    </div>	
                                                                    <div class="col-md-6">
                                    <h4 class="h4">Data Binding in AngularJS</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-yelp"></i> Passing Data from a Controller to a View</li>
                                        <li><i class="fa fa-yelp"></i> Feeding HTML inputs back to the Controller </li>
                                        <li><i class="fa fa-yelp"></i> Retrieving data from the server</li>
                                        <li><i class="fa fa-yelp"></i> The Angular digest Cycle</li>
                                        <li><i class="fa fa-yelp"></i> Passing Data from a Controller to a View</li>
                                        <li><i class="fa fa-yelp"></i> Debugging Data Bindings </li>
                                        <li><i class="fa fa-yelp"></i> using AngularJS Batarang</li>
                                        <li><i class="fa fa-yelp"></i> using browser console log</li>
                                                                           
                                    </ul>
                                    </div>
                                                              
				<div class="col-md-6">
                                    <h4 class="h4">AngularJS Forms </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i> Form Controller</li>
                                        <li><i class="fa fa-check-circle-o"></i> Form Submissions</li>
                                        <li><i class="fa fa-check-circle-o"></i> Angular JS Form Validation</li>
                                        <li><i class="fa fa-check-circle-o"></i> Debugging Form validation</li>
                                        <li><i class="fa fa-check-circle-o"></i> Angular Form Validation - CSS Classes</li>
                                      
                                    </ul>
                                    </div>
                                <div class="col-md-6">
                                    <h4 class="h4">AngularJS Filters</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-yelp"></i> Using AngularJS Filters</li>
                                        <li><i class="fa fa-yelp"></i> Out-of-the-box & custom Angular filters</li>
                                                                                                                 
                                    </ul>
                                    </div>
                                                              
				<div class="col-md-6">
                                    <h4 class="h4">Angular JS Directives </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i> Consolidating HTML with a Directive</li>
                                        <li><i class="fa fa-check-circle-o"></i> Scope</li>
                                        <li><i class="fa fa-check-circle-o"></i> Template</li>
                                        <li><i class="fa fa-check-circle-o"></i> Parameters</li>
                                        <li><i class="fa fa-check-circle-o"></i> Functions - Link and Compile</li>
                                        <li><i class="fa fa-check-circle-o"></i> Complex Directives</li>
                                        <li><i class="fa fa-check-circle-o"></i> Communicating between directives</li>
                                      
                                    </ul>
                                    </div>
                                                                       <div class="col-md-6">
                                    <h4 class="h4">Angular JS Services</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-yelp"></i> Defining Services</li>
                                        <li><i class="fa fa-yelp"></i> Consolidating shared code</li>
                                        <li><i class="fa fa-yelp"></i> Using Services to share common data</li>
                                        <li><i class="fa fa-yelp"></i> Building our own Services</li>    
                                        <li><i class="fa fa-yelp"></i> RESTFul services with AngularJS</li>                                                                          

                                    </ul>
                                    </div>
                                                              
				<div class="col-md-6">
                                    <h4 class="h4">AngularJS Routing </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i>Improving the User Experience with Routing</li>
                                        <li><i class="fa fa-check-circle-o"></i>Routing Modules</li>
                                        <li><i class="fa fa-check-circle-o"></i> ngRout</li>
                                        <li><i class="fa fa-check-circle-o"></i> routeProviderThe $route service</li>
                                        <li><i class="fa fa-check-circle-o"></i> Nested Routing</li>
                                                                             
                                    </ul>
                                    </div>
                                      <div class="col-md-6">
                                    <h4 class="h4">TDD & Unit Testing with Angular JS</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-yelp"></i>Separation of concern</li>
                                        <li><i class="fa fa-yelp"></i>  TDD with Jasmine </li>
                                        <li><i class="fa fa-yelp"></i> ngMock tests</li>
                                        <li><i class="fa fa-yelp"></i>Testing Controllers</li>    
                                        <li><i class="fa fa-yelp"></i> Testing Filters and directives</li>                                                                          

                                    </ul>
                                    </div>
                                                              
				<div class="col-md-6">
                                    <h4 class="h4">End-to-End Testing Angular JS Applications </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i>Testing with karma</li>
                                        <li><i class="fa fa-check-circle-o"></i>Testing with Protractor</li>
                                        <li><i class="fa fa-check-circle-o"></i> Testing using Selenium</li>
                                                                                                                    
                                    </ul>
                                    </div>
                                <div class="col-md-6">
                                    <h4 class="h4">AngularJS Directives </h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-check-circle-o"></i>AngularJS security Worst Practices – Injection Attacks, XSS, CSP, JSON</li>
                                        <li><i class="fa fa-check-circle-o"></i>Handling Authentications/logins</li>
                                        <li><i class="fa fa-check-circle-o"></i>ngSanitize</li>
                                                                                                                    
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

