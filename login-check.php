<?php
    // check whether the user is logged in or not

    if(!isset($_SESSION['user_email'])){
        // the user is not logged in, so redirect to login page
        echo '<script>alert("Please login first to access the page!")</script>';
        echo '<script>window.location="login.php"</script>';
    }
