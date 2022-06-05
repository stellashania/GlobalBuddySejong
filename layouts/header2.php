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
                    Global Buddy
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if (isset($_SESSION['user_email'])) {
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php" style="text-shadow: 5px 5px 10px #49444453;">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="events.php" style="text-shadow: 5px 5px 10px #49444453;">Events</a>
                        </li>
                    <?php
                    }
                    ?>

                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.php" style="text-shadow: 5px 5px 10px #49444453;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php" style="text-shadow: 5px 5px 10px #49444453;">Events</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if (!isset($_SESSION['user_email'])) {
                            ?>
                                <a class="dropdown-item" href="login.php">Login</a>
                                <a class="dropdown-item" href="register.php">Register</a>
                            <?php
                            } else {
                            ?>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            <?php
                            }
                            ?>
                            <!-- <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>