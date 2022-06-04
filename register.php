<?php
include('layouts/header2.php');
?>

<!-- REGISTER FORM -->
<section class="container mt-5 pt-5">
    <div class="row d-flex justify-content-center align-items-center h-100 pt-3 mx-5 px-5">
        <div class="col">
            <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="assets/img/events/palace4.jpg" alt="Sample photo" class="img-fluid w-100 login-form-img">
                    </div>

                    <div class="col-sm-6">
                        <div class="card-body p-sm-5 text-black">
                            <h3 class="mb-3 text-uppercase blue-text fw-bold">Global Buddy Member Registration</h3>

                            <form action="register-process.php" method="POST">
                                <!-- Name -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>

                                <!-- Password -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>

                                <!-- Gender -->
                                <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" required>
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male">
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                </div>

                                <!-- Student ID -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="student_id">Student ID</label>
                                    <input type="text" id="student_id" name="student_id" class="form-control" required>
                                </div>

                                <!-- Department/Major -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="major">Major</label>
                                    <input type="text" id="major" name="major" class="form-control" required>
                                </div>

                                <!-- Email -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <!-- Phone Number -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="number">Phone number</label>
                                    <input type="text" id="number" name="number" class="form-control" required>
                                </div>

                                <!-- Kakao Talk ID -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="kakao">Kakao Talk ID</label>
                                    <input type="text" id="kakao" name="kakao" class="form-control" required>
                                </div>

                                <!-- Submit -->
                                <button type="submit" name="submit" class="btn btn-block btn-yellow mb-4 mt-3">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include('layouts/footer.php') ?>