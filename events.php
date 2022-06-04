<?php
include('layouts/header.php');
?>

<!-- UPCOMING EVENTS -->
<section class="container mt-6">
  <h1 class="fw-bolder fs-3 text-center mt-5 pt-5">Our Upcoming Events</h1>

  <div class="events mt-4">
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

        <div class="row mb-4">
          <div class="col-sm-12">
            <a href="event-detail.php?event_id=<?php echo $event_id; ?>" class="text-decoration-none text-dark">
              <div class="card mb-3 event_wide_card">
                <img src="assets/img/events/event<?php echo $event_id; ?>.jpg" class="card-img-top img-fluid event_wide_img" alt="" />
                <div class="card-body">
                  <h5 class="card-title"><?php echo $event_name ?></h5>

                  <h6 class="card-subtitle smaller-font"><?php echo $event_type ?></h6>

                  <p class="card-text mt-3 event_page_desc">
                    <?php echo $event_description ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</section>

<!-- FOOTER -->
<?php include('layouts/footer.php') ?>