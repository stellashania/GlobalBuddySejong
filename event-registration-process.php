<?php
include('config/constants.php');

if (isset($_POST['submit'])) {
    if (isset($_POST['agreement'])) {
        $user_id = $_POST['user_id'];
        $event_id = $_POST['event_id'];

        $sql = "INSERT INTO event_registration SET
        event_id = '$event_id',
        user_id = '$user_id'
        ";

        // 3. execute query and save in database
        $res = mysqli_query($conn, $sql) or die("Registration failed!");

        // 4. check whether the (query is executed) data is inserted or not and display appropriate message
        if ($res == TRUE) {
            // data is inserted successfully
            echo '<script>alert("Event registration is successful!")</script>';
            echo '<script>window.location="events.php"</script>';
        } else {
            // failed to insert data
            echo '<script>alert("Event registration failed, please try again!")</script>';
            echo '<script>window.location="events.php"</script>';
        }
    } else {
        // $currString = "<script>window.location=\"event-detail.php?event_id={$event_id}\"</script>";
        echo '<script>alert("Please read and check the agreement checkbox!")</script>';
        echo '<script>window.location="events.php"</script>';
    }
}
