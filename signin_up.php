<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in or Sign up</title>
    <link rel="stylesheet" href="css/signin_up.css">
</head>
<body>

<?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email =  mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $pass = password_hash($password,PASSWORD_BCRYPT);

        $emailquery = "select * from registration where email='$email' ";
        $query =  mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            ?>
            <script>
                alert(" Email already exists");
            </script>
        <?php
        }else{
            $insertquery = "INSERT INTO `registration`( `username`, `email`, `password`) VALUES ('$username','$email','$pass')";

            $iquery = mysqli_query($con,$insertquery);

            if($iquery){
                ?>
                    <script>
                        alert(" Inserted Successfully");
                    </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Value Not Inserted");
                </script>
            <?php
            }
        }
    }
?>


<?php

    if(isset($_POST['login'])){
        $email = $_POST['email'];
       $password = $_POST['password']; 

     $sql = "SELECT * FROM registration WHERE email='$email' ";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) === 1){
        ?>
        <script>
            alert("Login Successfully");
        </script>
    <?php
      header("Location:encryption.php");

  } else{
    ?>
        <script>
            alert("This email is not Registered");
        </script>
    <?php
  }
    }

?>

    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form method="POST" action="">
                        <input type="email" name="email" class="input-box" placeholder="Your Email ID" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <button type="submit" name="login" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span> 
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm New here</button>
                    <a href="">Forgot Password</a>
                </div>
                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action="" method="POST">
                        <input type="text" name="username" class="input-box" placeholder="Your Name" required>
                        <input type="email" name="email" class="input-box" placeholder="Your Email ID" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <button type="submit" name="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span> 
                    </form>
                    <button type="button" class="btn" onclick="OpenLogin()">I've an Account</button>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)"
        }
        function OpenLogin(){
            card.style.transform = "rotateY(0deg)"
        }
    </script>
</body>
</html>