function checkcookie()
{
var a = $.cookie("JEMMASESSIONID");
 if (a != null) 
 {
 var posting = $.post("http://104.198.18.135:8888/register", $(this).serializeFormJSON());
  console.log($(this).serializeFormJSON());
  posting.done(function(data){
            if(data.cforms==1){
                                $('.form-step1').hide();
                                $('.form-step2').show();
                                $('.tab1').removeClass('active');
                                $('.tab2').addClass('active');
                                return false;
            }
            else if(data.cforms==2){
                                $('.form-step2').hide();
                                $('.form-step3').show();
                                $('.tab2').removeClass('active');
                                $('.tab3').addClass('active');
                                return false;
            }
            else if(data.cforms==3){
                                $('.form-step3').hide();
                                $('.form-step4').show();
                                $('.tab2').removeClass('active');
                                $('.tab3').addClass('active');
                                return false;
            }
            else if(data.cforms==4){
                                $('.form-step4').hide();
                                $('.form-step5').show();
                                $('.tab2').removeClass('active');
                                $('.tab3').addClass('active');
                                return false;
            }
            else if(data.cforms=="5"){
              $(location).attr('href', 'http://104.198.18.135:8888/dashboard');
            }

            else{
                $(location).attr('href', 'http://104.198.18.135:8888/register');
            }
  });

    posting.fail( function(xhr, textStatus, errorThrown) {
 console.log("fail");
    });


}

}

// function checkcookiedash(){
// var a = $.cookie("JEMMASESSIONID");

//  if (a == null) 
//  {
//  $(location).attr('href', 'http://104.198.18.135:8888/login');
//  }
//  else if(a != null){
//     $(location).attr('href', 'http://104.198.18.135:8888/dashboard');
//  }
// }

// function checkcookieregis(){
// var a = $.cookie("JEMMASESSIONID");

//  if (a == null) 
//  {
//  $(location).attr('href', 'http://104.198.18.135:8888/login');
//  }
//  else if(a != null){
//     $(location).attr('href', 'http://104.198.18.135:8888/register');
//  }
// }