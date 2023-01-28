<?php
require("./api/connection.php");
if(isset($_GET['mob'])&& isset($_GET['v_code']))
{
    $query = "SELECT * FROM `user` WHERE `mobile`='$_GET[mob]' AND `verification_code`= '$_GET[v_code]'";

    $result = mysqli_query($connect,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0)
            {
                $update = "UPDATE `user` SET `is_verified`='1' WHERE `mobile`='$result_fetch[mobile]'";

                if(mysqli_query($connect,$update))
                {
                                echo '<script>
                    alert("Email verification Successful");
                    window.location = "index.php";
                </script>';
                }
                else{
                    echo '<script>
                    alert("Cannot run query");
                    window.location = "index.php";
                </script>';
                }
            }
            else
            {
                echo '<script>
        alert("Email already verified");
        window.location = "index.php";
    </script>';
            }
        }
    }
    else
    {
        echo '<script>
        alert("Cannot run query");
        window.location = "index.php";
    </script>';
    }
}
?>