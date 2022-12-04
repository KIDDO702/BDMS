<?php
session_start();
include './inc/dbh.inc.php';

// CODE FOR LOG IN
if (isset($_POST['submit'])) {

    // GETTING THE POST VALUES 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = strip_tags($_POST['password']);

    // EMPTY FIELDS 
    if (empty($email)) {
        $errorMsg[0][] = 'Email required';
    }
    if (empty($password)) {
        $errorMsg[1][] = 'Password required';
    }

    if (empty($errorMsg)) {
        $sql = 'SELECT id, name, password FROM client WHERE email = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($id, $name, $hashedPass);
        $stmt->fetch();
        $stmt->close();

        $recoveredpassword = password_verify($password, $hashedPass);
        if (!$recoveredpassword) {
            echo "<script>alert('Invalid Details. Please try again.')</script>";
        } else {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            header("location: dashboard.php");
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
    <title>Log In</title>
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
                            <h1>Log In</h1>
                            <p class="account-title" style="font-size: 17px;">Access our Dashboard</p>
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                    <?php
                                    if (isset($errorMsg[0])) {
                                        foreach ($errorMsg[0] as $emailError) {
                                            echo "<p class='small text-primary pt-1'>" . $emailError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <?php
                                    if (isset($errorMsg[1])) {
                                        foreach ($errorMsg[1] as $passwordError) {
                                            echo "<p class='small text-primary pt-1'>" . $passwordError . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group d-grid">
                                    <button class="btn btn-primary" type="submit" name="submit">Log In</button>
                                </div>
                            </form>
                            <div class="text-center forgotpass mb-2">
                                <a href="./forgotpass.php" style="color: #a0a0a0; text-decoration:none;">Forgot Password?</a>
                            </div>
                            <div class="text-center dont-have pt-3" style="color: #a0a0a0;">
                                Don’t have an account?
                                <a href="./register.php" style="text-decoration: none;">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>