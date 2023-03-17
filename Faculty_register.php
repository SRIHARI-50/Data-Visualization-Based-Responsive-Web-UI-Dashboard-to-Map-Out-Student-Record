<!DOCTYPE html>
<html>
    <head>
        <title> Faculty Register Page</title>
        <style>
            <?php include 'styles.css';?>
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Sign Up </h2>
            <div class="forms">
                <form method="post" >
                    <input type="name" name="name" placeholder="Full Name"> <br>
                    <input type="email" name="email" placeholder="Email Address"> <br>
                    <input type="password" name="password" placeholder="Password"> <br>
                    <input type="password" name="confirm_password" placeholder="Confirm Password"> <br>
                    <button type="submit"> <a href="Faculty_login.php"> Submit </a></button>
                    <p style="text-align: center;"> Already registered <a href="Faculty_login.php">  Login</a></p>
                </form>
            </div>
        </div>
    </body>
</html>