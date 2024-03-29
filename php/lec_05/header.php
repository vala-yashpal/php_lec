<?php   

session_start()
;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Myshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home
                        <span class="visually-hidden">(current)</span>
                        </a>

                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="signin.php">Login</a>
                            <!-- <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="signout.php">logout</a>
                            <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                        </div>
                    </li>
                </ul>

                <?php
                    if(isset($_SESSION['UserData']['UserName']))
                    {
                ?>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <h4>Hello, <?php echo $_SESSION['UserData']['UserName']; ?> </h4>
                    </li>
                </ul>
                <?php }
                else{ ?>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="dropdown-item" href="signin.php">Login</a>
                        </li>
                    </ul>
               <?php } ?>

                
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="cart.php" style="padding-right:39px; color:red;">Cart</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav>    
</body>
</html>
