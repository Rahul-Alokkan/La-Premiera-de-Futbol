<?php

$user=$_POST['user'];
$pass=$_POST['pass'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $localhost 	= "localhost"; 
    $username 	= "root"; 
    $password 	= ""; 
    $dbname 	= "webtechproject"; 
 
    $con = new mysqli($localhost, $username, $password, $dbname); 
    if($con->connect_error) {
        die("connection failed : " . $con->connect_error);
    }

    $sql= "SELECT * FROM admin WHERE Username = '$user' AND Password = '$pass' ";
    $result = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><center> Login successful</center></h1><h3>The Admin page is under construction. You will be getting acces to all tne data soon...</h3>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
    
    
}





?>