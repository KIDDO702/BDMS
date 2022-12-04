<?php

include './inc/dbh.inc.php';

// CODING FOR SIGN UP
if (isset($_POST['submit'])) {

    // STORING TO LOCAL VARIABLES
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = strip_tags($_POST['pwd']);
    $passwordRpt = strip_tags($_POST['pwdRpt']);

    // ERROR HANDLERS

    // PASSWORDS DON'T MATCH
    

    // EMPTY FIELDS 
    if (empty($name)) {
        $errorMsg[0][] = 'Name required';
    }
    if (empty($email)) {
        $errorMsg[1][] = 'Email required';
    }
    if (empty($password)) {
        $errorMsg[2][] = 'Password required';
    }
    if (empty($passwordRpt)) {
        $errorMsg[3][] = 'Please repeat your password';
    }
    if ($password !== $passwordRpt) {
       $errorMsg[2][] = 'Passwords dont match';
    }

    if (empty($errorMsg)) {

        // CHECKING IF THE USER EXISTS
        $result = 'SELECT count(*) FROM client WHERE email=?';
        $stmt = $conn->prepare($result);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        // IF EMAIL EXISTS
        if ($count > 0) {
            echo "<script>alert('Email adress already exists. Please try with diffrent Email address.');</script>";
        }
        // IF EMAIL DOESN'T EXISTS
        else {
            $hashedpas = password_hash($password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO client (name, email, password) VALUES (?, ?, ?)';
            $stmti = $conn->prepare($sql);
            $stmti->bind_param('sss', $name, $email, $hashedpas);
            $stmti->execute();
            $stmti->close();
            header('location: index.php');
            echo "<script>alert('User registration successful, Please Log In to continue');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./sass/style.css">
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox shadow">
                    <div class="login-left">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Register</h1>
                            <p class="account-title" style="font-size: 17px;">Access Our Dashboard</p>
                            <form action="register.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                    <?php
                                    if (isset($errorMsg[0])) {
                                        foreach ($errorMsg[0] as $nameError) {
                                            echo "<p class='small text-primary pt-1'>" . $nameError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="uid">
                                </div> -->
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                    <?php
                                    if (isset($errorMsg[1])) {
                                        foreach ($errorMsg[1] as $emailError) {
                                            echo "<p class='small text-primary pt-1'>" . $emailError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="pwd">
                                    <?php
                                    if (isset($errorMsg[2])) {
                                        foreach ($errorMsg[2] as $passwordError) {
                                            echo "<p class='small text-primary pt-1'>" . $passwordError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password Repeat" name="pwdRpt">
                                    <?php
                                    if (isset($errorMsg[3])) {
                                        foreach ($errorMsg[3] as $nameError) {
                                            echo "<p class='small text-primary pt-1'>" . $passwordError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group d-grid">
                                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                                </div>
                            </form>
                            <!-- <div class="text-center forgotpass mb-2">
                                <a href="" style="color: #a0a0a0; text-decoration:none;">Forgot Password?</a>
                            </div> -->
                            <div class="text-center dont-have pt-3" style="color: #a0a0a0;">
                                Already have an account?
                                <a href="./index.php" style="text-decoration: none;">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>