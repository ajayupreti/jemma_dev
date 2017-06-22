<html>
<head>
	<title>Jemma Dashboard</title>
<!--  page header start here -->
<?php include 'dashboard/header.php';?>
<link rel = "stylesheet" type = "text/css" href = " <?php echo base_url(); ?>static/css/dashboard.css">

<script type = 'text/javascript' src = " <?php echo base_url(); ?>static/js/dashboard.js"></script>
<!--  page header close here -->

 </head>
 <body onload="getdata()">
 <div class="ui bottom attached  pushable">

 <!--  sidebar start here -->
        <div class="ui visible inverted  left vertical sidebar menu">
          <a class="item jeema-heading" >Jeema</a>
          <a class="item" onclick="profile()"><i class="user icon"></i> profile</a>
         <a class="item" onclick="employees()"><i class="user icon"></i> Employees</a>
        </div>
 <!--  sidebar ends here -->

 <!--  pusher start here -->
<div class="pusher">

        <!--  menubar start here -->
        <div class="navslide navwrap">
                <div class="ui menu icon borderless grid" data-color="inverted white">
                    <div class="right menu colhidden">
                        <div class="ui dropdown item" tabindex="0">
                       <i class="user icon"></i>  Ajay
                            <div class="menu" tabindex="-1">
                               
                                <a class="item" href="profile.html">Profile</a>
                           
                                <a class="item" href="index.html">Sign Out</a>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        <!--  menubar endss here -->

<!--  profile detail section start here -->
<?php include 'dashboard/profile-detail.php';?>
<!--  employee detail section close here -->

<!--  profile detail section start here -->
<?php include 'dashboard/emp-detail.php';?>
<!--  employee detail section close here -->

</div>
 <!--  pusher ends here -->

</div>

<script type="text/javascript">
$('.menu .item').tab();
$('.dropdown')
  .dropdown({
    transition: 'drop'
  })
;
</script>
 </body>
 </html>