<?php

include "connection.php";


if(isset($_POST['submit']))
{

$name=$_POST['name'];


$sql="INSERT INTO todo(name,status)
VALUES('$name',0)";


if($conn->query($sql))
{
header("Location:index.php");
}


}

?>


<!DOCTYPE html>

<html>

<head>

<title>Add Todo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>


<div class="container mt-5">


<h2>Add Todo</h2>


<form method="post">


<input 
type="text"
name="name"
class="form-control"
placeholder="Enter Task">


<br>


<button 
name="submit"
class="btn btn-primary">

Save

</button>


<a href="index.php" class="btn btn-secondary">
Back
</a>


</form>


</div>


</body>

</html>