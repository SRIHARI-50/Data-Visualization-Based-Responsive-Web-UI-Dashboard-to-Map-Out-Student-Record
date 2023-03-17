<!DOCTYPE html>
<html>
    <head>
        <title> Performance Page</title>
        <style>
            <?php include 'details.css';?>
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Activities </h2>
            <div class="forms">
                <form method="post" >
                    <div class="block">
                        <label for="Project"> Projects </label> 
                        <select id="Project">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="block">
                        <label for="Comp"> Competitions </label> 
                        <select id="Comp">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="block">
                        <label for="Paper"> Paper Presentation </label> 
                        <select id="Paper">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="block">
                        <label for="Sports"> Sports Achievements </label> 
                        <select id="Sports">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="block">
                        <label for="Comp"> Technical Symposiums </label> 
                        <select id="Comp">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit"> <a href="login.php"> Submit </a></button>
                </form>
            </div>
        </div>
    </body>
</html>