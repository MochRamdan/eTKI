function auth_login() {
	var user_name = $("#name").val();  
  var password = $("#password").val(); 
  // Returns error message when submitted without req fields.

  if(user_name==''||password=='')  
  {  
  	$('#error').html('username or password null').fadeIn().delay(4000).fadeOut('slow');
  }  
  else  
  {  
    var user = $('#contactForm').serialize(); 
  	// AJAX Code To Submit Form.  
  	$.ajax({  
  		type: "POST",
      // url: "http://localhost/eTKI/index.php/Auth/check_login",
  		url: BASE_URL+"index.php/Auth/check_login",  
  		data: user,
      dataType: "json",
  		cache: false,  
  		success: function(result){
        alert(result);
    		// if(result!=0){  
      // 		// On success redirect.  
    		// 	window.location.replace(result);  
    		// }else{
      // 		$('#error').html('Failed Login, username or password wrong').fadeIn().delay(4000).fadeOut('slow');
      //   }
			},
      error: function(data){
        alert('Could not add data');
      }
  	});  
  }  
  return false;
}

//Message
$('#btnMessage').click(function(){
  //var name = $("#name").val();
  var email = $("#email").val();
  // Returns error message when submitted without req fields.
  // if (name=='') {
  //   $('#nameError').show();
  // }

  if(email=='') {
    $('#emailError').show();
  }  
  else  
  {
    var data = $('#contactForm').serialize();
    //var url = "<?php echo base_url('index.php/Auth/check_login');?>"; 
    // AJAX Code To Submit Form.  
    $.ajax({  
      type: "POST",
      url: BASE_URL+"index.php/Message/sendMessage",
      data: data,
      dataType: 'json',
      cache: false,  
      success: function(result){
        alert('Message has been send');
        // if(result!=0){
        //   // On success redirect.  
        //   window.location.replace(result);
        // }else{
        //   $('#contactForm')[0].reset();
        //   $('#error').html('Failed Login, username or password wrong').fadeIn().delay(4000).fadeOut('slow');
        // }
      },
      error: function(data){
        alert('Could not add data');
      }
    });  
  }
})