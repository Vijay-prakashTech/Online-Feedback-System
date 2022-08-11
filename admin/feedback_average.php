<form method="post">
<table class="table table-hover">
<tr>

<th> Select Faculty</th>
<td>
<select name="faculty" class="form-control">
	<?php
	$sql=mysqli_query($conn,"select * from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
<td><input name="sub" type="submit" value="Check Average" class="btn btn-success"/></td>
</tr>
</table>
</form>
<hr style="border:1px solid red"/>


<?php
extract($_POST);
if(isset($sub))
{
//Count total Votes
$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
echo "<h4>Total Student Attempts : ".$c."</h4>";



// $r1=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
// $c1=mysqli_fetch_assoc($r1);	
// echo "<h4>Total Student Attempts : ".$c1[3]."</h4>";



//question 1 start
$q=12;
$total=60;

$avarage=$q/$total;


echo $avarage;
}
?>
