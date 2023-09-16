<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url('img/9.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <a href="home.php">
                    <img src="./img/sneakers.png" alt=""></a>
            </div>
            <div class="navItem">
                <p>Already registered.
                    <a class="btn btn-outline-primary" href="login.php">LogIn Here</a>
                </p>
            </div>


        </div>

    </nav>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fullName) or empty($email) or empty($password) or empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            // if (!ctype_alpha($fullName)) {
            //     echo "<div class='alert alert-danger'>Name can only contain letters</div>";
            // }

            if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9!@#$%^&*]).{8,}$/", $password)) {
                echo "<div class='alert alert-danger'>Password must contain at least one uppercase,lowercase letter, digit, and special character.</div>";
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) > 0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {

                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }
        }
        ?>





        <form action="registration.php" method="post">
            <div class="form-group">
                <!-- <input type="text" class="form-control" name="fullname" placeholder="Full Name:"> -->
                <span id="error" class="error"></span>
                <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Full Name:">

            </div>

            <div class="form-group">
                <div id="error" style="color: red;"></div>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email:" onkeyup="validateEmail()" required>



                <!-- <input type="emamil" class="form-control" name="email" placeholder="Email:"> -->
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>

    </div>
    <!-- validateName -->
    <script>
        const fullnameInput = document.getElementById('fullname');
        const errorElement = document.getElementById('error');

        fullnameInput.addEventListener('input', function() {
            const fullnameValue = fullnameInput.value;
            const nameRegex = /^[a-zA-Z\s]+$/;

            if (!nameRegex.test(fullnameValue)) {
                errorElement.innerHTML = '<div class="alert alert-danger">Only alphabet are allowed.</div>';
                emailInput.classList.add('border', 'border-danger');
            } else {
                errorElement.textContent = '';
                emailInput.classList.remove('border', 'border-danger');
            }
        });
    </script>

    <!-- validateEmail -->
    <script>
        function validateEmail() {
            const emailInput = document.getElementById('email');
            const emailValue = emailInput.value;
            const emailPattern = /^[a-zA-Z0-9]+([._-][a-zA-Z0-9]+)*@(gmail\.com|yahoo\.com|gmail\.in|yahoo\.in)$/;

            const errorElement = document.getElementById('error');

            const startsWithSpecialCharOrNumber = /^[^a-zA-Z]/.test(emailValue);
            const startsWithNumber = /^[0-9]/.test(emailValue);
            const repeatsOnlySpecialChar = /^[!@#$%^&*]+$/.test(emailValue.split('@')[0]);

            if (!emailPattern.test(emailValue) || startsWithSpecialCharOrNumber || startsWithNumber || repeatsOnlySpecialChar) {
                errorElement.innerHTML = '<div class="alert alert-danger">Invalid email format.</div>';
                emailInput.classList.add('border', 'border-danger');
            } else {
                errorElement.innerHTML = '';
                emailInput.classList.remove('border', 'border-danger');
            }
        }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>