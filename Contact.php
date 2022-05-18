<!DOCTYPE html>

<html>


    <head>
        <link rel="stylesheet" href="Main.css">
        <script src="https://kit.fontawesome.com/e65b638145.js" crossorigin="anonymous"></script>

        <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Main.css' />";
   ?>
        <title>
            La Premiera de futbol
        </title>
    </head>

    <body>
        <nav class="navbar">
            <a>La Premiera de futbol </a>
            <div class="head-element">
            <a href="Main.html">Home</a>
            <a href="AboutUs.html">About</a>
            <a href="Contact.php">Contact Us</a>
        
        </nav>

        <div class="contactform">
            <h1 class="cth"><i class="fa-solid fa-address-card"></i> Contact Us </h1> <br>
            <span class="Error"><?php  ?></span>
            <div class="form">
                <form action="Contact.php" method="post">
                    <table>
                        <tr><td><label for="">Name:</label></td><td><input type="text" name="name" id="" class="box" placeholder="Name"></td></tr>
                        <tr><td><label for="">Email:</label></td><td><input type="text" name="mail" id="" class="box" placeholder="Email"></td></tr>
                        <tr><td><label for="">Contact No.:</label></td><td><input type="number" min="1" placeholder="Mobile" class="box" name="num"></td></tr>
                        <tr><td><label for="">Comment:</label></td><td><textarea name="com" id="" cols="30" rows="10" class="box"></textarea></td></tr>
                    </table>
                    
                
            </div>
            <input type="submit" value="Submit" class="ctsubmit">
            </form>
        </div>


        <?php
        
        

        
        ?>



    </body>


</html>