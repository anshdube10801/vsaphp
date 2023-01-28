<?php 
session_start();
include("../api/connection.php");
if(!isset($_SESSION['id'])){
    header("location: ../");
}
$data = $_SESSION['data'];

if($_SESSION['status']==1){
    $status = '<b style="color: green">Voted</b>';
}
else{
    $status = '<b style="color: red">Not Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
	

    
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        
        #details{
            
            float: right;
            margin-top: 1.5px;
            margin-right: 4px;
            padding: 5px;
            font-size:16px;
            width: 31%;
           background-color:  #80808036;
        }

        span {
            font-size: 16px;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
        }
        b{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
        }
        
        #table {
            margin: 10px;
            display: inline;
            height: 10px;
            font-family: arial, sans-serif;
            width: 100%;
            
            }
        table{
            border-collapse: collapse;
            margin-top: 10px;
            width: 66%;
            margin-left: 18px;
            }

        td, th {
            border: 2px solid black;
            text-align: center;
            padding: 8px;
            align-items: center;
            justify-content: center;
            border-collapse: collapse;
           
            }
        th{
            font-size: 3vh;
            
            }
        tr{
           width: 10%;
            background-color: rgba(0, 0, 0, 0.199);
            
            
        }
        #nc{
            font-size: 2.5vh;
            width: 80%;
            font-size: 20px;
            text-decoration: black;
        }
        .ab:hover
            {background-color: white;}
            .footer{
                display: block;
                margin-top: 20%;
            }
            tr:nth-child(even){
            background-color: rgba(128, 128, 128, 0.692);
        }
        

    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">
<nav class="navbar navbar-expand-lg fixed-top navbar-light"style="background-color:white;">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="../index.html"><img src="../images/logo2.png" alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#intro">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#features">About-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">Contact-Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm page-scroll" href="../routes/logout.php">Log out</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

   
<header style="margin-top: 7em; margin-bottom: 2vh; align-items: 20px;">
    <h2 style="margin-left: 27.75%;"><u>E-BALLOT</u></h2>
</header>
        
    <div>
        <div id="details">
            <center><h2><U>YOUR DETAILS</U></h2></center><br>
             <center><span><img src="../uploads/<?php echo $data['photo'] ?>" height="100" width="100"></span></center><br>
                    <b>Name : </b><span> <?php echo $data['name'] ?></span><br>
                    <b>Email : </b><span> <?php echo $data['mobile'] ?></span><br>
                    <b>Address : </b><span> <?php echo $data['address'] ?></span> <br>
                    <b>Status : </b><span> <?php echo $status ?></span>
        </div>
        

        <div id="table" >
            <table >
                <thead>
                <tr>
                    <th><U>LOGO</U></th>
                    <th><U>NAME OF CANDIDATE</U> </th>
                    <th><U>VOTE</U></th>
                </tr>
            </thead>
                <?php
                $query = "SELECT * FROM user WHERE state = 'approved' and role = 2 ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(!$result)
                    {
                    }
                    else {
                        while($row = mysqli_fetch_array($result))
                        { 
                            ?>
                            <tbody></
                            <tr >
                                <td><img style="float: right" src="../uploads/<?php echo $row['photo'] ?> " height="80" width="80"></td>
                                <td id="nc"><strong><?php echo $row['name'] ?></strong></td>
                                <td>
                                    <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $row['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $row['id'] ?>">
                            
                            <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled " class="btn-solid-lg ab" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button class="btn-solid-lg ab" style="background-color: rgb(1, 170, 1);" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                            </form>
                                </td>
                            </tr>
                        </tbody>
                                
                                 
                       <?php         
                       }
                    }
                ?>
                </table>
                
 <!-- Footer -->
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-col first">
                    <h6>About V-vote</h6>
                    <p class="p-small">V-vote is a online voting plateform which is suitable for online elections conducted in Universities, Colleges and Schools  </p>
                </div> <!-- end of footer-col -->
                <div class="footer-col second">
                    <h6>Links</h6>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                        <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                        <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#intro">Intro</a>, <a class="page-scroll" href="#features">Features</a>, <a class="page-scroll" href="#details">Details</a></li>
                    </ul>
                </div> <!-- end of footer-col -->
                <div class="footer-col third">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <!-- <p class="p-small">We would love to hear from you <a href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p> -->
                </div> <!-- end of footer-col -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->  
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © <a href="#your-link">2021 All right reserved</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright --> 
<!-- end of copyright -->

    

                

                </body>
                </html>