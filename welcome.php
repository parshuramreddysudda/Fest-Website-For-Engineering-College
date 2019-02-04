<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
@import url('https://fonts.googleapis.com/css?family=Cabin');
</style>
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
  width: 20%;
  height: 30%;
  border-radius: 10%;
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

<form class="form card container" action="updated.php">
  <div class="imgcontainer card container" style="margin:auto;width:40%;">
   <img src="assets/img/download.jpeg">
      
  </div>
  
  <h2 class="card-title">Enter the Information </h2>

  <div class=" container">
    <label for="uname"><b>Id</b></label>
    <input type="text" placeholder="Enter Id Number" name="id" required>
       <label for="uname"><b>Team name</b></label>
    <input type="text" placeholder="Enter Team Name" name="Tname" required>
      <label for="uname"><b>Date</b></label>
    <input type="text" placeholder="Enter Date of Taking" name="date" required>
      <label for="uname"><b>Description</b></label>
        <input type="text" placeholder="Description about the Event " name="desc" required>
     <div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll Number</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name='name1'/></td>
                        <td><input type="text" name='roll1'/></td>
                        <td><input type="text" name='no1'/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="text" name='name2'/></td>
                        <td><input type="text" name='roll2'/></td>
                        <td><input type="text" name='no2'/></td>
                    </tr>
                    <tr>
                        <td><input type="text" name='name3'/></td>
                        <td><input type="text" name='roll3' /></td>
                        <td><input type="text" name='no3'/></td>
                    </tr>
                      <tr>
                        <td><input type="text" name='name4'/></td>
                        <td><input type="text" name='roll4' /></td>
                        <td><input type="text" name='no4'/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
      <label for="uname"><b>Paid</b></label>
    <input type="text" placeholder="Yes are No " name="paid" required>
      <label for="uname"><b>Room</b></label>
    <input type="text" placeholder="Room Number allocated " name="room" required>
      <label for="uname"><b>Allocated</b></label>
    <input type="text" placeholder="Yes or No" name="alloca" required>

    <label for="psw"><b>Type</b></label>
    <input type="text" placeholder="Technical or Non Technical" name="type" required>
        
    <button type="submit" class="btn btn-primary">Submit</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  



  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
