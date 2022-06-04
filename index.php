<?php
include('layouts/header.php');
?>

<!-- BANNER -->
<section class="container position-relative mt-5">
  <img src="assets/img/sejong_background.jpg" alt="" class="banner mt-5 mb-4 shadow">

  <div class="banner_text position-absolute">
    <h1 class="fs-1 fw-bolder" style="text-shadow: 5px 5px 10px #49444453;">Welcome to <br>
      <span style="color: #c3122c;">Sejong </span>
      <span style="color: #2f4c61;">Global </span>
      <span style="color: #ffb910;">Buddy!</span>
    </h1>

    <p class="mt-2 fw-bold" style="text-shadow: 5px 5px 10px #49444453;">
      Fostering meaningful friendships to facilitate a smooth transition into Korean culture and college life.
    </p>

    <a href="https://www.youtube.com/channel/UCPuCHxTjy668y5NHXVR2p4Q" class="text-decoration-none text-light">
      <button type="button" class="btn mt-2 btn-m text-light btn-red"><i class="uil uil-youtube"></i> View Our Youtube</button>
    </a>
  </div>
</section>


<!-- WHO WE ARE (about global buddy) -->
<section class="container mt-5 px-5">
  <h1 class="fw-bolder fs-3 text-center">Who We Are</h1>

  <div class="about_content mt-5">
    <!-- first row -->
    <div class="row">
      <div class="col-sm-6 d-flex justify-content-center">
        <img src="assets/img/events/palace.jpg" alt="" class="w-75 about_img" id="about_img1">
      </div>

      <div class="col-sm-6 align-items-center d-flex">
        Sejong Global Buddy is a volunteer group that helps international exchange students in
        Sejong University to transition into Korean culture and college life while meeting with many new friends.
      </div>
    </div>

    <!-- second row -->
    <div class="row mt-5">
      <div class="col-sm-6 align-items-center d-flex">
        We pair international exchange students with domestic Korean students through various fun
        activities that students can enjoy together. We bet spending time with us would be an incredible time!
      </div>

      <div class="col-sm-6 d-flex justify-content-center">
        <img src="assets/img/events/museum.jpg" alt="" class="w-75 about_img" id="about_img2">
      </div>
    </div>
  </div>
</section>


<!-- WHAT STUDENTS SAY (TESTIMONY) -->
<section class="container mt-5 px-5">
  <h1 class="fw-bolder fs-3 mt-5 pt-5 text-center">What Students Say</h1>

  <div class="testi_content mt-5">
    <div class="row">
      <!--testimony 1-->
      <div class="col-sm-3">
        <div class="card testi_card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="assets/img/testimony/testi1.jpg" class="img-fluid testi_card_img" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Stella Shania</h5>
            <h6 class="card-subtitle smaller-font">Indonesia</h6>
            <p class="card-text small-font mt-3">
              I had lots of fun during the global buddy events and I made so many new friends!
              This was trully an unforgettable experience!
            </p>
          </div>
        </div>
      </div>

      <!-- testimony 2 -->
      <div class="col-sm-3">
        <div class="card testi_card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="assets/img/testimony/testi2.jpg" class="img-fluid testi_card_img" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Gabriella Ryanie</h5>
            <h6 class="card-subtitle smaller-font">Indonesia</h6>
            <p class="card-text small-font mt-3">
              I'm enjoyed every global buddy events and its fun too meet other people from different countries.
              We visited many places and tried lots of food!
            </p>
          </div>
        </div>
      </div>

      <!-- testimony 3 -->
      <div class="col-sm-3">
        <div class="card testi_card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="assets/img/testimony/testi3.jpg" class="img-fluid testi_card_img" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Leon Fernandy</h5>
            <h6 class="card-subtitle smaller-font">Indonesia</h6>
            <p class="card-text small-font mt-3">
              Through global budddy events, I got to hang out with exchange students from other
              universities and the events are very fun to participate in.
            </p>
          </div>
        </div>
      </div>

      <!-- testimony 4 -->
      <div class="col-sm-3">
        <div class="card testi_card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="assets/img/testimony/testi4.jpg" class="img-fluid testi_card_img" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Catherine</h5>
            <h6 class="card-subtitle smaller-font">Brunei Darussalam</h6>
            <p class="card-text small-font mt-3">
              Thank you Global Buddy for the fun events! I love how global buddy came up with different events regularly
              so there's many options to choose from.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- UPCOMING EVENTS -->
<section class="container mt-5 pt-5 px-5 pb-5">
  <h1 class="fw-bolder fs-3 text-center">Our Upcoming Events</h1>

  <div class="events mt-5">
    <div class="row">

      <?php
      $sql = "SELECT * FROM events";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);

      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
          $event_id = $row['id'];
          $event_name = $row['name'];
          $event_type = $row['type'];
          $event_description = $row['description'];

      ?>

          <div class="col-sm-4">
            <a href="event-detail.php?event_id=<?php echo $event_id; ?>" class="text-decoration-none text-dark">
              <div class="card event_card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="assets/img/events/event<?php echo $event_id; ?>.jpg" class="img-fluid event_card_img" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <div class="card-body">
                  <h5 class="card-title"><?php echo $event_name ?></h5>
                  <h6 class="card-subtitle smaller-font"><?php echo $event_type ?></h6>
                  <p class="card-text small-font mt-3">
                    <?php echo $event_description ?>
                  </p>
                </div>
              </div>
            </a>
          </div>

      <?php
        }
      }
      ?>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php include('layouts/footer.php') ?>