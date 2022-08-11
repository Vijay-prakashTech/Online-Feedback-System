<?php
include('dbconfig.php');
?>
<div class="list">
        <?php
        echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
        echo "<tr>";
        echo "<th>S.No</th>";
	    echo "<th>Name</th>";
        echo "/<tr>";
        $i=1;
        $que=mysqli_query($conn,"select * from faculty");
        while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$row['Name']."</td>";
        echo "/<tr>";
        
    }
    
        ?>
    </div>