<?php
include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejong Global Buddy</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- tab icon -->
    <link rel="icon" href="assets/img/global_buddy_logo.png">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="text-shadow: 5px 5px 10px #49444453;">
                    <img src="assets/img/global_buddy_logo2.png" alt="" style="width: 35px;">
                    Sejong Global Buddy
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html" style="text-shadow: 5px 5px 10px #49444453;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html" style="text-shadow: 5px 5px 10px #49444453;">Events</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- LOGIN FORM -->
    <section class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center align-items-center h-100 pt-3 mx-5 px-5">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-sm-6 d-none d-sm-block">
                            <img src="assets/img/events/sports2.jpg" alt="Sample photo" class="img-fluid w-100 login-form-img">
                        </div>

                        <div class="col-sm-6">
                            <div class="card-body p-sm-5 text-black">
                                <h3 class="mb-3 text-uppercase blue-text fw-bold">Login</h3>

                                <form action="login-process.php" method="POST">
                                    <!-- Email -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>

                                    <!-- Submit -->
                                    <button type="submit" name="submit" class="btn btn-block btn-yellow mb-4 mt-3">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center text-lg-start mt-5 footer1">
        <div class="container d-flex justify-content-center py-5">
            <a href="https://www.facebook.com/sejongglobalbuddy/">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 rounded-circle border-0" style="background-color: #3b5998;">
                    <i class="fab fa-facebook-f"></i>
                </button>
            </a>
            <a href="https://www.youtube.com/channel/UCPuCHxTjy668y5NHXVR2p4Q">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 rounded-circle border-0" style="background-color: #dd4b39;">
                    <i class="fab fa-youtube"></i>
                </button>
            </a>
            <a href="https://www.instagram.com/sejongglobalbuddy/?hl=en">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 rounded-circle border-0" style="background-color: #ac2bac;">
                    <i class="fab fa-instagram"></i>
                </button>
            </a>
        </div>

        <div class="text-center text-white p-3 footer2">
            Sejong Global Buddy
        </div>
    </footer>

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>