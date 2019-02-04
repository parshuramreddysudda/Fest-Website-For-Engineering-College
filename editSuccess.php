<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id     =$_GET['id'];
$TName     =$_GET['Tname'];
$date       =$_GET['date'];
$desc=$_GET['desc'];
$name1=$_GET['name1'];
$roll1=$_GET['roll1'];
$no1=$_GET['no1'];
$name2=$_GET['name2'];
$roll2=$_GET['roll2'];
$no2=$_GET['no2'];
$name3=$_GET['name3'];
$roll3=$_GET['roll3'];
$no3=$_GET['no3'];
$name4=$_GET['name4'];
$roll4=$_GET['roll4'];
$no4=$_GET['no4'];
$paid=$_GET['paid'];
$room=$_GET['room'];
$alloca=$_GET['alloca'];
$type=$_GET['type'];

$extra='Text';

$sql = "UPDATE Data set TeamName='$TName',Description='$desc',Date='$date',Name1='$name1',Name2='$name2',Name3='$name3',Name4='$name4',Number1='$no1',Number2='$no2',Number3='$no3',Number4='$no4',Paid='$paid',Room='$room',Allocated='$alloca',Type='$type',extra1='temp1',extra2='temp2',extra3='temp3' WHERE id='$id'";

if ($conn->query($sql) === TRUE) 
{
  
   
    $_SESSION['val']='yes';
    
    
} else 
{
  echo "
            <script type=\"text/javascript\">
           alert('Already Present ');
            </script>
        ";

       $_SESSION['val']='no';

}

  

$conn->close();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fest 2k19 Website</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link rel="stylesheet" href="assets/css/Material.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
    <style>
    .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

    
    </style>
</head>

<body style="font-family: 'Cabin', sans-serif;">
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a href="#" class="navbar-brand">Technotsav</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-2">
            <ul class="nav navbar-nav ml-auto">
                <li role="presentation" class="nav-item"><a href="allResult.php" class="nav-link active">Show all</a></li>
                <li role="presentation" class="nav-item"><a href="verify.php" class="nav-link">Verify no</a></li>
                <li class="nav-item" role="presentation"><a href="edit.php" class="nav-link">edit</a></li>
                <li role="presentation" class="nav-item"><a href="show.php" class="nav-link">Check One</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div>
        
        <div class="container card form" style="align-text:center" id="success" >
     
          <div class="imgcontainer card " style="margin:40px auto;width:40%;">
   <img src="assets/img/download.jpeg">
      
  </div>

   <div class="smaller"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
            <style type="text/css">
             </style>
            <path class="check" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
              c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
              c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578"/>
          </svg>
</div>
  
  

    <script  src="js/index.js"></script>
           <h1 style="text-align: center;">Submitted Sucessfully</h1>
        
        </div>
        
                <div class="container card form" style="align-text:center" id="error" >
     
          <div class="imgcontainer card " style="margin:40px auto;width:40%;">
   <img src="assets/img/download.jpeg">
      
  </div>

   <div class="smaller"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
            <style type="text/css">
             </style>
            <path class="check" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
              c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
              c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578"/>
          </svg>
</div>
  
  

    <script  src="js/index.js"></script>
                    <h1 style="text-align: center;">Error Occurred<br></h1>
                    <?php     echo "Error: " . $sql . "<br>" . mysqli_error($conn);  ?>
        
        </div>
     
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Material.js"></script>
    <script src="assets/js/Material.js"></script>
</body>

</html>


<?php

if( $_SESSION['val']=='no')
{
     echo "
            <script type=\"text/javascript\">
          document.getElementById('success').style.display='none';
            </script>
        ";
}
else
{
     echo "
            <script type=\"text/javascript\">
          document.getElementById('error').style.display='none';
            </script>
        ";
}



?>