function profile(){
	$('.profile_box').show();
	$('.employees_box').hide();
}
function employees(){
	$('.profile_box').hide();
	$('.employees_box').show();

}
function getdata()
{

 $.ajax({
    url: mainurl+'dashboard',
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
   if(data.STATUS=="SUCESS"){
              
      $( "input[name*='firstname']" ).html(data.first_name);
  	}
    },
    error: function (data, status, error) {
      console.log('error', data, status, error);
    }
  });

}