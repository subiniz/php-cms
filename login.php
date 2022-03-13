<?php include 'includes/header.php'; ?>
<?php
//Checks whether the input fields are empty or not
if(isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = md5(sha1($_POST['password']));

  $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
  $result = mysqli_query($conn, $query);
  //Checks whether the provided cred/user exists in DB or not
  if(mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['userId'] = $user['id'];
    $_SESSION['userName'] = $user['username'];
    header('location: index.php');
  } else {
    // Return some sort of error
    echo "Sorry, the credentials are wrong!";
  }
}


// if(isset($_POST['email']) && isset($_POST['password'])) {
//   $email = $_POST['email'];
//   $password = $_POST['password'];
  
//   $checkUserQuery = "SELECT * FROM `users` WHERE (`email` = '$email' OR `email` = '$username')";
//   $result = mysqli_query($conn, $checkUserQuery);
//   if(mysqli_num_rows($result) > 0) {
//     // Next we check if the given password matches the record in the database
//     $user = mysqli_fetch_assoc($result);
//     // echo "<pre>";
//     // var_dump($user);
//     // echo "PASSWORD: " . md5(sha1($password));
//     // die;
//     // md5(sha1($password)); -> Encryption

//     if($user['email'] == md5(sha1($password))) {
//       //if password and email is correct, redirect the user to index page
//       header('location: index.php');
//     } else {
//       //if password is wrong, show err msg
//       $_SESSION['error'] = "Sorry, the credential you've provided is wrong!";
//     }

//   } else {
//     //false
//     $_SESSION['error'] = "Sorry, Username/Email doesn't exist!";
//   }
// }

?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>

              <?php include 'includes/alert.php'; ?>

              <form action="" method="POST">
                <div class="form-group">
                  <label>Email *</label>
                  <input type="email" name="email" class="form-control p_input" required>
                </div>
                <div class="form-group">
                  <label>Password *</label>
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
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <!-- <div class="d-flex">
                  <button class="btn btn-facebook me-2 col">
                    <i class="mdi mdi-facebook"></i> Facebook </button>
                  <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div> -->
                <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
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