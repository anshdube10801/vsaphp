<?php
    session_start();
    include("connection.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $passwrd = base64_encode($_POST['pass']);
    $role = $_POST['role'];
    $state= "approved";
    

    $check = mysqli_query($connect, "SELECT * from user where mobile='$mobile' and password='$passwrd' and role='$role' and state = 'approved'");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select name, photo,mobile, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        $_SESSION['state']=$data['state'];
        $_SESSION['name']=$data['name'];
        $_SESSION['mobile']=$data['mobile'];
        
        echo '<script>
                window.location = "../index.html";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials or Your ID might not be approved by Admin!");
                window.location = "../";
            </script>';
    }
    
?>
<!-- $result=mysqli_fetch_assoc($check);
    if(password_verify($pass , $result["password"]))
    { -->