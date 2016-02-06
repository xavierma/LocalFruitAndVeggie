<?php
	session_start();

	$con = mysqli_connect('localfanjbxavier.mysql.db','localfanjbxavier','123Fruit','localfanjbxavier');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

	if(isset($_GET['location'])){
		$location = strtoupper($_GET['location']);

		$relatedItems_query = "Select item_name from items i inner join local_item li on i.item_id = li.item_id
inner join location l on li.location_id = l.location_id
where l.location_code = '".$location."'";

		$relatedItems_result = mysqli_query($con,$relatedItems_query);
		$relatedItems_rows = $relatedItems_result->num_rows;

		if($relatedItems_rows > 0){
			echo "<h3>Related Fruits/Vegetables for ".$location."</h3>";
			echo "<ul class='list-group'>";
			while ($row = mysqli_fetch_array($relatedItems_result)) {
				//echo "<li>".$row['item_name']."</li>";
				echo "<li class='list-group-item list-group-item-success'>".$row['item_name']."</li>";
			}
			echo "</ul>";
		}
		else{
			echo "<h4>No item found for ".$location." !</h4>";
		}

		mysqli_close($con);
	}
