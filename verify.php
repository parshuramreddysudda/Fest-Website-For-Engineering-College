<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_GET['idNumber']))
{
    $id=$_GET['idNumber'];
    
$sql = "SELECT TeamName from Data WHERE Roll1=$id";
    
    
$result = $conn->query($sql);
   
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
          echo "
            <script type=\"text/javascript\">
           alert('Match Found ');
            </script>
        ";
          $_SESSION['val']='yes';
        $_SESSION['Name']=$row['TeamName'];
        break;
    }
} 
else 
    
{
    
         $_SESSION['val']='no';
     
        
}
    $sql = "SELECT TeamName from Data WHERE Roll2=$id";
    
    
$result = $conn->query($sql);
   
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        
          $_SESSION['val']='yes';
        $_SESSION['Name']=$row['TeamName'];
        break;
    }
} 
else 
    
{
        
    
         $_SESSION['val']='no';
     
        
}
    $sql = "SELECT TeamName from Data WHERE Roll3=$id";
    
    
$result = $conn->query($sql);
   
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
          echo "
            <script type=\"text/javascript\">
           alert('Match Found ');
            </script>
        ";
          $_SESSION['val']='yes';
        $_SESSION['Name']=$row['TeamName'];
        break;
    }
} 
else 
    
{
        
     
         $_SESSION['val']='no';
     
        
}
    $sql = "SELECT TeamName from Data WHERE Roll4=$id";
    
    
$result = $conn->query($sql);
   
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
           echo "
            <script type=\"text/javascript\">
           alert('Match Found ');
            </script>
        ";
          $_SESSION['val']='yes';
        $_SESSION['Name']=$row['TeamName'];
        break;
    }
} 
else 
    
{
        
    
         $_SESSION['val']='no';
     
        
}

    
}
?>
 
<!DOCTYPE html><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
<style>
    
body {font-family: 'Cabin', sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
      
  }
}
</style>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
   
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="background-image: url(assets/img/shotinraww-267315-unsplash.jpg);position:cover;">
 <nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a href="#" class="navbar-brand">Technotsav</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-2">
            <ul class="nav navbar-nav ml-auto">
                <li role="presentation" class="nav-item"><a href="allResult.php" class="nav-link active">Show all</a></li>
                <li role="presentation" class="nav-item"><a href="verify.php" class="nav-link">Verify no</a></li>
                <li class="nav-item" role="presentation"><a href="edit.php" class="nav-link">edit</a></li>
                <li role="presentation" class="nav-item"><a href="show.php" class="nav-link">Check One</a></li>
                <li role="presentation" class="nav-item"><a href="welcome.php" class="nav-link">Add One</a></li>
            </ul>
        </div>
    </div>
</nav>
    
    
    
    <div class="container">
    
    
 
    <form class="form card container" action="verify.php" >
       <label for="uname"><b>Roll Number</b></label>
    <input type="text" placeholder="Enter Id Number" name="idNumber" required>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    

<form class="form card container" action="ve.php">
  <div class="imgcontainer card container" style="margin:auto;width:40%;">
   <img src="assets/img/download.jpeg">
      
  </div>
    
    
    
    
  
  <h2 class="card-title" id="success" >Verified .No data found with this Number It can be entered </h2>
      
    <h2 id="error" >This Contact is found with Team name <b><?php echo $_SESSION['Name']; ?></b></h2>

<div class=' container'>

  </div>


</form>

</body>
</html>
<?php

$val=$_SESSION['val'];

echo $_SESSION['val'];
if(isset($_SESSION['Name']))
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