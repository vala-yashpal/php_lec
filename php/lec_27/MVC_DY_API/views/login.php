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
    <!-- <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script> -->
    <style>
         .error {
            color: red;
            font-size: 90%;
            padding-top: 10px;
        }
    </style>
</head>

<body>
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
        <a href="login" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <a href="register" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Create account?<i class="fa fa-solid fa-lock ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- .class="bg-primary text-center p-5" -->
    <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/d5.jpg" alt="" style="object-fit: cover;">
                    <!-- <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="assets/img/d5.jpg" alt="" style="width: 200px; height: 200px;"> -->
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                
                <h1 class="display-6 text-center mb-4">LOG IN</h1>

                <form name="lform" id="lform" onsubmit="event.preventDefault();  loginvalid()" method="post">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" name="user_n_m_e"  id="user_n_m_e" placeholder="Gurdian Name">
                                <label for="gname">UserName/Email/Conact Num</label>
                            </div>
                            <div class="error" id="nameErr"></div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0 bg-light" name="password" id="password" placeholder="Gurdian Name">
                                <label for="gname">Password</label>
                            </div>
                            <div class="error" id="passwordErr"></div>
                        </div>
                        
                        <div class="check">
                            <input type="checkbox" name="" id="rember"  />
                            <label for="rember">Remember me?</label>
                        </div>
                        
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="login"  name="login">Log IN</button>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="form-floating d-flex align-items-end flex-column mt-0" >
                                <a href = "forgotpass" ><u>Forgot Password?</u></a>
                            </div>
                        </div>
                    </div>
                </form>

                <script> 
                    // Defining a function to display error message
                    function printError(elemId, hintMsg) {
                        document.getElementById(elemId).innerHTML = hintMsg;
                    }

                    function loginvalid(){
                        // Retrieving the values of form elements 
                        var user_n_m_e = document.lform.user_n_m_e.value;
                        var Password = document.lform.password.value;
        
                        // Defining error variables with a default value
                        var nameErr = passwordErr  = true;
                        
                        // Validate name
                        if(user_n_m_e == "") {
                            printError("nameErr", "Please enter your name email or contact Number");
                        } else {
                            printError("nameErr", "");
                            nameErr = false;
                        }
                        
        
                        // Validate Password
                        if(Password == "") {
                            printError("passwordErr", "Please enter your password");
                        } else {
                            printError("passwordErr", "");
                            passwordErr = false;
                        }
                            

                        // Prevent the form from being submitted if there are any errors
                        if((nameErr || passwordErr) == true){
                            return false;
                        } else {
                            login(); 
                        }
                    };

                    function login(){
                        var result = {};

                        $.each($('#lform').serializeArray(), function () {
                            result[this.name] = this.value;
                        });

                        // console.log(result);

                        fetch("http://localhost/php_lec_tops/php/lec_27/22_API/login",{
                        method: 'POST',
                        headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(result)
                        }).then((response)=>response.json()).then((result)=> {
                            
                            // console.log(result['Data']);
                            // return false;

                            if(result['Code'] == 1){
                                //sesssion set api
                                fetch("http://localhost/php_lec_tops/php/lec_27/MVC_DY_API/session",{
                                    method: 'POST',
                                    headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(result['Data'])
                                }).then((response)=>response.json()).then((sessionresult)=> {
                                // console.log(sessionresult);
                                // return false;
                                    if(sessionresult == "true"){
                                        if(result['Data'][0] != ""){
                                            if(result['Data'][0]['id'] == 1){
                                                    alert("welcome_"+result['Data'][0]['user_name']);
                                                window.location.href="admindashboard"
                                            }else{
                                                alert("welcome_"+result['Data'][0]['user_name']);
                                                window.location.href="home"   
                                            } 
                                        }
                                    }
                                })
                            }else{
                                alert("Invalid User");
                                window.location.href="login"
                            } 
                        })
                    };
                </script>
            </div>
        </div>
    </div>
</div>
</body>
</html>