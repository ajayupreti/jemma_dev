<html>
<head>
  <title>Login</title>
<!--  page header start here -->
<link rel="stylesheet" type="text/css" href=" <?php echo base_url(); ?>static/css/index.css">
<?php include 'dashboard/header.php';?>
<script type="text/javascript" src=" <?php echo base_url(); ?>static/js/index.js"></script>
<!--  page header close here -->


  
</head>
<body onload="checkcookie()">
  <div class="ui menu">
    <div class="ui container ">
      <a href="#">
        <img class="header-img" src="images/logo32.png" height="20" >
      </a> 
    </div>
</div>

<!--  container start here -->
<div class="ui text container">
<!--  grid start here -->
<div class="ui middle aligned center aligned grid center-div">
<div class="column">
<!--  login form start here -->
<?php include 'login/login-form.php';?>
<!--  login form close here -->

<!--  forgot form start here -->
<?php include 'login/forgot-form.php';?>
<!--  forgot form close here -->
    
  </div>
</div>
<!--  grid end here -->

<!--  error msg show here -->
<div class="ui negative message show_msg" hidden="">
   <i class="close icon"></i><div class="header error_msg"></div>
</div>
<!--  error msg end here -->
</div>
<!--  container end here -->
 </body>
 </html>