<?php

include "connection.php";


if(isset($_GET['done']))
{

$id=$_GET['done'];

$conn->query(
"UPDATE todo SET status=1 WHERE id=$id"
);

header("location:index.php");

}



if(isset($_GET['delete']))
{

$id=$_GET['delete'];

$conn->query(
"DELETE FROM todo WHERE id=$id"
);

header("location:index.php");

}


include "includes/header.php";


$result=$conn->query(
"SELECT * FROM todo ORDER BY id DESC"
);


?>


<a href="dashboard.php"
class="btn btn-outline-primary dashboard-btn">

📊 Dashboard

</a>


<h3 class="mt-4">
All Tasks
</h3>



<?php while($row=$result->fetch_assoc()){ ?>


<div class="task">


<div>

<h5 class="<?= $row['status']?'done':''?>">

<?= $row['name'] ?>

</h5>



<span class="status <?= $row['status']?'completed':'pending' ?>">

<?= $row['status']
?"✅ Completed"
:"⏳ Pending"
?>

</span>


</div>



<div>


<?php if(!$row['status']){ ?>

<a href="?done=<?=$row['id']?>"
class="btn complete">

Complete

</a>

<?php } ?>


<a href="?delete=<?=$row['id']?>"
class="btn delete">

Delete

</a>


</div>


</div>


<?php } ?>


<?php include "includes/footer.php"; ?>