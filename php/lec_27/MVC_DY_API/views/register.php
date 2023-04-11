<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drivin - Driving School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $this->base_url; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $this->base_url; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $this->base_url;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $this->base_url;?>css/style.css" rel="stylesheet">
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
        }
    </style>
</head>

<body >
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="register" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- <a href="home" class="nav-item nav-link active">Home</a> -->
                <!-- <a href="about" class="nav-item nav-link">About</a> -->
                <!-- <a href="courses" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature" class="dropdown-item">Features</a>
                        <a href="appointment" class="dropdown-item">Appointment</a>
                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimonial" class="dropdown-item">Testimonial</a>
                        <a href="404" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contact</a>-->
            </div>
            <a href="register" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">REGISTER<i class="fa fa-solid fa-lock ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- .class="bg-primary text-center p-5" -->
    <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/d3.jpg" alt="" style="object-fit: cover;">
                    <!-- <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="assets/img/about-2.jpg" alt="" style="width: 200px; height: 200px;"> -->
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                
                <h1 class="display-6 text-center mb-4">REGISTRE</h1>

                <form name="rform" id="rform" onsubmit="event.preventDefault();  validateForm()" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="gname" name ="user_name" placeholder="Gurdian Name"   >
                                <label for="gname">Your Name</label>
                            </div>
                            <div class="error" id="nameErr"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light" id="email" name ="email" placeholder="Gurdian Email" >
                                <label for="gmail">Your Email</label>
                            </div>
                            <div class="error" id="emailErr" ></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="number" class="form-control border-0 bg-light" id="contact_number" name ="contact_number" placeholder="Gurdian contact_number"  >
                                <label for="contact_number">Your Contact Number</label>
                            </div>
                            <div class="error" id="mobileErr" ></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="date" class="form-control border-0 bg-light" id="dob" name ="date_of_birth" placeholder="Gurdian dob" >
                                <label for="dob">Date Of Birth</label>
                            </div>
                            <div class="error" id="dobErr"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0 bg-light" id="Password" name ="Password" placeholder="Gurdian Password"  >
                                <label for="Password">Password</label>
                            </div>
                            <div style="padding-top: 10px"><input type="checkbox" onclick="showpassword()">Show Password</div>
                            <div class="error" id="passwordErr" ></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0 bg-light" id="Conf_Password" name ="Confirm_Password" placeholder="Gurdian confirm_Password" >
                                <label for="confirm_Password">Confirm_Password</label>
                            </div>
                            <div class="error" id="Confirm_PasswordErr"></div>
                        </div>
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="register"  name="register">Submit</button>
                        </div>
                        <div class="col-sm-12" >
                            <div class="form-floating" >
                                <a href = "login" ><u>Allready Register? Click here</u></a>
                            </div>

                        </div>
                    </div>
                </form>
                <script>
                    
                function showpassword() {
                    var x = document.getElementById("Password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                    }
                    
                // Defining a function to display error message
                function printError(elemId, hintMsg) {
                    document.getElementById(elemId).innerHTML = hintMsg;
                }

                // Defining a function to validate form 
                function validateForm() {
                    // Retrieving the values of form elements 
                    var user_name = document.rform.user_name.value;
                    var email = document.rform.email.value;
                    var contact_number = document.rform.contact_number.value;
                    var date_of_birth = document.rform.date_of_birth.value;
                    var Password = document.rform.Password.value;
                    var Confirm_Password = document.rform.Confirm_Password.value;

                    
                    // Defining error variables with a default value
                    var nameErr = emailErr = mobileErr = dobErr = passwordErr = Confirm_PasswordErr  = true;
                    
                    // Validate name
                    if(user_name == "") {
                        printError("nameErr", "Please enter your name");
                    } else {
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
                    
                    // Validate date_of_birth
                    if(date_of_birth == "") {
                        printError("dobErr", "Please select your date of birth");
                    } else {
                        printError("dobErr", "");
                        dobErr = false;
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

                    if((nameErr || emailErr || mobileErr || dobErr || passwordErr || Confirm_PasswordErr ) == true) {
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
</div>

