<?php
require_once("tconnection.php");
$userID =$_GET ['tGetID'];
$query = " select * from timetable where user_ID = '".$userID."'" ;
$result = mysqli_query($time ,$query);

 while($row= mysqli_fetch_assoc($result))
 {
	 $userID=$row['user_ID'];
	 $trainid =$row['train_id'];
	$traintype =$row['train_type'];
	$startstation =$row['start_station'];
	$departure =$row['start_time'];
	$endstation =$row['end_station'];
	$arrival =$row['end_time'];
	
 }

?>

<!doctype html>
<html>
<head>
<title>Train timetable</title>
<link rel="stylesheet" href="timetablecss.css">
</head>
<body>
<img src="trainadminloginwall.jpg" alt="Nature" class="responsive" width="600" height="400">
<form action ="tupdate.php?ID=<?php echo $userID ?>" method ="post">
<div class = "bookingform">
	<div class ="title">
		<h2> Update train time table</h2>	
	</div>
	
	<div class ="form">
	<div class ="Trainid ">
		<div class= "innerform">
		<div class ="lable"> Train id</div>
		<input type="text" name = "trainid" placeholder ="--enter--" value="<?php echo $trainid?>">
	
		</div>
        </div>
		<div class ="Type ">
		<div class= "innerform">
		<div class ="lable">Train type</div>
		<input type ="text"  name = "type" placeholder ="--enter--" value="<?php echo $traintype?>">
		</div>
        </div>
	<div class = "Startstation">
	<div class ="innerform">
	<div class ="lable">Start station</div>
	<input type ="text"  name = "startstation" placeholder ="--enter--"  value="<?php echo $startstation?>">
	</div>
	</div>
	<div class ="Departure">
	<div class ="innerform">
	<div class ="lable">Departure </div>
	<input type ="text"  name ="departure" placeholder ="--enter--"  value="<?php echo $departure?>">
	</div>
	</div>
	<div class ="Endstation">
	<div class ="innerform">
	<div class ="lable">End station  </div>
	<input type ="text" name =" endstation" placeholder ="--enter--" value="<?php echo $endstation?>" >
	</div>
	</div>
	<div class ="Arrival">
	<div class ="innerform">
	<div class ="lable">Arrival  </div>
	<input type ="text" name ="arrival" placeholder ="--enter--" value="<?php echo $arrival?>" >
	</div>
	</div>
	<div class ="button">
	<button type ="submit" name="update" class ="btn">update</button>
</div>
	
	
	

	</div>
	</div>
	</form>
</body>
</html>