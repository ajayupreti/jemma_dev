$(document).ready(function() {

$('.form1').form({
     inline : true,
    on     : 'blur',
    transition: 'fade down', 
    onSuccess: validationpassed, 
          fields: {
            firstname: {
              identifier  : 'firstname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your first name'
                },
                {
                  type   : 'length[3]',
                  prompt : 'Please enter a valid first name'
                }
              ]
            },
             role: {
              identifier  : 'role',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your role'
                }
               
              ]
            },
            personalemailid: {
              identifier  : 'personalemailid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Password length should be 6'
                }
              ]
            },
            confirmpassword: {
              identifier  : 'confirmpassword',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Password length should be 6'
                },
                 {
            type   : 'match[password]',
            prompt : 'Please enter same password'
          }

              ]
            },
            doj: {
              identifier  : 'doj',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter date'
                }
              ]
            },
            dob: {
              identifier  : 'dob',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                }
              ]
            },
             emailid: {
              identifier  : 'emailid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                },
                {
            type   : 'contains[@crownstack.com]',
            prompt : 'Please enter a valid e-mail'
          }
              ]
            },
            lastname: {
              identifier  : 'lastname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your lastname'
                },
                {
                  type   : 'length[3]',
                  prompt : 'Please enter a valid last name'
                }
              ]
            }
          }
});

// (function ($) {
//     $.fn.serializeFormJSON = function () {

//    var o = {};
//     var a = this.serializeArray();
//     $.each(a, function() {
//         if (o[this.name] !== undefined) {
//             if (!o[this.name].push) {
//                 o[this.name] = [o[this.name]];
//             }
//             o[this.name].push(this.value || '');
//         } else {
//             o[this.name] = this.value || '';
//         }
//     });
//     return o;
//     };
// })(jQuery);


function validationpassed(e) {

    var first_name= $('.firstname').val();
    var last_name= $('.lastname').val();
    var email_id= $('.email').val();
    var p_email_id= $('.p-email').val();
    var password= $('.password').val();
    var doj_val= $('.doj').val();
    var dob_val= $('.dob').val();
    var role_val= $('.role').val();
    var objectpd = {
      firstname :first_name ,
      lastname : last_name ,
      emailid : email_id ,
      personalemailid : p_email_id ,
      password : password ,
      doj : doj_val ,
      dob : dob_val ,
      role : role_val
    }

 var posting = $.post(mainurl+'register/1', objectpd);
  console.log(objectpd);
  posting.done(function(data){
            if(data.status=="sucess"){
                                $('.form-step1').hide();
                                $('.form-step2').show();
                                $('.tab1').removeClass('active');
                                $('.tab2').addClass('active');
                                return false;
            }
            else{
              alert("error");
            }
  });
    posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
  
     e.preventDefault();
}


$('.form2').form({
    inline : true,
    on     : 'blur',
    transition: 'fade down', 
    onSuccess: validationpassed2, 
          fields: {
            degree: {
              identifier  : 'degree',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter Degree'
                },
                {
                  type   : 'length[2]',
                  prompt : 'Please enter a valid degree'
                }
              ]
            },
            college: {
              identifier  : 'college',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your college name'
                },
                {
                  type   : 'length[2]',
                  prompt : 'Please enter a valid college name'
                }
              ]
            },
          }
          
        });
function validationpassed2(e) { 

    var degree_val= $('.degree').val();
    var college_val= $('.college').val();

    var objected = {
      degree : degree_val ,
      college : college_val 
    }

   var posting = $.post(mainurl+'register/2', objected);
  console.log(objected);
  posting.done(function(data){
            if(data.status=="sucess"){
                      $('.form-step2').hide();
                      $('.form-step3').show();
                      $('.tab2').removeClass('active');
                      $('.tab3').addClass('active');
                      return false;
            }
            else{
              alert("error");
            }
  });
      posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
  
       e.preventDefault();


}

$('.form3').form({
    inline : true,
    on     : 'blur',
    transition: 'fade down', 
    onSuccess: validationpassed3, 
          fields: {
            Permanentaddr: {
              identifier  : 'Permanentaddr',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your address'
                },
                {
                  type   : 'length[3]',
                  prompt : 'Please enter a valid  address'
                }
              ]
            },
            city: {
              identifier  : 'city',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
             state: {
              identifier  : 'state',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
             pincode: {
              identifier  : 'pincode',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
            currentaddr: {
              identifier  : 'currentaddr',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your address'
                },
                {
                  type   : 'length[3]',
                  prompt : 'Please enter a valid  address'
                }
              ]
            },
            currentcity: {
              identifier  : 'currentcity',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
             currentstate: {
              identifier  : 'currentstate',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
             currentpincode: {
              identifier  : 'currentpincode',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter city name'
                }
               
              ]
            },
             ecname: {
              identifier  : 'ecname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter name'
                }
               
              ]
            },
             ecmember: {
              identifier  : 'ecmember',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter member'
                }
               
              ]
            },
             ecrelation: {
              identifier  : 'ecrelation',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter relation'
                }
               
              ]
            }
          }
          
        });

