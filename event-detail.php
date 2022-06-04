<?php
include('layouts/header.php');
?>

<?php
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];

    $sql = "SELECT * FROM events WHERE id=$event_id";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $event_name = $row['name'];
    $event_type = $row['type'];
    $event_date = $row['date'];
    $event_description = $row['description'];

    $user_email = $_SESSION['user_email'];
    $sql2 = "SELECT * FROM user WHERE email='$user_email'";
    $res2 = mysqli_query($conn, $sql2);

    if ($res2 == true) {
        $count2 = mysqli_num_rows($res2);

        if ($count2 == 1) {
            $row2 = mysqli_fetch_assoc($res2);

            $user_id = $row2['id'];
            $user_fullname = $row2['fullname'];
            $user_studentid = $row2['student_id'];
            $user_major = $row2['major'];
            $user_phonenum = $row2['phone_number'];
            $user_kakao = $row2['kakao_id'];
        }
    }
} else {
    echo '<script>alert("Failed to retrieve event details, please try again!")</script>';
    echo '<script>window.location="events.php"</script>';
}
?>

<!-- UPCOMING EVENTS -->
<section class="container mt-5 pt-5 px-5">
    <div class="event-detail px-5">
        <div class="card event-detail-card mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/img/events/event<?php echo $event_id ?>.jpg" alt="" class="event-detail-img">

                    <h5 class="card-title mt-4"><?php echo $event_name ?></h5>

                    <h6 class="card-subtitle smaller-font mt-2"><?php echo $event_type ?></h6>

                    <div class="event-detail-info mt-2">
                        <h6 class="card-subtitle smaller-font">
                            <i class="uil uil-calender"></i> <?php echo $event_date ?>
                        </h6>
                    </div>

                    <p class="card-text medium-font mt-4">
                        <?php echo $event_description ?>
                    </p>

                    <p class="card-text medium-font mt-3">
                        Registration is based on a first come, first served basis and will be closed when the number of participants has fulfilled the quota.
                        Participants will be split into several groups, with each group consisting of 2 Korean buddies and 3 foreign buddies.
                    </p>
                </div>

                <div class="col-sm-6">
                    <h2 class="fs-3 mb-4">Register</h2>
                    <form action="event-registration-process.php" method="POST">
                        <!-- Hidden input: User ID and Event ID -->
                        <input type="hidden" id="user_id" class="user_id" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="hidden" id="event_id" class="event_id" name="event_id" value="<?php echo $event_id; ?>">

                        <!-- Name -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $user_fullname; ?>" disabled>
                        </div>

                        <!-- Student ID -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="student_id">Student ID</label>
                            <input type="text" id="student_id" name="student_id" class="form-control" value="<?php echo $user_studentid; ?>" disabled>
                        </div>

                        <!-- Department/Major -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="major">Major</label>
                            <input type="text" id="major" name="major" class="form-control" value="<?php echo $user_major; ?>" disabled>
                        </div>

                        <!-- Email -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $user_email; ?>" disabled>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="number">Phone number</label>
                            <input type="text" id="number" name="number" class="form-control" value="<?php echo $user_phonenum; ?>" disabled>
                        </div>

                        <!-- Kakao Talk ID -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="kakao">Kakao Talk ID</label>
                            <input type="text" id="kakao" name="kakao" class="form-control" value="<?php echo $user_kakao; ?>" disabled>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check mb-4">
                            <input class="form-check-input me-2" type="checkbox" name="agreement" value="1" id="agreement">
                            <label class="form-check-label" for="agreement">
                                I agree to participate on the specified date
                            </label>
                        </div>

                        <div class="mb-4 popup alert alert-warning">
                            By clicking this, you agree to participate in the event and receive a disadvantage at the next event if you did not come on the day of the event

                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" class="btn btn-block btn-yellow mb-4 mt-3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include('layouts/footer.php') ?>