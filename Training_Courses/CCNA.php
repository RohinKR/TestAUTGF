<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CCNA</title>
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
                        <h1>CCNA</h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="CCNA.php">CCNA</a></li>
                        </ol>
                    </div><!-- container -->
                </div><!-- head-bg -->
            </section><!-- page-header -->


            <section class="single-blog">
                <div class="container">
				            <div class="protfolio-filter">
                  <ul>
                    <li><a class="button outline-outward" href="#training">Training</a></li>
                    <li><a <a  class="button outline-outward" href="#internship">Internship</a></li>
                    <li><a class="button outline-outward"  href="#careerdevelopment">Career Development</a></li>                    
                </ul>
            </div>
                    <div class="row"> 
                        <div class="col-md-8 col-sm-12 col-xs-12 widget-10">
                            <div class="single">
                                <h1>Overview</h1>
                                <div class="content" >
                                    <p>Cisco Certified Network Associate (CCNA) Routing and Switching is a certification program for entry-level network engineers that helps maximize your investment in foundational networking knowledge and increase the value of your employer's network. CCNA Routing and Switching is for candidates looking to start their career as Network Specialists, Network Administrators, and Network Support Engineers.</p>
                                    <hr class="grid-hr">

                                    <div class="row">

                                        <div class="col-md-6 col-xs-12">
										 <h4 class="h4"> List of Courses</h4>
                                    <ul class="list3">
                                        <li><a href=""><i class="fa fa-arrow-circle-right"></i> CCNA Certification Training </a></li>
                                        <li><a href=""><i class="fa fa-arrow-circle-right"></i> Internship Program</a></li>
                                        <li><a href=""><i class="fa fa-arrow-circle-right"></i> Career Development Program</a></li>

                                    </ul> 
                                           <h4 class="h4"> Course Objective</h4>
                                    <ul class="list3">
                                        <li><i class="fa fa-cog"></i>Describe network fundamentals and build simple LANs </li>
                                        <li><i class="fa fa-cog"></i> Establish Internet connectivity </li>
                                        <li><i class="fa fa-cog"></i> Manage network device security </li>
                                        <li><i class="fa fa-cog"></i> Describe IPv6 basics</li>
                                        <li><i class="fa fa-cog"></i> Troubleshoot VLAN issues, explain how STP works, configure EtherChannel</li>
                                        <li><i class="fa fa-cog"></i> understand the idea behind Layer 3 redundancy </li>
										<li><i class="fa fa-cog"></i>Troubleshoot IP connectivity </li>
                                        <li><i class="fa fa-cog"></i> Define the characteristics, functions, and components of a WAN </li>
                                        <li><i class="fa fa-cog"></i> Configure and troubleshoot EIGRP in an IPv4 environment, and configure EIGRP for IPv6 </li>
                                        <li><i class="fa fa-cog"></i>Configure, verify, and troubleshoot multi-area OSPF</li>
                                        <li><i class="fa fa-cog"></i> Describe SNMP, syslog and NetFlow, and manage Cisco device configurations, IOS images, and licenses</li>
                                    </ul> 
                                        </div>
                                      
									<div class="col-md-6 col-xs-12">
                                            <h4 class="h4"> Prerequisites</h4>
                                            <blockquote class="quote1">
                                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i> Basic computer literacy   </li>
                                                    <li><i class="fa fa-check"></i> Basic PC operating system navigation skills  </li>
                                                    <li><i class="fa fa-check"></i> Basic Internet usage skills  </li>
                                                    <li><i class="fa fa-check"></i> Basic IP address knowledge   </li>
                                                </ul>
                                            </blockquote>
											
											  <h4 class="h4"> Highlights</h4>
                                            <blockquote class="quote1">
                                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i> Based on Hands on exercises</li>
                                                    <li><i class="fa fa-check"></i> Comprehensive theoretical and practical understanding </li>
                                                    <li><i class="fa fa-check"></i> Support for future training progression </li>
                                                    <li><i class="fa fa-check"></i> Training and certification material</a></li>
                                                    <li><i class="fa fa-check"></i> Interview preparation</a></li>
													<li><i class="fa fa-check"></i> Placement assistance</a></li>
                                                    <li><i class="fa fa-check"></i> Certification based training </a></li>
                                                    <li><i class="fa fa-check"></i> 7 days lab access </a></li>
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
				 <section id="training" class="aboutus">
                <div class="bg__black">
                    <div class="container">
                            <!-- <i class="fa fa-headphones fa-5x"></i> -->
                        <div class="heading_title">
                            <h2>Training course Structure</h2>

                            <div class="titleborderOut">
                                <div class="titleborder"></div>
                            </div>
                        </div><!-- heading_title -->
                        <div class="row">
                            <div class="col-md-12">
                                
								<div class="col-md-6 col-xs-12">
										  <h4 class="h4">Module 1: Building a Simple Network</h4>
										  <h4 >Module Objective: Describe network fundamentals and build simple LANs</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i>Lesson 1: Exploring the Functions of Networking</li>
                                                    <li><i class="fa fa-pencil"></i> Lesson 2: Understanding the Host-to-Host Communications Model </li>				
												    <li><i class="fa fa-pencil"></i> Lesson 3: Introducing LANs </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 4: Operating Cisco IOS Software </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 5: Starting a Switch </li>				
                                                    <li><i class="fa  fa-play "></i> Lab 1-1: Performing Switch Startup and Initial Configuration </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 6: Understanding Ethernet and Switch Operation </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 7: Troubleshooting Common Switch Media Issues </li>				
                                                    <li><i class="fa  fa-play "></i> Lab 1-2: Troubleshooting Switch Media Issues </li>	
                                                     <li><i class="fa fa-pencil"></i>Lesson 8: Module Summary </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 9: Module Self-Check </li>														

                                                </ul>
											</div>

							<div class="col-md-6 col-xs-12">
							              <h4 class="h4">Module 2: Establishing Internet Connectivity</h4>
										  <h4 >Module Objective: Establish Internet Connectivity</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i> Lesson 1: Understanding the TCP/IP Internet Layer</li>
                                                    <li><i class="fa fa-pencil"></i> Lesson 2: Understanding IP Addressing and Subnets </li>
													<li><i class="fa fa-pencil"></i> Lesson 3: Understanding the TCP/IP Transport Layer</li>
													<li><i class="fa fa-pencil"></i> Lesson 4: Exploring the Functions of Routing </li>	
													<li><i class="fa fa-pencil"></i> Lesson 5: Configuring a Cisco Router</li>											                                            
													<li><i class="fa fa-play "></i> Lab 2-1: Performing Initial Router Setup and Configuration</li>
                                                    <li><i class="fa fa-pencil"></i> Lesson 6: Exploring the Packet Delivery Process </li>
													<li><i class="fa fa-pencil"></i> Lesson 7: Enabling Static Routing</li>
													<li><i class="fa fa-pencil"></i> Lesson 8: Managing Traffic Using ACLs </li>	
													<li><i class="fa fa-pencil"></i> Lesson 9: Enabling Internet Connectivity</li>
													<li><i class="fa fa-play "></i> Lab 2-2: Connecting to the Internet</li>
													<li><i class="fa fa-pencil"></i> Lesson 10: Module Summary </li>	
													<li><i class="fa fa-pencil"></i> Lesson 11: Module Self-Check</li>
                                                </ul>
                                            
											</div>		   
                           
						   </div>
						       <div class="col-md-12">
                                
								<div class="col-md-6 col-xs-12">
										  <h4 class="h4">Module 3: Managing Network Device Security</h4>
										  <h4>Module Objective: Manage network device security</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i>Lesson 1: Securing Administrative Access</li>
                                                    <li><i class="fa fa-play"></i> Lab 3-1: Enhancing the Security of the Initial Configuration </li>				
												    <li><i class="fa fa-pencil"></i> Lesson 2: Implementing Device Hardening </li>				
                                                    <li><i class="fa fa-play"></i> Lab 3-2: Device Hardening </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 3: Implementing Traffic Filtering with ACLs </li>				
                                                    <li><i class="fa fa-pencil"></i> Lab 3-3: Filtering Traffic with ACLs </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 6: Understanding Ethernet and Switch Operation </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 7: Troubleshooting Common Switch Media Issues </li>				
                                                    <li><i class="fa fa-play"></i> Lab 1-2: Troubleshooting Switch Media Issues </li>	
                                                     <li><i class="fa fa-pencil"></i>Lesson 4: Module Summary </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 5: Module Self-Check </li>														

                                                </ul>
											</div>

							<div class="col-md-6 col-xs-12">
							              <h4 class="h4">Module 4: Introducing IPv6</h4>
									      <h4>Module Objective: Describe IPV6 Basics</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i> Lesson 1: Introducing Basic IPv6</li>
                                                    <li><i class="fa fa-play"></i> Lab 4-1: Configure and Verify Basic IPv6 </li>
													<li><i class="fa fa-pencil"></i> Lesson 2: Understanding IPv6</li>
													<li><i class="fa fa-play"></i> Lab 4-2: Configure and Verify Stateless Auto-configuration</li>	
													<li><i class="fa fa-pencil"></i> Lesson 5: Configuring a Cisco Router</li>											                                            
													<li><i class="fa fa-pencil"></i> Lab 2-1: Performing Initial Router Setup and Configuration</li>
                                                    <li><i class="fa fa-pencil"></i> Lesson 3: Configuring IPv6 Routing </li>
													<li><i class="fa fa-play"></i> Lab 4-3: Configure and Verify IPv6 Routing</li>
													<li><i class="fa fa-pencil"></i> Lesson 4: Module Summary </li>													
													<li><i class="fa fa-pencil"></i> Lesson 5: Module Self-Check</li>
                                                </ul>
											</div>		   
                           
						   </div>
						    <div class="col-md-12">
                                
								<div class="col-md-6 col-xs-12">
										  <h4 class="h4">Module 5: Building a Medium-Sized Network</h4>
										  <h4>Module Objective: Implement and verify VLANs and trunking</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i>Lesson 1: Implementing VLANs and Trunks</li>
                                                    <li><i class="fa fa-pencil"></i>Lesson 2: Routing Between VLANs </li>				
												    <li><i class="fa fa-play"></i> Lab 5-1: Configuring Expanded Switched Networks </li>				
                                                    <li><i class="fa fa-pencil"></i>Lesson 3: Using a Cisco Network Device as a DHCP Server </li>				
                                                    <li><i class="fa fa-play"></i> Lab 5-2: Configuring DHCP Server</li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 4: Troubleshooting VLAN Connectivity </li>				
                                                    <li><i class="fa fa-play"></i> Lab 5-3: Troubleshooting VLANs and Trunks </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 5: Building Redundant Switched Topologies </li>				
                                                    <li><i class="fa fa-play"></i> Lab 5-4: Optimizing STP </li>	
                                                     <li><i class="fa fa-pencil"></i>Lesson 6: Improving Redundant Switched Topologies with EtherChannel </li>				
                                                    <li><i class="fa fa-play"></i> Lab 5-5: Configuring EtherChannel </li>		
													<li><i class="fa fa-pencil"></i>Lesson 7: Understanding Layer 3 Redundancy</li>
													<li><i class="fa fa-pencil"></i> Lesson 8: Module Summary</li>	
													<li><i class="fa fa-pencil"></i> Lesson 9: Module Self-Check</li>											                                            													

                                                </ul>
											</div>

							<div class="col-md-6 col-xs-12">
							              <h4 class="h4">Module 6: Troubleshooting Basic Connectivity</h4>
									      <h4>Module Objective: Troubleshoot IP connectivity</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i> Lesson 1: Troubleshooting IPv4 Network Connectivity</li>
                                                    <li><i class="fa fa-play"></i>Lab 6-1: Troubleshooting IP Connectivity </li>
													<li><i class="fa fa-pencil"></i> Lesson 2: Troubleshooting IPv6 Network Connectivity</li>
													<li><i class="fa fa-pencil"></i> Lesson 3: Module Summary</li>	
													<li><i class="fa fa-pencil"></i> Lesson 4: Module Self-Check</li>											                                            
													
                                                </ul>
											</div>		   
                           
						   </div>
						    <div class="col-md-12">
                                
								<div class="col-md-6 col-xs-12">
										  <h4 class="h4">Module 7: Wide Area Networks</h4>
										  <h4>Module Objective: Define characteristics, functions and components of a WAN</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i>Lesson 1: Understanding WAN Technologies</li>
                                                    <li><i class="fa fa-pencil"></i> Lesson 2: Configuring Serial Encapsulation </li>				
												    <li><i class="fa fa-play"></i> Lab 7-1: Configuring and Troubleshooting a Serial Connection </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 3: Establishing a WAN Connection Using Frame Relay </li>				
                                                    <li><i class="fa fa-pencil"></i> Lab 7-2: Establishing a Frame Relay WAN</li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 4: Introducing VPN Solutions </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 5: Configuring GRE Tunnels </li>				
                                                    <li><i class="fa fa-play"></i> Lab 7-3: Establishing a GRE Tunnel </li>	                                               	
                                                     <li><i class="fa fa-pencil"></i>Lesson 6: Module Summary </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 7: Module Self-Check </li>														

                                                </ul>
											</div>

							<div class="col-md-6 col-xs-12">
							              <h4 class="h4">Module 8: Implementing an EIGRP-Based Solution</h4>
									      <h4>Module Objective: Configure and troubleshoot EIGRP in an IPv4 environment, and configure EIGRP for IPv6</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i> Lesson 1: Implementing EIGRP</li>
                                                    <li><i class="fa fa-play"></i>Lab 8-1: Implementing EIGRP </li>
													<li><i class="fa fa-pencil"></i>Lesson 2: Troubleshooting EIGRP</li>
													<li><i class="fa fa-play"></i> Lab 8-2: Troubleshooting EIGRP</li>	
													<li><i class="fa fa-pencil"></i> Lesson 3: Implementing EIGRP for IPv6</li>											                                            
													<li><i class="fa fa-play"></i> Lab 8-3: Implementing EIGRP for IPv6</li>
													<li><i class="fa fa-pencil"></i> Lesson 4: Module Summary </li>													
													<li><i class="fa fa-pencil"></i> Lesson 5: Module Self-Check</li>
                                                </ul>
											</div>		   
                           
						   </div>
						    <div class="col-md-12">
                                
								<div class="col-md-6 col-xs-12">
										  <h4 class="h4">Module 9: Implementing a Scalable OSPF-Based Solution</h4>
										  <h4>Module Objective: Configure, verify and troubleshoot multi-area OSPF</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i>Lesson 1: Implementing OSPF</li>
                                                    <li><i class="fa fa-play"></i> Lab 9-1: Implementing OSPF </li>				
												    <li><i class="fa fa-pencil"></i> Lesson 2: Multiarea OSPF IPv4 Implementation</li>				
                                                    <li><i class="fa fa-play"></i> Lab 9-2: Configuring Multiarea OSPF </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 3: Troubleshooting Multiarea OSPF </li>				
                                                    <li><i class="fa fa-play"></i> Lab 9-3: Troubleshooting Multiarea OSPF</li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 4: Examining OSPFv3 </li>				
                                                    <li><i class="fa fa-play"></i> Lab 9-4: Configuring OSPF for IPv6 </li>				
                                                     <li><i class="fa fa-pencil"></i>Lesson 5: Module Summary </li>				
                                                    <li><i class="fa fa-pencil"></i> Lesson 6: Module Self-Check </li>		                                          </ul>
											</div>

							<div class="col-md-6 col-xs-12">
							              <h4 class="h4">Module 10: Network Device Management</h4>
									      <h4>Module Objective: Describe SNMP, syslog, and NetFlow, and manage Cisco device configurations, Cisco IOS images, and licenses</h4>

                                                <ul class="list3">
                                                    <li><i class="fa fa-pencil"></i> Lesson 1: Configuring Network Devices to Support Network Management Protocols</li>
                                                    <li><i class="fa fa-play"></i> Lab 10-1: SNMP and Syslog Basic Configuration </li>
													<li><i class="fa fa-play"></i> Lab 10-2: Analyzing NetFlow Data</li>
													<li><i class="fa fa-pencil"></i> Lesson 2: Managing Cisco Devices</li>	
													<li><i class="fa fa-pencil"></i> Lesson 3: Licensing</li>											                                            
													<li><i class="fa fa-play"></i> Lab 10-3: Managing Cisco Devices and Licensing</li>                                                   
													<li><i class="fa fa-pencil"></i> Lesson 4: Module Summary </li>													
													<li><i class="fa fa-pencil"></i> Lesson 5: Module Self-Check</li>
                                                </ul>
											</div>		   
                           
						   </div>
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- bg__contact -->
            </section><!-- mission statement -->
            <div id= "internship">
                <br>
                <br>
                </div>
			<section id="" class="aboutus">
                <div class="container" style = "padding:0;">
                    <div class="heading_title">
                        <h2>Internship</h2>
                        <div class="titleborderOut">
                            <div class="titleborder"></div>
                        </div>
                    </div><!-- heading_title -->
                    <div class="row">
                        <div class="col-md-12">
                            <p class="ourskils_p">Getting into IT industry can be a challenging task when it comes to either switching your career or even if you have some prior experience overseas. Local market experienced is always preferred, having CCNA certification and theoretical knowledge is not enough to compete in the industry. </p>							
                            <p class="ourskils_p">ERP Training & Solutions offers the candidates to engage themselves in a live project, where they can put their theory into practice. Candidates will not only get a chance to learn what happens in the real world but also become more confident during the interviews when they have a practical knowledge from live project. </p>							

						</div>
						
                    </div><!-- row -->
                </div><!-- container -->                             
		  </section><!-- aboutus -->
			 <div id= "careerdevelopment">
                <br>
                <br>
                </div>
            <section id="" class="aboutus">
			                <div class="bg__black">
                <div class="container" style = "padding:0;">
                    <div class="heading_title">
                        <h2>Career Development Program</h2>
                        <div class="titleborderOut">
                            <div class="titleborder"></div>
                        </div>
                    </div><!-- heading_title -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="ourskils_p">With more and more IP connectivity needed as the internet becomes the reality, a skills gap could slow the rollout of networking infrastructure. According to the INSEAD Business School Talent Competiveness Index report 2014 there will be a 1.2 million person shortfall in IP networking professionals by the end of this year.</p>							
                            <p class="ourskils_p">This program is designed to prepare fresh talent in this field. We provide training with best in class and online tools to prepare you to become a Network Professional followed by real time project experience.</p>							
                      
					  </div>
						<div class="col-md-6">
                                            <h4 class="h4"> Eligibility Criteria </h4>
                                            <blockquote class="quote1">
                                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i> Must have at least diploma level qualification in any discipline</li>
                                                    <li><i class="fa fa-check"></i> Passing the initial assessment is mandatory </li>
                                                    <li><i class="fa fa-check"></i> Basic knowledge of computer and internet </li>                                       
                                                </ul>
                                            </blockquote>

                                        </div>
							 <div class="col-md-12">
								<hr class="grid-hr">

							<h2 class = "h2_blue">The Joining Process</h2>
                            <p class="ourskils_p">Due to extremely competitive nature of this program, your application must be approved by our counselling department. You may also have to take a short aptitude test and / or an interview. Once approved by our program consultant you will receive a formal offer letter of acceptance and a contract agreement with complete terms and conditions of the relevant program.</p>							
                        </div>
							<div class="col-md-6">
                                            <h4 class="h4"> What's Included?</h4>
                                            <blockquote class="quote1">
                                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i>Training on Certified Cisco Network Professional (CCNA) curriculum </li>
                                                    <li><i class="fa fa-check"></i>Internship</li>
                                                    <li><i class="fa fa-check"></i>Recruitment Support </li>                                       
                                                </ul>
                                            </blockquote>
                                        </div>
											<div class="col-md-6">
                                            <h4 class="h4"> Delivery Of Program </h4>
                                            <blockquote class="quote1">
                                                <ul class="list3">
                                                    <li><i class="fa fa-check"></i> Total Duration of the program 3 months over the weekends</li>
                                                    <li><i class="fa fa-check"></i> In-Class Instructor Led </li>
                                                    <li><i class="fa fa-check"></i> CCNA Certification </li>                                       
                                                </ul>
                                            </blockquote>
                                        </div>
										
										
						
                    </div><!-- row -->
                </div><!-- container -->                             
</div>          
		  </section><!-- aboutus -->


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