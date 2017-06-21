          <div class="ui basic segment container text profile_box">
          
            <div class="ui pointing secondary menu">
        <a class="item active" data-tab="first">Personal Details</a>
        <a class="item" data-tab="second">Education Details</a>
        <a class="item " data-tab="third">Address Details</a>
         <a class="item" data-tab="forth">Bank Details/PAN</a>
        <a class="item" data-tab="fifth">Social Contacts</a>
        
      </div>
      <div class="ui tab  active" data-tab="first">
 <div class="ui container  form-step1">
<form class="ui form segment form1" method="post">
     <div class="ui heading">
  <a class="ui ribbon label">Personal Details</a>
</div>

           
        <div class="two fields">
        <div class="field">
         <label>First Name</label>
          <div class="ui left icon input">
            <i class="user icon "></i>
            <input type="text" name="firstname" placeholder="First Name" disabled="" value="">
          </div>
        </div>
          <div class="field">
            <label>Last Name</label>
          <div class="ui left icon input">
            <i class="user icon "></i>
            <input type="text" name="lastname" placeholder="Last Name" disabled="">
          </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>E-mail Id</label>
             <div class="ui left icon input">
            <i class="Mail icon"></i>
            <input type="text" name="emailid" placeholder="E-mail Id" disabled="">
          </div>
          </div>
         <div class="field">
            <label>Personal E-mail Id</label>
              <div class="ui left icon input">
            <i class="Mail icon"></i>
            <input type="text" name="personalemailid" placeholder="Personal E-mail Id" disabled="">
          </div>

          </div>
        </div>
         <div class="two fields">
          <div class="field">
            <label>Password</label>
              <div class="ui left icon input">
            <i class="Lock icon"></i>
            <input type="password" name="password" placeholder="Password" autocomplete="off" disabled="">
          </div>
          </div>
            <div class="field">
            <label>Confirm Password</label>
             <div class="ui left icon input">
            <i class="Lock icon"></i>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" disabled="">
          </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>Date of Joining</label>
            
            <div class="ui left icon input">
         <i class="calendar icon"></i>
            <input type="text" name="doj" placeholder="Date of Joining" id="datepicker" autocomplete="off" class="hasDatepicker" disabled="">
          </div>
          </div>
            <div class="field">
            <label>Date of Birth</label>
            <div class="ui left icon input">
         <i class="calendar icon"></i>
            <input type="text" name="dob" placeholder="Date of Joining" id="datepicker2" autocomplete="off" class="hasDatepicker" disabled="">
          </div>
          </div>
        </div>
       
       
       
        <div class="ui error message"></div>
      </form>
</div></div>


      <div class="ui tab " data-tab="second">
      <div class="ui container ">
<div class="column form-step2">
<form class="ui form form2 segment " method="post">
      <div class="ui heading">
  <a class="ui ribbon label">Education Details</a>
</div>
<div class="ui column add-degree-box">
        <div class="two fields repeat-degree">
          <div class="field">
            <label>Degree</label>
                 <div class="ui left icon input">
            <i class="Student icon"></i>
            <input placeholder="Degree" name="degree" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <label>College Name</label>
             <div class="ui left icon input">
            <i class="Bookmark icon"></i>
           <input placeholder="College Name" name="college" type="text" disabled="">
           </div>
          </div>
        </div>
        </div>

        <h4 class="ui dividing header">Previous Employer Details (optional)</h4>
        <div class="ui column add-employer-box">
        <div class="two fields repeat-employer">
          <div class="field">
              <div class="ui left icon input">
            <i class="Suitcase icon"></i>
            <input placeholder="Previous Employer Name" name="username" type="text" disabled="">
            </div>
          </div>
         <div class="field">
           <div class="ui left icon input">
            <i class="Unlinkify icon"></i>
            <input placeholder="Previous Employer Website/Linkedin" name="username" type="text" disabled="">
            </div>
          </div>
             <div class="field">
            <div class="ui left icon input">
            <i class="Meh icon"></i>
            <input placeholder="Role" name="username" type="text" disabled="">
            </div>
          </div>
        </div>
        </div>

        
       
        <div class="ui error message"></div>
      </form>
      </div>
</div></div>
      <div class="ui tab  " data-tab="third">
      	
      	<div class="ui container  ">
<div class="column form-step3" >
<form class="ui form form3 segment " method="post">
      <div class="ui heading">
  <a class="ui ribbon label">Address Details</a>
