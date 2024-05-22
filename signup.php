<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/account.css" />
    <link rel="website icon" type="jpg" href="assets/icons/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="content">
        <div class="loginPageLeftSection">
            <header>
                <img src="images/logo.jpg" alt="Company Logo" />
            </header>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $firstname = $_POST['first_name'];
                $lastname = $_POST['last_name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone_number'];
                $address = $_POST['address'];
                $password = $_POST['password'];

                
                // $conn = new mysqli('hostname', 'username', 'password', 'database');
                // if ($conn->connect_error) {
                //     die('Connection failed: ' . $conn->connect_error);
                // }
                // $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, username, email, phone, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
                // $stmt->bind_param("sssssss", $firstname, $lastname, $username, $email, $phonenumber, $address, password_hash($password, PASSWORD_DEFAULT));
                // if ($stmt->execute()) {
                //     echo '<p>Account created successfully!</p>'; (return to home page logged in)/ home page will be created later
                // } else {
                //     echo '<p>Error: ' . $stmt->error . '</p>';
                // }
                // $stmt->close();
                // $conn->close();

            }
            ?>

            <form method="post" action="">
                <h2>Start exploring the best camping spots in Lebanon.</h2>
                <div class="row">
                    <div class="column">
                        <input type="text" placeholder="Enter your first name:" class="userInput" name="Firstname" required/>
                    </div>
                    <div class="column">
                        <input type="text" placeholder="Enter your last name:" class="userInput" name="Lastname" required/>
                    </div>
                    <div class="column">
                        <input type="text" placeholder="Enter your Username:" class="userInput" name="Username" required/>
                    </div>
                </div>
                <input type="email" placeholder="Enter your email:" class="userInput" name="Email" required/>
                <input type="tel" placeholder="Enter your phone number:" class="userInput" name="phone" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" required/>
                <input type="text" placeholder="Address: District/City" class="userInput" name="Address" required/>
                <input type="password" placeholder="Enter your password:" minlength="6" class="userInput" name="Password" required/>
                <br>
                <input type="submit" value="Create an account" name="Signup"/>
                <p>Already a user? <a href="login.php" class="a">Sign in</a></p>
                <h4><a href="home.php">&larr; Back to HOME</a></h4>
            </form>
        </div>
    </div>
</body>

</html>