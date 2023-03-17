<!DOCTYPE html>
<html>
    <head>
        <title> Student Login Page</title>
        <style>
            <?php include 'styles.css';?>
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Login </h2>
            <div class="forms">
                <form method="post" >
                    <input type="number" name="reg_number" placeholder="Anna University Reg No"> <br>
                    <input type="email" name="email" placeholder="Email Address"> <br>
                    <input type="password" name="password" placeholder="Password"> <br>
                    <button type="submit"> <a href="Dashboard.php"> Submit </a> </button>
                    <p style="text-align: center;">New User?<br>Create Account <a href="register.php">   Sign Up</a></p>
                </form>
            </div>
        </div>
    </body>
</html>