</div>
       <h4 class="ui dividing header">Permanent Address (mandatory)</h4>
        <div class="two fields">

          <div class="field">
              <div class="ui left icon input">
            <i class="Home icon"></i>
            <input placeholder="Permanent Address" name="Permanentaddr" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
            <i class="Street View icon"></i>
           <input placeholder="City" name="city" type="text" disabled="">
           </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
          <div class="ui left icon input">
            <i class="Map Pin icon"></i>
            <input placeholder="State" name="state" type="text" disabled="">
            </div>
          </div>
         <div class="field">
            <div class="ui left icon input">
            <i class="Marker icon"></i>
            <input placeholder="Pin Code" name="pincode" type="text" disabled="">
            </div>
          </div>
        </div>

        <h4 class="ui dividing header">Current Address (mandatory)</h4>
       <div class="two fields">

          <div class="field">
              <div class="ui left icon input">
            <i class="Home icon"></i>
            <input placeholder="Current Address" name="currentaddr" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
            <i class="Street View icon"></i>
           <input placeholder="City" name="currentcity" type="text" disabled="">
           </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
          <div class="ui left icon input">
            <i class="Map Pin icon"></i>
            <input placeholder="State" name="currentstate" type="text" disabled="">
            </div>
          </div>
         <div class="field">
            <div class="ui left icon input">
            <i class="Marker icon"></i>
            <input placeholder="Pin Code" name="currentpincode" type="text" disabled="">
            </div>
          </div>
        </div>
         <h4 class="ui dividing header">Emergency Contact (mandatory)</h4>
       <div class="two fields">

          <div class="field">
              <div class="ui left icon input">
            <i class="User icon"></i>
            <input placeholder="Name" name="ecname" type="text" disabled="">
            </div>
          </div>
           <div class="field">
              <div class="ui left icon input">
            <i class="Users icon"></i>
            <input placeholder="Member" name="ecmember" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
            <i class="Life Ring icon"></i>
           <input placeholder="Relation" name="ecrelation" type="text" disabled="">
           </div>
          </div>
        </div>
         <div class="two fields">

          <div class="field">
              <div class="ui left icon input">
            <i class="User icon"></i>
            <input placeholder="Name" name="first name" type="text" disabled="">
            </div>
          </div>
           <div class="field">
              <div class="ui left icon input">
            <i class="Users icon"></i>
            <input placeholder="Member" name="first name" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
            <i class="Life Ring icon"></i>
           <input placeholder="Relation" name="last name" type="text" disabled="">
           </div>
          </div>
        </div>
       
        <div class="ui error message"></div>
      </form>
      </div>
</div>
      </div>
      <div class="ui tab " data-tab="forth">
      	
      	<div class="ui container">
<div class="column form-step4" >
<form class="ui form form4 segment " method="post">
     <div class="ui heading">
  <a class="ui ribbon label">Bank Details/PAN</a>
</div>
<h4 class="ui dividing header">Account Details</h4>
        <div class="two fields">
          <div class="field">
          <div class="ui left icon input">
            <i class="User icon"></i>
            <input placeholder="Account Holder Name" name="accntholrname" type="text" disabled="">
            </div>
          </div>
          <div class="field">
           <div class="ui left icon input">
            <i class="Clone icon"></i>
            <input placeholder="Bank  Name" name="bankname" type="text" disabled="">
            </div>          
          </div>
        </div>
        <div class="two fields">
          <div class="field">
               <div class="ui left icon input">
            <i class="Write icon"></i>
            <input placeholder="Account Number" name="accntno" type="text" disabled="">
            </div> 
          </div>
         <div class="field">
                <div class="ui left icon input">
            <i class="Write icon"></i>
            <input placeholder="IFSC Code" name="ifsccode" type="text" disabled="">
            </div> 
          </div>
        </div>

<h4 class="ui dividing header">Other Details</h4>

         <div class="two fields">
          <div class="field">
                <div class="ui left icon input">
            <i class="Credit Card Alternative icon"></i>
            <input placeholder="PAN Card Number" name="pancardno" type="text" disabled="">
            </div> 
          </div>
           <div class="field">
                <div class="ui left icon input">
            <i class="Credit Card Alternative icon"></i>
            <input placeholder="ADHAR Card Number (optional)" name="adharcardno" type="text" disabled="">
            </div> 
          </div>
        </div>
   
       
    
        <div class="ui error message"></div>
      </form>
      </div>
</div>
      </div>
      <div class="ui tab  " data-tab="fifth">
      <div class="ui container ">
<div class="column form-step6">
<form class="ui form form6 segment " method="post">
      <div class="ui heading">
  <a class="ui ribbon label">Social Contacts</a>
</div>
        <div class="two fields">
          <div class="field">
            <label>Linkedin Profile</label>
             <div class="ui left icon input">
            <i class="Linkedin Square icon"></i>
            <input placeholder="Linkedin Profile link" name="first name" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <label>Twitter Profile</label>
             <div class="ui left icon input">
            <i class="Twitter Square icon"></i>
           <input placeholder="Twitter Profile link" name="last name" type="text" disabled="">
           </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>Mobile Number</label>
             <div class="ui left icon input">
            <i class="Mobile icon"></i>
            <input placeholder="Mobile Number" name="mobileno" type="text" disabled="">
            </div>
          </div>
          <div class="field">
            <label>Skype Profile</label>
            <div class="ui left icon input">
            <i class="Skype icon"></i>
           <input placeholder="Skype Profile link" name="last name" type="text" disabled="">
           </div>
          </div>
        </div>
        
     
        <div class="ui error message"></div>
      </form>
      </div>
</div></div>
          </div>