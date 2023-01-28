<?php
 include("./api/connection.php");
 ?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=email], input[type=password] {   
        width: 100%;
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Student Login Form </h1> </center>   
    <form method="POST" action="adminlogin.php">  
        <div class="container">   
            <label>Username : </label>   
            <input type="email" placeholder="Enter Email" name="mob" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="pass" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            
        </div>   
    </form>     
</body>     
</html> 

<?php 

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
 
    $state= "approved";
    

    $check = mysqli_query($connect, "SELECT * from admin1 where mobile='$mobile' and password='$pass'");

    if(mysqli_num_rows($check)>0){
       
        $dat = mysqli_fetch_array($check);
        $_SESSION['id1'] = $dat['id1'];
        $_SESSION['dat'] = $dat;
        
        echo '<script>
                window.location = "chart.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials ");
                window.location = "chart.php";
            </script>';
    }
    
?>
<!-- $result=mysqli_fetch_assoc($check);
    if(password_verify($pass , $result["password"]))
    { -->