<!DOCTYPE html>
<html>
    <head>
        <title> Details Page</title>
        <style>
            <?php include 'details.css';?>
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Details </h2>
            <div class="forms">
                <form method="post" >
                    <input type="text" name="name" placeholder="Full Name"> <br>
                    <input type="datetime" name="dob" placeholder="Date of Birth"> <br>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <input type="number" name="phone_number" placeholder="Phone Number"> <br>
                    <input type="number" name="reg_number" placeholder="Anna University Reg No"> <br>
                    <input type="text" name="10th_mark" placeholder="10th Mark "> <br>
                    <input type="text" name="12th_mark" placeholder="12th Mark "> <br>
                    <button type="submit"> <a href="semester.php">Next </a></button>
                </form>
            </div>
        </div>
    </body>
</html>