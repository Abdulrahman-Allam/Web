function ValidateInput() {


  let f = [0, 0, 0];

  let firstname=document.getElementById("first").value;
  let v= /^[a-zA-Z]+$/.test(firstname);
  console.log(v);
  if(!v){
      document.getElementById("errorfn").innerHTML="You are only allowed to use letters in your name."
      f[0] = 1;
  }
  setTimeout(function() {
      document.getElementById("errorfn").innerHTML="";
    }, 3000);


    let lastname=document.getElementById("last").value;
    let a= /^[a-zA-Z]+$/.test(lastname);
    console.log("lastname is:"+a);
    if(!a){
        document.getElementById("errorln").innerHTML="You are only allowed to use letters in your name."
        f[0] = 1;
    }
    setTimeout(function() {
        document.getElementById("errorln").innerHTML="";
      }, 3000);

      let email=document.getElementById("email").value;
      let e= /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      
      console.log(e);
      if(!e){
          document.getElementById("errormail").innerHTML="Wrong email format."
          f[0] = 1;
      }
      setTimeout(function() {
          document.getElementById("errormail").innerHTML="";
        }, 3000);


let p = document.getElementById("phone").value;
    if(p.length != 11)
    {
      document.getElementById("errorphone").innerHTML = "Phone number should consist of 11 numbers!!";
      f[0] = 1;
      setTimeout(function() {
        document.getElementById('errorphone').innerHTML = "";
      }, 3000);
    }








  /*/----------------------------------------------------------------------------------------------------------------
  ------------------------------------------------------------------------------
  ----------------------------------------*/

    

    const password = document.getElementById('password').value;
    const password2 = document.getElementById('passwordconfirm').value;


    const uppercaseRegex = /[A-Z]/;
    const lowercaseRegex = /[a-z]/;
    const digitRegex = /\d/;
    const specialRegex = /[\W_]/;

    // Check for at least 8 characters
    if (password.length < 8) {
      document.getElementById('password-error').innerHTML = "Password must be at least 8 characters";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    } // Check for at least 1 uppercase letter
    else if (!uppercaseRegex.test(password)) {
      document.getElementById('password-error').innerHTML = "Password must contain at least 1 uppercase letter";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    } // Check for at least 1 lowercase letter
    else if (!lowercaseRegex.test(password)) {
      document.getElementById('password-error').innerHTML = "Password must contain at least 1 lowercase letter";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    } // Check for at least 1 digit
    else if (!digitRegex.test(password)) {
      document.getElementById('password-error').innerHTML = "Password must contain at least 1 digit";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    } // Check for at least 1 special character
    else if (!specialRegex.test(password)) {
      document.getElementById('password-error').innerHTML = "Password must contain at least 1 special character";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    } // check confirmation
    else if(password != password2)
    {
      document.getElementById('password-error').innerHTML = "passwords do not match";
      setTimeout(function() {
        document.getElementById("password-error").innerHTML="";
      }, 3000);

      f[1] = 1;
    }
    

  



    //phone valid
    const age = document.getElementById("age").value;
    

    if(age < 16)
    {
      document.getElementById("age-error").innerHTML = "your age must be 16 or above";
      setTimeout(function() {
        document.getElementById("age-error").innerHTML="";
      }, 3000);

      f[2] = 1;
    }
    else if(age > 100)
    {
      document.getElementById("age-error").innerHTML = "your age is not correct";
      setTimeout(function() {
        document.getElementById("age-error").innerHTML="";
      }, 3000);

      f[2] = 1;
    }
    



    // validate


    
    if(f[1] == 0 && f[2] == 0)
    {
      document.getElementById('password-error').innerHTML = "";
      document.getElementById('age-error').innerHTML = "";
    }
    else if(f[1] == 0 && f[2] != 0)
    {
      document.getElementById('password-error').innerHTML = "";
    }
    else if (f[1] != 0 && f[2] == 0)
    {
      document.getElementById('age-error').innerHTML = "";
    }

    if(f[0] != 0 || f[1] != 0 || f[2]!= 0)
    {
      return false;
    }
    
  }

