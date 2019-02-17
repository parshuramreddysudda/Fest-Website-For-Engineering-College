<?php


// Database Connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "user";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_GET['export']))
{
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from Data'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('ID', 'TeamName', 'Description', 'Date', 'Name', 'Number','Roll','Paid','Room','Allocated','Type');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc())
    {
        
        $lineData = array($row['id'], $row['TeamName'], $row['Description'], $row['Date'], $row['Name1'], $row['Number1'], $row['Roll1'], $row['Paid'], $row['Room'], $row['Allocated'], $row['Type']);
        
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 }
}

?>