<?php
error_reporting(0); //to suppress warning
$con = mysqli_connect('localhost','esmfalcon','esmfalcon','proddb'); //db connectivity settings
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$queryString = $_GET['term']; //Value entered from addClient.php
$sql="SELECT client_id, client_name FROM client_details WHERE client_name like '".$queryString."%'"; //DB query to search for existing clients

    $namearr=array();
    $query = mysqli_query($con,$sql); 
    while($row = mysqli_fetch_array($query)) {
        $name=array();
        $name['id']=$row['client_id'];  //code logic to form array for list of customers
        $name['name']=$row['client_name'];
        array_push($namearr,$name)  ;
    }
    
    
    echo json_encode($namearr); // Converting the array to JSON which browser can understand

?>