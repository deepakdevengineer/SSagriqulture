<!DOCTYPE html>
<html lang="en">
    <?php
include 'includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hashing the password (consider using more secure methods like password_hash)
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];

    $check_username = mysqli_query($conn, "SELECT username FROM users where username = '$username'");
    $check_email = mysqli_query($conn, "SELECT email FROM users where email = '$email'");

    if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password) || empty($pincode) || empty($address)) {
        $message = "All fields must be Required!";
    } else {
        if ($password != md5($_POST['cpassword'])) {
            echo "<script>alert('Password not match');</script>";
        } elseif (strlen($_POST['password']) < 6) {
            echo "<script>alert('Password Must be >=6');</script>";
        } elseif (strlen($phone) < 10) {
            echo "<script>alert('Invalid phone number!');</script>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email address please type a valid email!');</script>";
        } elseif (mysqli_num_rows($check_username) > 0) {
            echo "<script>alert('Username Already exists!');</script>";
        } elseif (mysqli_num_rows($check_email) > 0) {
            echo "<script>alert('Email Already exists!');</script>";
        } else {
            $mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address,pincode) VALUES('$username','$firstname','$lastname','$email','$phone','$password','$address','$pincode')";
            mysqli_query($conn, $mql);

            echo "Registration successful!";
            header("Location: login.php");
            exit();
        }
    }
}
?>
<?php include "header.php" ?>

    <body style="font-family: Arial, sans-serif; background-color: #f1f1f1; margin: 0; padding: 0;">

    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                        <?php
                        if (empty($_SESSION["user_id"])) {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                                  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        } else {
                            echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                            echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="contact-page inner-page">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-body">
                                
                                <form action="" method="post">
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="username">User-Name</label>
            <input class="form-control" type="text" name="username" id="username">
        </div>
        <div class="form-group col-sm-6">
            <label for="firstname">First Name</label>
            <input class="form-control" type="text" name="firstname" id="firstname">
        </div>
        <div class="form-group col-sm-6">
            <label for="lastname">Last Name</label>
            <input class="form-control" type="text" name="lastname" id="lastname">
        </div>
        <div class="form-group col-sm-6">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group col-sm-6">
            <label for="phone">Phone number</label>
            <input class="form-control" type="text" name="phone" id="phone">
        </div>
        <div class="form-group col-sm-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group col-sm-6">
            <label for="cpassword">Confirm password</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword">
        </div>
        <div class="form-group col-sm-12">
            <label for="address">Delivery Address</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
        <div class="form-group col-sm-1">
      <label for="pincode">Pincode</label>
     <input type="text" class="form-control" name="pincode" id="pincode">
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p><input type="submit" value="Register" name="submit" class="btn theme-btn"></p>
        </div>
    </div>
</form>


                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
    </div>
</body>

<br><br><br><br><br><br><br><br><br><br><br>
<?php include "footer.php" ?>

  </body>
</html>