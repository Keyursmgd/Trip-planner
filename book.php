<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section class="header">
    <a href="home.php" class="logo">Paryatan.</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book_form.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <div class="heading" style="background:url(images/background_img.jpg) no-repeat">
    <h1>Booking</h1>
  </div>

  <section class="booking">
    <h1 class="heading-title">Booking Status</h1>
    <div class="book-form" style="text-align:center; padding: 30px;">

      <?php
      if (isset($_GET['payment_id'])) {
        $payment_id = $_GET['payment_id'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $package = $_GET['package'];
        $guests = $_GET['guests'];
        $booking_date = $_GET['booking_date'];

        $sql = "INSERT INTO bookings (name, email, phone, package, guests, payment_id, booking_date)
            VALUES ('$name', '$email', '$phone', '$package', '$guests', '$payment_id', '$booking_date')";

        if (mysqli_query($conn, $sql)) {
          echo "<h2 style='color:green;'>✅ Booking Successful!</h2>";
          echo "<p>Thank you <strong>$name</strong> for booking your trip to <strong>$package</strong>.</p>";
          echo "<p><strong>Guests:</strong> $guests</p>";
          echo "<p><strong>Payment ID:</strong> $payment_id</p>";
          echo "<p><strong>Booking Date:</strong> $booking_date</p>";
        } else {
          echo "<h3 style='color:red;'>❌ Error saving your booking.</h3>";
          echo "Details: " . mysqli_error($conn);
        }
      } else {
        echo "<h3 style='color:red;'>❌ Invalid access or payment not completed.</h3>";
        echo "<a href='book_form.php' class='btn' style='margin-top: 20px;'>Go to Booking Page</a>";
      }
      ?>

    </div>
  </section>

  <section class="footer">
    <div class="box-container">
      <div class="footer_box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>packages</a>
        <a href="book_form.php"><i class="fas fa-angle-right"></i>book</a>
      </div>
      <div class="footer_box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
      </div>
      <div class="footer_box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-333</a>
        <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>mumbai, india - 400104</a>
      </div>
      <div class="footer_box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
    </div>
    <div class="credit">created by <span>wad grp</span> | all rights reserved</div>
  </section>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>