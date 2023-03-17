<!DOCTYPE html>
<html>
    <head>
        <title> Dashboard Page</title>
        <style>
            <?php include 'Dashboard.css';?>
        
        </style>
        
    </head>
    <body>
        <!-- The sidebar -->
        <div class="sidebar">
            <img src="Contacts.jpg">
                <p class="active">Name</p>
                <p>Roll Number</p>
                <p>Date of Birth</p>
                <p>Gender</p>
                <p>Email Address</p>
                <p>Contact Number</p>
                <p>10th Mark</p>
                <p>12th Mark</p>
        </div>
        
        <!-- Page content -->
        <div class="contents">
            <div class="heading"> Student Dashboard </div>
            <div class="block">
                <div class="left_block">
                    <h1>Semester Performance</h1>
                    <div class="piechart"></div>
                </div>
                <div class="Right_block">
                    <h1> Extra Curricular Activites</h1>
                    <div class='barcontainer'>
                        <div class='bar' style='height:12%'>
                            bar
                            <div class='barlabel'>
                            label1
                            </div>
                        </div>
                        <div class='bar' style='height: 16%'>
                            bar
                            <div class='barlabel'>
                            label2
                            </div>
                        </div>
                        <div class='bar' style='height: 22%'>
                            bar
                            <div class='barlabel'>
                            label3
                            </div>
                        </div>
                        <div class='bar' style='height:30%'>
                            bar
                            <div class='barlabel'>
                            label4 </div>
                        </div>
                        <div class='bar' style='height:45%'>
                            bar
                            <div class='barlabel'>
                            label5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>