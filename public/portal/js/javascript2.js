
$(document).ready(function(){

  $("signup").validate({
    rules:{
      name:{
        required:true,
        name:true
      },
      newemail:{
        required:true,
        newemail:true
      },
      contactno:{
        required:true,
        contactno:true
      },
      country:{
        required:true,
        country:true
      },
      password1:{
        required:true,
        minlength:8
      },
      confirmpassword:{
        required:true,
        equalTo: "password1"
      }

    }
  });
});