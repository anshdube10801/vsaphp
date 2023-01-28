<?php
include './api/connection.php';

    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type ="text/css" href = "main.css">
    <title>Admin Approval</title>
    <style>.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    text-align: center;
  }
  
  #users {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #users td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #users tr:nth-child(even){background-color: #f2f2f2;}
  
  #users tr:hover {background-color: #ddd;}
  
  #users th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    text-align: center;
  }</style>
</head>
<body>
    

<div class="center">
    <h1>User Registration</h1>

    <table id = "users">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email Address</th>
            <th>Action</th>
        </tr>

        <?php
            $query = "SELECT * FROM user WHERE state = 'pending' or state = 'not approved' ORDER BY id ASC";
            $result = mysqli_query($connect, $query);
            if($result)
            {
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td>
                <form action ="admin.php" method ="POST">
                    <input type = "hidden" name  ="id" value = "<?php echo $row['id'];?>"/>
                    <input type = "submit" name  ="approve" value = "Approve"/>
                    <input type = "submit" name  ="deny" value = "Deny"/>
                </form>
            </td>
        </tr>
        <?php
            }}
            else {
                echo 'error occured';
            }
            ?>
</div>
    </table>

   

<?php

if(isset($_POST['approve'])){
    $id = $_POST['id'];

    $select = "UPDATE user SET state = 'approved' WHERE id = '$id'";
    $result = mysqli_query($connect, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "admin.php"';
    echo '</script>';
}

if(isset($_POST['deny'])){
    $id = $_POST['id'];

    $select = "DELETE FROM user WHERE id = '$id'";
    $result = mysqli_query($connect, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "admin.php"';
    echo '</script>';
}
?>

</body>
</html>