function validationpassed3() {
    var paddrs_val= $('.permanentaddr').val();
    var pcity_val= $('.city').val();
    var pstate_val= $('.state').val();
    var ppincode_val= $('.pincode').val();
    var caddrs_val= $('.currentaddr').val();
    var ccity_val= $('.currentcity').val();
    var cstate_val= $('.currentstate').val();
    var cpincode_val= $('.currentpincode').val();
    var ecname_val= $('.ecname').val();
    var ecnumber_val= $('.ecnumber').val();
    var ecrelation_val= $('.ecrelation').val();

    var objectad = {
        Permanentaddr : paddrs_val ,
        city : pcity_val ,
        state : pstate_val ,
        pincode : ppincode_val ,
        currentaddr : caddrs_val ,
        currentcity : ccity_val ,
        currentstate : cstate_val ,
        currentpincode : cpincode_val ,
        ecname : ecname_val ,
        ecnumber : ecnumber_val ,
        ecrelation : ecrelation_val 

    }
   var posting = $.post(mainurl+'register/3', objectad);
  console.log(objectad);
  posting.done(function(data){
            if(data.status=="sucess"){
                    $('.form-step3').hide();
                    $('.form-step4').show();
                    $('.tab3').removeClass('active');
                    $('.tab4').addClass('active');
                     return false;
            }
            else{
              alert("error");
            }
  });

      posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
  
   e.preventDefault();



}


$('.form4').form({
    inline : true,
    on     : 'blur',
    transition: 'fade down', 
    onSuccess: validationpassed4, 
          fields: {
            accntholrname: {
              identifier  : 'accntholrname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your account holder name'
                }
              ]
            },
            bankname: {
              identifier  : 'bankname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your bank name'
                }
              ]
            },
            accntno: {
              identifier  : 'accntno',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your account number'
                }
              ]
            },

             ifsccode: {
              identifier  : 'ifsccode',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your IFSC code'
                }
              ]
            },
             pancardno: {
              identifier  : 'pancardno',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your IFSC code'
                }
              ]
            }
}
          
        });

        function validationpassed4() {

    var accntholrname_val = $('.accntholrname').val();
    var bankname_val= $('.bankname').val();
    var accntno_val= $('.accntno').val();
    var ifsccode_val= $('.ifsccode').val();
    var pancardno_val= $('.pancardno').val();

    var objectbd = {
        accntholrname : accntholrname_va ,
        bankname : bankname_val ,
        accntno : accntno_val ,
        ifsccode : ifsccode_val ,
        pancardno : pancardno_val 

    }
   var posting = $.post(mainurl+'register/4', objectbd);
  console.log(objectbd);
  posting.done(function(data){
            if(data.status=="sucess"){
                  $('.form-step4').hide();
                  $('.form-step6').show();
                  $('.tab4').removeClass('active');
                  $('.tab6').addClass('active');
                  return false;
            }
            else{
              alert("error");
            }
  });

      posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
  
             e.preventDefault();


}
  

             $('.form6').form({
              inline : true,
              on     : 'blur',
              transition: 'fade down', 
              onSuccess: validationpassed6, 
              fields: {
              mobileno: {
              identifier  : 'mobileno',
              rules: [
              {
              type   : 'empty',
              prompt : 'Please enter your mobile no'
              }
              ]
              }
              }

              });

          function validationpassed6() {

    var mobileno_val = $('.mobileno').val();

    var objectsd = {
        mobileno : mobileno 

    }

   var posting = $.post(mainurl+'register/6', objectsd);
  console.log(objectsd);
  posting.done(function(data){
            if(data.status=="sucess"){
                        $('.form-step6').hide();
                        $('.ui.ordered.steps').hide();
                        $('.success-msg').show();
                        $('.tab6').removeClass('active');
                        return false;
            }
            else{
              alert("error");
            }
  });

        posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
               e.preventDefault();


          }

$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  });

        $( function() {
    $( "#datepicker" ).datepicker();
  } );
    $( function() {
    $( "#datepicker2" ).datepicker();
  } );
       $('.ui.dropdown').dropdown();
         $('.ui.checkbox').checkbox('onchange', function() {});

    // var max_fields      = 10; 
    // var wrapper         = $(".add-degree-box"); 
    // var add_button      = $(".add-degree"); 
    // var wrapper2         = $(".add-employer-box"); 
    // var add_button2      = $(".add-employer"); 
    
    // var x = 1; 

    // $(add_button).click(function(e){ 
    //     e.preventDefault();
    //     if(x < max_fields){ 
    //         x++;
    //         $(wrapper).append('<div class="two fields repeat-degree"><div class="field"><label>Degree</label><div class="ui left icon input"><i class="Student icon"></i><input placeholder="Degree" name="degree" type="text"></div></div><div class="field"><label>College Name</label><div class="ui left icon input"><i class="Bookmark icon"></i><input placeholder="College Name" name="college" type="text"></div></div></div>'); 
    //     }
    // });


    //  $(add_button2).click(function(e){ 
    //     e.preventDefault();
    //     if(x < max_fields){ 
    //         x++;
    //         $(wrapper2).append('<div class="two fields repeat-employer"><div class="field"><div class="ui left icon input"><i class="Suitcase icon"></i><input placeholder="Previous Employer Name" name="username" type="text"></div></div><div class="field"><div class="ui left icon input"><i class="Unlinkify icon"></i><input placeholder="Previous Employer Website/Linkedin" name="username" type="text"></div></div><div class="field"><div class="ui left icon input"><i class="Meh icon"></i><input placeholder="Role" name="username" type="text"></div></div></div>'); 
    //     }
    // });
 
    });
