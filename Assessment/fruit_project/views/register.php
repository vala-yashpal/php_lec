<script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <style>
         .error {
            color: red;
            font-size: 90%;
            padding-top: 10px;
            padding-left: 15px;
        }
    </style>

<div class="row justify-content-center">		
    <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
      <div class="cart-total mb-3">
        <!-- <h3 class="row justify-content-center">REGISTRE</h3> -->
        <h1 class="display-6 text-center mb-4" style="background-color:#82ae46;">REGISTRE</h1>

          <form name="rform" id="rform" onsubmit="event.preventDefault();  validateForm()" method="post">
              <div class="form-group">
                <label for="name">your name</label>
                <input type="text" class="form-control text-left px-3" id="user_name" name="user_name" placeholder="enter your name">
                <div class="error" id="nameErr"></div>
              </div>
              <div class="form-group">
                <label for="email">your email</label>
                <input type="email" class="form-control text-left px-3" id="email" name="email" placeholder="enter your email">
                <div class="error" id="emailErr"></div>
              </div>
              <div class="form-group">
                <label for="number">your contact</label>
                <input type="number" class="form-control text-left px-3" id="contact_number" name="contact_number" placeholder="enter your contact_number">
                <div class="error" id="mobileErr"></div>
              </div>
              <div class="form-group">
                <label for="password">password</label> 
                <input type="password" class="form-control text-left px-3" id="password" name="password" placeholder="enter your password"></i>
                <div class="error" id="passwordErr"></div>
              </div>               
              <div class="form-group">
                <label for="password">confirm_password</label>
                <input type="password" class="form-control text-left px-3" id="Confirm_Password" name="Confirm_Password" placeholder="enter your confirm_password">
                <div class="error" id="Confirm_PasswordErr"></div>
              </div>
              <div class="col-sm-12 form-group" >
                <div class="form-floating" >
                    <a href = "login" ><u>Allready Register? Click here</u></a>
                </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-2" type="sumbit" value="register"  name="register">Submit</button>
                </div>
          </form>

        <script>     
                // function showpassword() {
                //       var x = document.getElementById("Password");
                //       if (x.type === "password") {
                //           x.type = "text";
                //       } else {
                //           x.type = "password";
                //       }
                //     }
                    
                // Defining a function to display error message
                function printError(elemId, hintMsg) {
                    document.getElementById(elemId).innerHTML = hintMsg;
                }

                // Defining a function to validate form 

                function validateForm(){
                  var user_name = document.rform.user_name.value;
                  var email = document.rform.email.value;
                  var contact_number = document.rform.contact_number.value;
                  var Password = document.rform.password.value;
                  alert(Password); 
                    var Confirm_Password = document.rform.Confirm_Password.value;

                    
                    
                    // Defining error variables with a default value
                    var nameErr = emailErr = mobileErr  = passwordErr = Confirm_PasswordErr  = true;
                    
                    // Validate name
                    if(user_name == "") {
                      
                        printError("nameErr", "Please enter your name");
                    } else{
                        var regex = /^[a-zA-Z\s]+$/;    
                        if(regex.test(user_name) === false) {
                            printError("nameErr", "Please enter a valid name");
                        } else {
                            printError("nameErr", "");
                            nameErr = false;
                        }
                    }
                    
                    // Validate email address
                    if(email == "") {
                        printError("emailErr", "Please enter your email address");
                    } else {
                        // Regular expression for basic email validation
                        var regex = /^\S+@\S+\.\S+$/;
                        if(regex.test(email) === false) {
                            printError("emailErr", "Please enter a valid email address");
                        } else{
                            printError("emailErr", "");
                            emailErr = false;
                        }
                    }
                    
                    // Validate mobile number
                    if(contact_number == "") {
                        printError("mobileErr", "Please enter your mobile number");
                    } else {
                        var regex = /^[1-9]\d{9}$/;
                        if(regex.test(contact_number) === false) {
                            printError("mobileErr", "Please enter a valid 10 digit mobile number");
                        } else{
                            printError("mobileErr", "");
                            mobileErr = false;
                        }
                    }
            
                    // Validate Password
                    if(Password == "") {
                        printError("passwordErr", "Please enter your password");
                    } else {
                        var minNumberofChars = 6;
                        var maxNumberofChars = 10;
                        
                        if(Password.length < minNumberofChars || Password.length > maxNumberofChars){
                            printError("passwordErr", "password length minimum 6 and max 10");

                        }else{
                            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                            // var rgepass = strongRegex.test(Password);
                            if(strongRegex.test(Password) == false){
                                printError("passwordErr", "password should contain atleast one number and one special character");
                            }else {
                                printError("passwordErr", "");
                                passwordErr = false;
                           }
                        }
                    }

                    // Validate Confirm_Password
                    if (Confirm_Password == "") {
                        printError("Confirm_PasswordErr", "Please enter your confirmPassword");
                    } else{

                        if(Password == Confirm_Password){
                            printError("Confirm_PasswordErr", "");
                            Confirm_PasswordErr = false;
                        } else{
                            printError("Confirm_PasswordErr", "Please make sure your passwords match.");
                        }
                    }
                    
                    // Prevent the form from being submitted if there are any errors

                    if((nameErr || emailErr || mobileErr || passwordErr || Confirm_PasswordErr ) == true) {
                        return false;
                    } else {
                        register(); 
                    }
                };

                function register(){

                    var result = {};

                    $.each($('#rform').serializeArray(), function () {
                        result[this.name] = this.value;
                    });

                    // console.log(result);
                    fetch("http://localhost/php_lec_tops/php/lec_27/22_API/register",{
                    method: 'POST',
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(result)
                    }).then((response)=>response.json()).then((result)=> {

                        if(result['Code'] == 1){
                            alert("registration success")
                            window.location.href="login"
                        }else{
                            alert("registration Error")
                            window.location.href="login"
                        }
                    })
                };
            </script>
      </div>
    </div>
</div>