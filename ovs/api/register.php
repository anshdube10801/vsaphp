<?php

    include("connection.php");

    

    $name = $_POST['name'];
   $mobile = $_POST['mob'];
    $pass= $_POST['pass'];
    $passwrd = base64_encode($_POST['pass']);
    $hash =  password_hash($pass, PASSWORD_DEFAULT);
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    
    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        // $v_code = bin2hex(random_bytes(16));
        $insert = mysqli_query($connect, "insert into user (name, mobile, password, address, photo, status, votes, role,is_verified) values('$name', '$mobile', '$passwrd', '$add', '$image', 0, 0, '$role',0) ");
        if($_POST['mob']){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    

   // $email = $_POST['email'];
//$domain = explode('@',$email)[1];

//if($domain != 'amn.com')
 //{
  //  die ('This domain is not allowed to register');
//}
   
?>




