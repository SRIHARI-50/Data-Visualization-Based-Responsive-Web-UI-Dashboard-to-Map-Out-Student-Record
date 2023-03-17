<!DOCTYPE html>
<html>
    <head>
        <title> Faculty Login Page</title>
        <style>
            <?php include 'styles.css';?>
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Login </h2>
            <div class="forms">
                <form method="post" >
                    <input type="email" name="email" placeholder="Email Address"> <br>
                    <input type="password" name="password" placeholder="Password"> <br>
                    <button type="submit"><a href="search.php"> Submit </a></button>
                    <p style="text-align: center;">New User?<br>Create Account <a href="Faculty_register.php">   Sign Up</a></p>
                </form>
            </div>
        </div>
    </body>
</html>