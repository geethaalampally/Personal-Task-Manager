<?php

$conn = new mysqli(
"localhost",
"root",
"geetha",
"todo_master"
);


if($conn->connect_error)
{
    die("Database Error");
}

?>