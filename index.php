<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
if(isset($_POST['submit'])) {
try{
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'app.testing.es@gmail.com';                 // SMTP username
    $mail->Password = 'Admin123@';
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
//    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 465;                                    // TCP port to connect to

//Recipients
    $mail->setFrom('ravissingh21@gmail.com', 'Mailer');
    $mail->addAddress('ravissingh21@gmail.com','Talha');     // Add a recipient


//Content
//    $mail->isHTML(TRUE);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = "Name: " . $_POST[ "name" ] .
    "Email: " . $_POST[ "email" ] .
    "Comment: " . nl2br($_POST[ "comments" ]) . "";
    $mail->AltBody = "Name: " . $_POST[ "name" ] .
        "Email: " . $_POST[ "email" ] .
        "Comment: " . nl2br($_POST[ "comments" ]) . "";


    $mail->send();

     header("Location: http://landingpage.appbuild.me");
 

}
catch(Exception $e){
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
else {
echo 'failed to submit';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Data Analytics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/8f4f6d95f8.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style type="text/css">
.about_icon{display: none;}
@media (max-width: 768px){
  h2{font-size: 24px;}
  .jumbotron.text-center{padding:50px 15px 20px;margin: 0px;}
  #about h2{float: left;}
  #about h4{margin: 0px;}
  .mobile_display_none{display: none;}
  .about_icon{line-height: 60px;float: right;}
  .about_icon{display: block;}
  .clear{clear: both;}
  .button button{width: 100%;}

  #about, .about_bottomsection, #services, #portfolio{border-bottom: 1px solid #ccc;padding-bottom: 25px;}
  .about_bottomsection{padding-bottom: 0px;}
  .about_bottomsection .anal h2{margin-bottom: 0px;}
  #services{padding-bottom: 10px;}
  #services .glyphicon{font-size: 24px;}
  .carousel-control.right, .carousel-control.left{background: transparent;color: #000;opacity: 1;}
  .text-center_mobile{text-align: center;}
  .data_analytics{margin: 20px 0;}
}
</style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Data Analytics NZ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Data Analytics</h1> 
  <p>We specialize in making sense of your business data</p> 
   
   
        
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2>
      <span class="glyphicon glyphicon-signal logo spec about_icon"></span>
      <div class="clear"></div>
      <h4>To help you explore and find patterns in your data. Giving your analysis projects the value you need in your business. To deliver the best possible service in a cost effective way</h4>
      
      <br><a class="button" href="mailto:dataanalytics@gmail.com"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4 mobile_display_none">
      <span class="glyphicon glyphicon-signal logo spec"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey about_bottomsection">
  <div class="row">

    <div class="col-sm-8 anal">
      <h2>Talk to us today about customized data solutions for your business</h2><br>
      
      
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo-small"></span>
      <h4>Excel spreadsheeting</h4>
      <p>Production of reporting templates , advances formulae, macros and Visual Basic processing.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-stats logo-small"></span>
      <h4>Statistical Consultancy</h4>
      <p> Advanced statistical modelling, regression and segmentation to answer statistical problems for clients. Decision  trees , recursive partitioning and factor analyses in terms of defining a reduced question set for a client problem.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-search logo-small"></span>
      <h4>Market research services</h4>
      <p>questionnaire writing , setup of CATI and online surveys using different platforms, analysis of numbers and production of insightful reports including the coding of open ended responses. Merging of big data and market research data to add value as well as statistical modelling of market research data.</p>
    </div>
  </div>
  <br class="mobile_display_none"><br class="mobile_display_none">
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-eye-open logo-small"></span>
      <h4>Datamining and big data services</h4>
      <p>ability to slice and dice a dataset to get insights from data. Churn,retention, acquisition modelling- from database data. Ability to join multiple data sources together to create insight and cost effective decision making solutions.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cloud logo-small"></span>
      <h4>database products</h4>
      <p>setup of reporting of databases and reporting. 
Microsoft access and sql server specialities and querying .</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br clear="mobile_display_none">
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="chart.png" alt="db" width="400" height="300">
        <p><strong>Dashboards</strong></p>
        <p>Bring life to your data</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="tech.png" alt="New York" width="400" height="300">
        <p><strong>Charts</strong></p>
        <p>Forecast for your revenue</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="chart.png" alt="San Francisco" width="400" height="300">
        <p><strong>Build Modelling</strong></p>
        <p>Every data set contains a story</p>
      </div>
    </div>
  </div><br>
  
  <h2 class="white">What our Clients say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 class="white">"Craig supported us with statistical analysis for a large public sector client.  We had a short timeframe to deliver and Craigs responsiveness and delivery ethic helped us ensure a happy client.  He was able to take a wide ranging brief and get things done, adding value at each step.  He is a pleasure to work with and a great proactive communicator."
          <br><span>David Todd (Managing Director - Synergia Ltd)</span></h4>
      </div>
      <div class="item ">
        <h4 class="white">"Data Analytics was aked to critique an Australian Government report dealing with statistical analysis. A prompt and knowledgeable response was received which demonstrated the firm's competency. We would engage Data Analytics again should the need arise"<br><span> JJ Croft (Director)</span></h4>
      </div>
       <div class="item">
        <h4 class="white">"Data Analytics was tasked to build some reports and templates for my business, I found them very friendly and approachable from the outset and they delivered on their promise"<br><span> Ravi (Owner - PC Handyman)</span></h4>
      </div>

      <div class="item">
        <h4 class="white">"Craig has been an asset to Zebra over the last year. Diligently collating and analyzing our data to spot patterns we would have otherwise not seen. Thanks to Craig our business is now more profitable. I would highly recommend"<br><span> Nick (Zebra Finance</span></h4>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- Container (Contact Section) -->
<form method="post">
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center white">Get in touch...</h2>
  <div class="row">
    <div class="col-sm-5">
      <p class="text-center_mobile">Contact us and we'll get back to you within 48 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Ellerslie,Auckland,NZ</p>
      <p><a href="https://www.linkedin.com/in/craig-mackinlay-64114714/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> LinkedIn</p>
      <p><i class="fa fa-mobile" aria-hidden="true"></i> Call us</p>
      <p><a href="mailto:dataanalytics@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email us</a></p>
      
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group button">
            <input class="btn btn-default pull-right" type="submit" name="submit" value="Send">
          <!-- <button class="btn btn-default pull-right" type="submit">Send</button> -->
        </div>
      </div>
    </div>
  </div>
</div>

</form>

<footer class="container-fluid text-center mobile_display_none">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>

<p class="text-center_mobile data_analytics">Data Analytics NZ Ltd 2018</p>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>