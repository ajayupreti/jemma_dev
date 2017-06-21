<div class="login-box">

 <?php echo $this->session->flashdata('error_msg'); ?>
  <form id="f1" method="post" action="<?php echo base_url(); ?>login/login_user" class="ui large form">

      <div class="ui stacked login-div">

  <h2 class="ui image header">
      <div class="content form-heading">
        Log-in to your account
      </div>
    </h2>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon "></i>
            <input type="text" name="email" id="view" class="email-id" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon "></i>
            <input type="password" name="password" class="password" placeholder="Password">
          </div>
        </div>
        
        <div class="ui  animated submit button black" tabindex="0">
      <div class="visible content submit-btn">Login</div>

      <div class="hidden content">
        <i class="right arrow icon "></i>
      </div>
    </div>
    <div class="ui border-top">
      New to us? <a href="register">Register</a>
    </div>
       <div  class="ui " style="font-size: 12pt;">
<a  href="#" class="ui floated-right forgot">Forgot Password?</a></div>
    
      </div>

      <div class="ui error message"></div>

    </form>
      </div>
