<?php 
/**
 * Date: November 26, 2020
 * Author: Khari Woods
 * Assignment 6
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Employee Search</title>
</head>
<body>

<div id="employeeArea">

<form action="employeeSearchResults.php" method="GET">

<label for="firstName">First Name</label>
<input type="text" name="firstName" placeholder="Enter first name">

<br>
<label for="lastName">Last Name</label>
<input type="text" name="lastName" placeholder="Enter last name">

<!-- 
KW select box limits the amount.
Returned
 -->
 <br>
<label for="limitSearchResults">Limit Search Results</label>
<select name="limitSearchResults" id="limitSearchResults">
<option value="2">2</option>
<!-- Set default to 5 -->
<option value="5" selected="selected">5</option>
<option value="10">10</option>
<option value="15">15</option>
</select>

<br>
<label for="orderResultsBy">Order Results by</label>
<select name="orderResultsBy" id="">
<option value="employeedId">Employee Id #</option>
<option value="firstName">First Name</option>
<option value="lastName" selected="selected">Last Name</option>
<option value="startDate">Start Date</option>
</select>
<br>
<label for="ascOrDesc">Order By Ascending or Descending</label>
<select name="ascOrDesc" id="">
<option value="ascendingOrder" selected="selected">Ascending Order</option>
<option value="descendingOrder">Descending Order</option>
</select>



<br>
<input type="submit" name="submit">
</form>







</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>