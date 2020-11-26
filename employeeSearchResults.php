<?php
/**
 * Date: November 26, 2020
 * Author: Khari Woods
 * Assignment 
 */

 $returnLink = "<a href='employeeSearch.php'>Return to Search Page</a>"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Employee Search Results</title>
</head>
<body>

<?php

//KW - establish a connection to the database.

$dbconnection = new mysqli('localhost','root','','cis2288');

if(mysqli_connect_errno()){
    echo "ERROR:  Could not connect to the database. Check you connections.";
    exit;
}



//KW if database connection is successful then pass user inputs to the database and 
//appropriate queries.
$empFirstName = '';
$empLastName = '';
$searchLimit = '';
$resultOrder = '';
$orderByLastOrFirstName = '';




if(isset($_GET['submit'])){
    //KW capture and store user inputs in a variables.
    $empFirstName = htmlspecialchars($_GET['firstName']);
    $empLastName = htmlspecialchars($_GET['lastName']);
    $searchLimit = $_GET['limitSearchResults'];
    $resultOrder = $_GET['ascOrDesc'];
    $orderByLastOrFirstName = $_GET['orderResultsBy'];
    //Assign values to variable and run
    echo "You clicked submit";
    $query = "SELECT * FROM employee WHERE FIRST_NAME LIKE '%$empFirstName%';";
}else{
    //Kw link to return user to page.
    echo $returnLink;
}
$result = $dbconnection->query($query);
$num_results = $result->num_rows;
echo "<p>Total Results: $num_results </p>";
echo "<h2>Search Results</h2>";
echo "<table>
        <tr>
            <th> id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Start Date</th>
        </tr>";
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['EMP_ID'] . "</td>";
    echo "<td>" .$row['FIRST_NAME'] . "</td>";
    echo "<td>" .$row['LAST_NAME'] . "</td>";
    echo "<td>" .$row['START_DATE'] . "</td>";
    echo "</tr>";
}
    

echo "</table>";
//KW display result in a tab
?>
    
</body>
</html>