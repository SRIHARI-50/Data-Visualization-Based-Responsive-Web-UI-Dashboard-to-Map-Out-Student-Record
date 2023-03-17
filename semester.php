<!DOCTYPE html>
<html>
    <head>
        <title> semester Page</title>
        <style>
            <?php include 'semester.css';?>
        </style>
    </head>
    <body>
        <div class="containers">
            <h2> Semester Marks </h2>
            <div class="forms">
                <form method="post" >
                    <div class = "sem">
                        <label for="sem1">First Semester </label> 
                        <input type="checkbox" id="sem1" onclick="check1()">
                    </div>
                    <input type="number" style="display:none" id="text1" name="sem1" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem2">Second Semester </label> 
                        <input type="checkbox" id="sem2" onclick="check2()">
                    </div>
                    <input type="number" style="display:none" id="text2" name="sem2" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem3">Third Semester </label> 
                        <input type="checkbox" id="sem3" onclick="check3()">
                    </div>
                    <input type="number" style="display:none" id="text3" name="sem3" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem4">Fourth Semester </label> 
                        <input type="checkbox" id="sem4" onclick="check4()">
                    </div>
                    <input type="number" style="display:none" id="text4" name="sem4" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem5">Fifth Semester </label> 
                        <input type="checkbox" id="sem5" onclick="check5()">
                    </div>
                    <input type="number" style="display:none" id="text5" name="sem5" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem6">Sixth Semester </label> 
                        <input type="checkbox" id="sem6" onclick="check6()">
                    </div>
                    <input type="number" style="display:none" id="text6" name="sem6" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem7">Seventh Semester </label> 
                        <input type="checkbox" id="sem7" onclick="check7()">
                    </div>
                    <input type="number" style="display:none" id="text7" name="sem7" placeholder="GPA">
                    <div class = "sem">
                        <label for="sem8">Eighth Semester </label> 
                        <input type="checkbox" id="sem8" onclick="check8()">
                    </div>
                    <input type="number" style="display:none" id="text8" name="sem8" placeholder="GPA">
                    <button type="submit"> <a href="performance.php">Next </a></button>
                </form>
            </div>
        </div>
        <script>
            function check1(){
                var checkBox = document.getElementById("sem1");
                var text = document.getElementById("text1");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check2(){
                var checkBox = document.getElementById("sem2");
                var text = document.getElementById("text2");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check3(){
                var checkBox = document.getElementById("sem3");
                var text = document.getElementById("text3");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check4(){
                var checkBox = document.getElementById("sem4");
                var text = document.getElementById("text4");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check5(){
                var checkBox = document.getElementById("sem5");
                var text = document.getElementById("text5");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check6(){
                var checkBox = document.getElementById("sem6");
                var text = document.getElementById("text6");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check7(){
                var checkBox = document.getElementById("sem7");
                var text = document.getElementById("text7");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
            function check8(){
                var checkBox = document.getElementById("sem8");
                var text = document.getElementById("text8");
                if (checkBox.checked == false){
                    text.style.display = "none";
                } else {
                    text.style.display = "block";
                }
            }
        </script>
    </body>
</html>