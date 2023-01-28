<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];
  
    echo'
    <script>
      var pass = prompt("Enter provided password")
       if(pass=="1234"){
           
       }
       else{
           alert("Wrong Password entered");
           location.href = "./";
       }
  </script>
    '
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Result Chart</title>
      <link rel="stylesheet" href="css/chart.css">
      <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/popup.css">
      <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
      <script src=""></script>
  </head>
  <body>

  

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:white;">
  <div class="container">
      
      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.html"><img src="images/logo2.png" alt="alternative"></a> 

      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="#intro">Overview</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="#features">About-Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="#details">Contact-Us</a>
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
              <a class="btn-solid-sm page-scroll" href="./routes/logout.php">Log-out</a>
          </span>
      </div> <!-- end of navbar-collapse -->
  </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->

    <div id="container" style="width: 80%; height: 80%; margin: auto; margin-top: 100px;"></div>
    <script>
        anychart.onDocumentReady(function() {

// set the data

var data = [
<?php
if(!isset($_SESSION['groups'])){
    echo 'no groups available';}
  
else{
    $groups = $_SESSION['groups'];
    for($i=0; $i<count($groups); $i++){
        ?>
    {x: '<?php echo $groups[$i]['name']?>' , value: <?php echo $groups[$i]['votes']?> },
    <?php 
    }
}
?>
];

// create the chart
var chart = anychart.pie();

// set the chart title
chart.title("Analysis of result of elections");



// add the data
chart.data(data);

// display the chart in the container
chart.container('container');
chart.draw();

// sort elements
chart.sort("desc");

});
    </script>

<table class="table table-hover my-sm-5" >
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Candidate</th>
      <th scope="col">Total Vote</th>
      <th scope="col">Declaration</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(!isset($_SESSION['groups'])){
    echo 'no groups available';}
  
else{
    $groups = $_SESSION['groups'];
    $tvotes= array();
    for($i=0; $i<count($groups); $i++)
    {
       
       $tvotes[$i]=$groups[$i]['votes'];
    }
    
    for($i=0; $i<count($groups); $i++){
        ?>
    <tr>
      <th scope="row"><?php echo $i+1 ?></th>
      <td><?php echo $groups[$i]['name']?></td>
      <td><?php echo $groups[$i]['votes']?></td>
      <td><?php if($groups[$i]['votes']==max($tvotes))
      {
          ?>
           <button type="button" class="btn btn-success" disabled>Winner!! 🥳</button> <?php } ?>  </td>
      
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
  </body>
</html>
