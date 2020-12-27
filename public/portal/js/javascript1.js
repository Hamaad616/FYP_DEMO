$(document).ready(function(){  

  $("#signin").validate({
    rules:{
      email:{
       required:true,
        email:true
      },
      password:{
       required:true,
       minlength:8
      },
    }
  });
	
});


 
