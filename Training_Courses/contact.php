<!DOCTYPE html>
<html lang="en">
    <head>
        <title>At ErpTraining, we could be glad to be of service to you. We look forward to your suggestions and feedback.</title>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>  -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,300italic,300,700,600italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/hover-min.css" />
        <link rel="stylesheet" type="text/css" href="css/loader.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/count.js"></script>
        <script type="text/javascript" src="js/pi.boundManager.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/holder.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/switcher.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/menu.effect.js"></script>
   <?php
         require("db/DatabaseConnection.php");
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $date = date('Y-m-d H:i:s');
              $insertQuery = mssql_query("INSERT INTO enquiries (name,email,subject,message,Date)
				VALUES(' $name','$token','$email','$subject','$message','$date')");
			
			echo "Message Sent";

              header("Location: index.php");
                  }
                  else {
                   echo "Meassage not Sent. Please Call us on: ";
                    }
        
        ?>
        <script type="text/javascript">
            $(function() {
                $("#menu").menu({'effect' : 'slide'});
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
require("Layout/Header.php");
?>


    <!-- *****************************************
         *                SECTIONS               *
         ***************************************** -->
        <section class="page-header-2">
            <div class="head-bg">
                
    <div class="container"> <i class="fa fa-envelope"></i> 
      <h1>Contact Us </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact us</li>
                </ol>
                </div><!-- container -->
            </div><!-- head-bg -->
        </section><!-- page-header -->

        <section class="contact2">
        <div class="row">
            
    <div class="col-md-12"> 
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.3397433281402!2d-0.2813368845360202!3d51.56200501453062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760fb5e9f7ddb1%3A0x5a31c1a73658db7a!2sERP+Training!5e0!3m2!1sen!2suk!4v1445007350947" style="border:0;width:100%; height:400px;"></iframe>
    </div>
    <!-- col -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="contact_text">
                <p><h1>Get in Touch</h1></p>
                </div>
                    <form role="form" class="contact-form" method="POST" action="php/contact-form.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        
                         <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                        <label>Message</label>
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-default btn-lg pull-right">
                        <i class="fa fa-envelope"></i>Submit</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contactus_info">
                    <h3>Main <strong>Office</strong></h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <strong>Address :</strong><p>1 Olympic way, Wembley, </p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middlesex HA9 0NP</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <strong>Phone :</strong><p>+020-330-21103</p>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                <strong>Fax :</strong><p>+020-8782-1104</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <strong>E-mail :</strong><p><a href="training@erptraining.co.uk">training@erptraining.co.uk</a></p>
                            </li>
                        </ul>
                    </div><!-- contact_info -->
                   
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <!-- ****************************
             *          Footer          *
             **************************** -->
        <!-- start footer section -->
       
         <?php
require("Layout/Footer.php");
?>

        </div><!-- wrap -->
        
    <a class="totop" href="#">
        <i class="fa fa-angle-double-up"></i>
    </a>

    </body>
</html>

