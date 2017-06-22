$(document).ready(function() {
    $('.ui.form').form({
    inline : true,
    on     : 'blur',
    onSuccess: jsonlogin, 
          fields: {
            email: {
              identifier  : 'email',
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
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        });

          $('.forgotform').form({
    inline : true,
    on     : 'blur',
    onSuccess: jsonforgot, 
          fields: {
            email: {
              identifier  : 'email',
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

function jsonlogin(e)
{   

var email_val=$('.email-id').val();
var password_val=$('.password').val();
var objectl = {
  email : email_val ,
  password : password_val
}
console.log(objectl);
$.ajax({
    url: mainurl+'login',
    type: 'POST',
    data: objectl,
    crossDomain: true,
    crossOrigin: true,
    dataType: 'json',
    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
    headers: {
        "Access-Control-Allow-Origin": "*",
        "Access-Control-Allow-Methods": "POST, GET, OPTIONS, DELETE"
    },
    success: function (data) {
        console.info(data);
        if(data.STATUS=="SUCESS"){
           var noforms = data.cforms;
           console.log(noforms);
                if(noforms==1){
                  $(location).attr('href', 'http://104.198.18.135/jemma/register');
                    
                        $('.form-step1').hide();
                        $('.form-step2').show();
                        $('.tab1').removeClass('active');
                        $('.tab2').addClass('active');
                        return false;
                    

                } 
                else if(noforms==2){
                     $(location).attr('href', 'http://104.198.18.135/jemma/register');
                    
                        $('.form-step2').hide();
                        $('.form-step3').show();
                        $('.tab2').removeClass('active');
                        $('.tab3').addClass('active');
                        return false;
                    }
                  
                
                else if(noforms==3){
                        if (window.location.pathname == "http://104.198.18.135/jemma/register") {
                        $('.form-step1').hide();
                        $('.form-step2').show();
                        $('.tab1').removeClass('active');
                        $('.tab2').addClass('active');
                        return false;
                    } 

                  
                }                
                else if(noforms==4){
                        if (window.location.pathname == "http://104.198.18.135/jemma/register") {
                        $('.form-step1').hide();
                        $('.form-step2').show();
                        $('.tab1').removeClass('active');
                        $('.tab2').addClass('active');
                        return false;
                    } 

                  
                }
                else if(noforms==5){
                    $(location).attr('href', 'http://104.198.18.135/jemma/dashboard');
                }
                else {
                  console.log(data);
                }
            }
            else{
              $(".show_msg").show();
              $(".error_msg").html("user not registered");
            }
    },
    error: function (data, status, error) {
      console.log('error', data, status, error);
    }
});

 // var posting = $.post(mainurl+'login', objectl , function(response) {  //ERROR POINTS THIS LINE
 //    response.setContentType("application/json");
 //    response.setCharacterEncoding("UTF-8");
 //    response.setHeader("Access-Control-Allow-Credentials", "true");
 //    response.setHeader("Access-Control-Allow-Origin", "*");
 //    response.setHeader("Access-Control-Allow-Methods", "POST, GET, OPTIONS, DELETE");
 //    response.setHeader("Access-Control-Max-Age", "3600");
 //    response.setHeader("Access-Control-Allow-Headers", "x-requested-with");

 //    });
 //  console.log(objectl);
 //  posting.done(function(data){
 //            if(data.status=="sucess"){
 //               $(location).attr('href', 'http://localhost/jemaaa/jemma/dashboard.php');
 //            }
 //            else{
 //              $(".show_msg").show();
 //              $(".error_msg").html("user not registered");

 //            }
 //  });

 //    posting.fail( function(xhr, textStatus, errorThrown) {
 //      $(".show_msg").show();
 //      $(".error_msg").html("server not responded");
 //    });
 e.preventDefault();

}



function jsonforgot(e)
{   
var email_val=$('.email-id2').val();
var password_val=$('.password').val();
var objectf = {
  email : email_val 
}
console.log(objectf);
$.ajax({
    url: mainurl+'forgotpassword',
    type: 'POST',
    data: objectf,
    crossDomain: true,
    crossOrigin: true,
    dataType: 'json',
    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
    headers: {
        "Access-Control-Allow-Origin": "*",
        "Access-Control-Allow-Methods": "POST, GET, OPTIONS, DELETE"
    },
    success: function (data) {
        console.info(data);
        if(data.STATUS=="SUCESS"){
                $(".show_msg").show();
                $(".error_msg").html("email has been sent to your email id");
            }
            else{
             $(".show_msg").show();
             $(".error_msg").html("email id not exist");
            }
    },
    error: function (data, status, error) {
       $(".show_msg").show();
       $(".error_msg").html("server not responded");
    }
});
 // var posting = $.post(mainurl+'forgotpassword', objectf);
 //  console.log(objectf);

 //  posting.done(function(data){
 //            if(data.status=="sucess"){
 //                 $(".show_msg").show();
 //              $(".error_msg").html("email has been sent to your email id");
 //            }
 //            else{
 //              $(".show_msg").show();
 //              $(".error_msg").html("email id not exist");

 //            }
 //  });

 //    posting.fail( function(xhr, textStatus, errorThrown) {
 //      $(".show_msg").show();
 //      $(".error_msg").html("server not responded");
 //    });
 e.preventDefault();


}


$('.message .close')
  .on('click', function() {
 $(".show_msg").hide();
    ;
  })
;

$( ".forgot" ).click(function() {
  $( ".login-box" ).slideUp( );
    $( ".forget-password-box" ).slideDown( );
});

$( ".login-tab" ).click(function() {
  $( ".forget-password-box" ).slideUp();
    $( ".login-box" ).slideDown();
});
    });