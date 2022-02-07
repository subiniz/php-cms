<?php include 'includes/header.php'; ?>

  <?php
    if(isset($_POST['username'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $encrypted_password = md5(sha1($password)); // Double encryption
      // var_dump($encrypted_password);
      // die;

      $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$encrypted_password')";
      if(mysqli_query($conn, $query)) {
        //$_SESSION -> GLOBAL variable
        $_SESSION['alert'] = "Register Successfull!"; // Set the alert message in session
        header('location: login.php');
      } else {
        $_SESSION['error'] = "Sorry, cannot process your request!";
      }

      //INSERT QUERY
    }
  ?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              
              <?php include 'includes/alert.php'; ?>
              
              <form action="register.php" method="POST">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control p_input" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email"  class="form-control p_input" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input" required>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
                <!-- <div class="d-flex">
                  <button class="btn btn-facebook col me-2">
                    <i class="mdi mdi-facebook"></i> Facebook </button>
                  <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div> -->
                <p class="sign-up text-center">Already have an Account?<a href="login.php"> Sign In</a></p>
                <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php include 'includes/footer.php'; ?>
