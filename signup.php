<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("./components/header/header.php");
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <?php
            include("server/connection.php");
            include("components/spinner/spinner.php");
        ?>

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Bizhub</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="floatingText" onkeyup='saveValue(this);'>
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput" onkeyup='saveValue(this);'>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password" id="floatingPassword" onkeyup='saveValue(this);'>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onkeyup='saveValue(this);'>
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <input type="submit" for="modal-btn" name='submit' value='Sign Up' class="btn btn-primary py-3 w-100 mb-4"></input>
                        </form>
                        <?php
                            if(isset($_POST['submit'])) {
                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                // Check if username already exists
                                $query = "SELECT * FROM users WHERE username = '$username'";
                                $result = mysqli_query($connection, $query);
                                if(mysqli_num_rows($result) > 0) {
                                    echo '
                                    <div class="alert alert-danger text-center" role="alert">
                                        Username already exists!
                                    </div>
                                    ';
                                    goto end;
                                }

                                // Check if email already exists
                                $query = "SELECT * FROM users WHERE email = '$email'";
                                $result = mysqli_query($connection, $query);
                                if(mysqli_num_rows($result) > 0) {
                                    echo '
                                    <div class="alert alert-danger text-center" role="alert">
                                        Email already exists!
                                    </div>
                                    ';
                                    goto end;
                               }

                                // Check if data is valid
                                if(empty($username)) {
                                    echo '
                                    <div class="alert alert-danger text-center" role="alert">
                                        Username is required!
                                    </div>
                                    ';
                                    goto end;
                                }

                                if(empty($email)) {
                                    echo '
                                    <div class="alert alert-danger text-center" role="alert">
                                        Email is required!
                                    </div>
                                    ';
                                    goto end;
                                }

                                if(empty($password)) {
                                    echo '
                                    <div class="alert alert-danger text-center" role="alert">
                                        Password is required!
                                    </div>
                                    ';
                                    goto end;
                                }

                                // Insert data into database
                                $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
                                $result = mysqli_query($connection, $query);
                                if($result) {
                                    echo "<p>Sign Up Successful</p>";
                                }
                                else {
                                    echo "<p>Sign Up Failed</p>";
                                }

                                end:
                            }
                        ?>
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <?php
        include("components/scripts/scripts.php");
    ?>
</body>

</html>