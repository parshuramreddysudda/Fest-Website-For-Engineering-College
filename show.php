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
$sql = "SELECT * FROM Data WHERE id='$id'";
$result = $conn->query($sql);
   
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
   
     while($array=mysqli_fetch_row($result)) 
    {
        for($i=0;$i<23;$i++)
        {
          $res[]=$array[$i];
        }
         
    }
    
}
    else 
    
    {
        
     echo "
            <script type=\"text/javascript\">
           alert('No Id number Found ');
            </script>
        ";
        
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
    
    
 
    <form class="form card container" action="show.php" >
       <label for="uname"><b>Id</b></label>
    <input type="text" placeholder="Enter Id Number" name="idNumber" required>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    

<form class="form card container" action="updated.php">
  <div class="imgcontainer card container" style="margin:auto;width:40%;">
   <img src="assets/img/download.jpeg">
      
  </div>
    
    
    
    
  
  <h2 class="card-title" >Show Form</h2>

<div class=' container'>
      
    <label for='uname'><b>Id</b></label>
    <input type='text' placeholder='Enter Id Number' id='id' disabled required>
       <label for='uname'><b>Team name</b></label>
    <input type='text' placeholder='Enter Id Number' id='Tname' disabled required>
      <label for='uname'><b>Date</b></label>
    <input type='text' placeholder='Enter Date of Taking' id='date' disabled required>
      <label for='uname'><b>Description</b></label>
  <input rows='20' cols='30' disabled id='desc'> <div class='card'>
    <div class='card-body'>
        <div class='table-responsive'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll Number</th>
                        <th>Phoen Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input disabled type='text' id='name1'/></td>
                        <td><input disabled type='text' id='roll1'/></td>
                        <td><input disabled type='text' id='no1'/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input disabled type='text' id='name2'/></td>
                        <td><input disabled type='text' id='roll2'/></td>
                        <td><input disabled type='text' id='no2'/></td>
                    </tr>
                    <tr>
                        <td><input disabled type='text' id='name3'/></td>
                        <td><input disabled type='text' id='roll3' /></td>
                        <td><input disabled type='text' id='no3'/></td>
                    </tr>
                      <tr>
                        <td><input disabled type='text' id='name4'/></td>
                        <td><input disabled type='text' id='roll4' /></td>
                        <td><input disabled type='text' id='no4'/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
      <label for='uname'><b>Paid</b></label>
    <input type='text' disabled placeholder='Yes are No ' id='paid' required>
      <label for='uname'><b>Room</b></label>
    <input type='text' disabled placeholder='Room Number allocated ' id='room' required>
      <label for='uname'><b>Allocated</b></label>
    <input type='text' disabled placeholder='Yes or No' id='alloca' required>

    <label for='psw'><b>Type</b></label>
    <input type='text' disabled placeholder='Technical or Non Technical' id='type' required>
        
  
    <label>
      <input type='checkbox' checked='checked' id='remember'> Remember me
    </label>
  </div>


</form>

</body>
</html>


    <?php


if(isset($res[0]))
{
      echo "
            <script type=\"text/javascript\">
           document.getElementById('id').value = '$res[0]'
          document.getElementById('Tname').value = '$res[1]' 
         document.getElementById('date').value = '$res[3]' 
          document.getElementById('name1').value = '$res[4]' 
          document.getElementById('roll1').value = '$res[12]' 
          document.getElementById('no1').value = '$res[9]'
            document.getElementById('name2').value = '$res[5]' 
          document.getElementById('roll2').value = '$res[13]' 
          document.getElementById('no2').value = '$res[9]'
            document.getElementById('name3').value = '$res[6]' 
          document.getElementById('roll3').value = '$res[14]' 
          document.getElementById('no3').value = '$res[10]'
            document.getElementById('name4').value = '$res[7]' 
          document.getElementById('roll4').value = '$res[15]' 
          document.getElementById('no4').value = '$res[11]'
          
          document.getElementById('paid').value = '$res[16]' 
          document.getElementById('room').value = '$res[17]' 
          document.getElementById('alloca').value = '$res[18]' 
          document.getElementById('type').value = '$res[19]' 
        document.getElementById('desc').value = '$res[2]'
            </script>
        ";
}
    ?>

