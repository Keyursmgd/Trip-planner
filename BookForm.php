<?php $price = 5000; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Your Trip</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
  <h1 class="heading-title">Book your trip now</h1>

  <form id="bookingForm" class="book-form">
    <div class="flex">
      <div class="inputBox">
        <span>Name:</span>
        <input type="text" id="name" placeholder="Enter your name" required>
        <span class="error" id="nameError" style="color:red; font-size: 14px;"></span>
      </div>
      <div class="inputBox">
        <span>Email:</span>
        <input type="email" id="email" placeholder="Enter your email" required>
        <span class="error" id="emailError" style="color:red; font-size: 14px;"></span>
      </div>
      <div class="inputBox">
        <span>Phone:</span>
        <input type="text" id="phone" placeholder="Enter your phone number" required>
        <span class="error" id="phoneError" style="color:red; font-size: 14px;"></span>
      </div>
      <div class="inputBox">
        <span>Package:</span>
        <input type="text" id="package" value="Goa" required>
      </div>
      <div class="inputBox">
        <span>No. of Guests:</span>
        <input type="number" id="guests" value="2" required>
        <span class="error" id="guestsError" style="color:red; font-size: 14px;"></span>
        <input type="hidden" id="booking_date" value="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>
    <button type="button" onclick="payNow()" class="btn">Pay & Book</button>
  </form>
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

<script>
function showError(id, message) {
  document.getElementById(id).innerText = message;
}

function clearErrors() {
  const errorFields = document.querySelectorAll('.error');
  errorFields.forEach(el => el.innerText = "");
}

function validateForm() {
  clearErrors();
  let valid = true;

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const guests = document.getElementById("guests").value.trim();

  if (!name) {
    showError("nameError", "Name is required.");
    valid = false;
  }

  const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
  if (!emailPattern.test(email)) {
    showError("emailError", "Enter a valid email.");
    valid = false;
  }

  if (!/^[0-9]{10}$/.test(phone)) {
    showError("phoneError", "Phone must be 10 digits.");
    valid = false;
  }

  if (parseInt(guests) <= 0) {
    showError("guestsError", "Guests must be at least 1.");
    valid = false;
  }

  return valid;
}

function payNow() {
  if (!validateForm()) return;

  var options = {
    "key": "rzp_test_1DP5mmOlF5G5ag",
    "amount": <?php echo $price * 100; ?>,
    "currency": "INR",
    "name": "Trip Planner",
    "description": "Trip Booking Payment",
    "handler": function (response) {
      window.location.href = "book.php?payment_id=" + response.razorpay_payment_id +
        "&name=" + document.getElementById("name").value +
        "&email=" + document.getElementById("email").value +
        "&phone=" + document.getElementById("phone").value +
        "&package=" + document.getElementById("package").value +
        "&guests=" + document.getElementById("guests").value +
        "&booking_date=" + document.getElementById("booking_date").value;
    }
  };
  var rzp = new Razorpay(options);
  rzp.open();
}
</script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>



