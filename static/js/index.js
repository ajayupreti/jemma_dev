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


 var posting = $.post(mainurl+'login/login_user', objectl , function(response) {  //ERROR POINTS THIS LINE
    response.setContentType("application/json");
    response.setCharacterEncoding("UTF-8");
    response.setHeader("Access-Control-Allow-Credentials", "true");
    response.setHeader("Access-Control-Allow-Origin", "api.crownstack.com");
    response.setHeader("Access-Control-Allow-Methods", "POST, GET, OPTIONS, DELETE");
    response.setHeader("Access-Control-Max-Age", "3600");
    response.setHeader("Access-Control-Allow-Headers", "x-requested-with");

    });
  console.log(objectl);
  posting.done(function(data){
            if(data.status=="sucess"){
               $(location).attr('href', 'http://localhost/jemaaa/jemma/dashboard.php');
            }
            else{
              $(".show_msg").show();
              $(".error_msg").html("user not registered");

            }
  });

    posting.fail( function(xhr, textStatus, errorThrown) {
      $(".show_msg").show();
      $(".error_msg").html("server not responded");
    });
 e.preventDefault();

}



function jsonforgot(e)
{   
var email_val=$('.email-id2').val();
var password_val=$('.password').val();
var objectf = {
  email : email_val 
}

 var posting = $.post(mainurl+'forgotpassword', objectf);
  console.log(objectf);

  posting.done(function(data){
            if(data.status=="sucess"){
                 $(".show_msg").show();
              $(".error_msg").html("email has been sent to your email id");
            }
            else{
              $(".show_msg").show();
              $(".error_msg").html("email id not exist");

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