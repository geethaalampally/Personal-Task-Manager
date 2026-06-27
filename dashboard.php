<?php

include "connection.php";
include "includes/header.php";


$total=$conn->query(
"SELECT COUNT(*) c FROM todo"
)->fetch_assoc()['c'];


$done=$conn->query(
"SELECT COUNT(*) c FROM todo WHERE status=1"
)->fetch_assoc()['c'];


$pending=$total-$done;


$percentage = $total > 0 
? round(($done/$total)*100)
: 0;

?>


<div class="dashboard-container">


<h1 class="dashboard-title">
📊 Dashboard
</h1>


<p class="dashboard-sub">
Your productivity overview ✨
</p>



<div class="dashboard-cards">



<div class="stat-card total-card">


<div class="stat-icon">
📋
</div>


<h1>
<?= $total ?>
</h1>


<p>
Total Tasks
</p>


</div>




<div class="stat-card complete-card">


<div class="stat-icon">
✅
</div>


<h1>
<?= $done ?>
</h1>


<p>
Completed
</p>


</div>




<div class="stat-card pending-card">


<div class="stat-icon">
⏳
</div>


<h1>
<?= $pending ?>
</h1>


<p>
Pending
</p>


</div>



</div>





<div class="progress-card">


<h4>
Completion Progress
</h4>


<div class="progress">


<div class="progress-fill"
style="width:<?= $percentage ?>%">
</div>


</div>


<h3>
<?= $percentage ?>%
</h3>


</div>




<a href="index.php" class="back-btn">

← Back to Tasks

</a>




</div>


<?php

include "includes/footer.php";

?>