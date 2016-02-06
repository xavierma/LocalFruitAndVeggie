<?php 

	session_start();

	$item_id = "";
	$response = "";

	//$location = $_SESSION['areaCode'];

	if(isset($_POST['location'])){
		$location = $_POST['location'];
	}

	if(isset($_POST['item'])){
		$item = $_POST['item'];
	}

	if(isset($_POST['item-type'])){
		$itemtype = $_POST['item-type'];
	}

	if(isset($_POST['january'])){
		$january = $_POST['january'];
	}
	else{
		$january = 0;
	}

	if(isset($_POST['february'])){
		$february = $_POST['february'];
	}
	else{
		$february = 0;
	}

	if(isset($_POST['march'])){
		$march = $_POST['march'];
	}
	else{
		$march = 0;
	}

	if(isset($_POST['aprail'])){
		$aprail = $_POST['aprail'];
	}
	else{
		$aprail = 0;
	}

	if(isset($_POST['may'])){
		$may = $_POST['may'];
	}
	else{
		$may = 0;
	}

	if(isset($_POST['june'])){
		$june = $_POST['june'];
	}
	else{
		$june = 0;
	}

	if(isset($_POST['july'])){
		$july = $_POST['july'];
	}
	else{
		$july = 0;
	}

	if(isset($_POST['august'])){
		$august = $_POST['august'];
	}
	else{
		$august = 0;
	}

	if(isset($_POST['september'])){
		$september = $_POST['september'];
	}
	else{
		$september = 0;
	}

	if(isset($_POST['october'])){
		$october = $_POST['october'];
	}
	else{
		$october = 0;
	}

	if(isset($_POST['november'])){
		$november = $_POST['november'];
	}
	else{
		$november = 0;
	}

	if(isset($_POST['december'])){
		$december = $_POST['december'];
	}
	else{
		$december = 0;
	}

//	echo $january.$february.$march;

	//////////////*Datebase Connection*/////////////

	$con = mysqli_connect('localfanjbxavier.mysql.db','localfanjbxavier','123Fruit','localfanjbxavier');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

	////////////*Check if new item already exists*///////////////
	$checkItem = "SELECT * FROM items where item_name='".$item."'";

	$item_result = mysqli_query($con, $checkItem);
	$item_rows = $item_result->num_rows;

	if($item_rows > 0){
		$item_result_array = $item_result->fetch_assoc();

		$item_id = $item_result_array['item_id'];
		//echo "Returned item_id: ".$item_id;
	}
	else{
		////////*Add New Item*/////////
		$addItem_query = "INSERT INTO items(item_name,item_type) VALUES ('".$item."','".$itemtype."')";

		mysqli_query($con, $addItem_query);

		$item_id = mysqli_insert_id($con);
		//echo "New item_id: ".$item_id;
	}


	////////*Find Location ID*///////////
	$location_result = mysqli_query($con,"Select location_id from location where location_code='".$location."'");

	$location_result_array = $location_result->fetch_assoc();

	$location_id = $location_result_array['location_id'];
	//echo "location_id: ".$location_id;

	/////////* Check if local item already exists *////////
	$checkItem_query = "SELECT * FROM local_item where location_id = '".$location_id."' and item_id = '".$item_id."'";

	$checkItem_result = mysqli_query($con,$checkItem_query);
	$checkItem_rows = $checkItem_result->num_rows;

	if($checkItem_rows > 0){
		$response = "This item already exists !";
		mysqli_close($con);
	}
	else{
		/////////*Add New Local Item*///////////
		$addLocalItem_query = "INSERT INTO local_item(location_id,item_id,january,february,march,aprail,may,june,july,august,september,october,november,december) VALUES 
		 ('".$location_id."','".$item_id."','".$january."','".$february."','".$march."','".$aprail."','".$may."','".$june."','".$july."','".$august."','".$september."','".$october."','".$november."','".$december."')";

		mysqli_query($con, $addLocalItem_query);

		$local_last = mysqli_insert_id($con);
		//echo "local_item_last: ".$local_last;

		$response = $item." has been added !";
		mysqli_close($con);
	}
 ?>

 <!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Local F & V</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">

      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/main.css">

      <!-- Google Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

      <! -- Favicon -->
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

      <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

      <script type="text/javascript">
      </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><img id="logo" src="../img/fv-white.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="first-item" href="#">Participate</a></li>
            <li><a href="#">Print</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Home Section -->
    <div id="home">
      <div class="container text-center" id="locationWrapper">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1><?php echo $response; ?></h1>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<a href="../participate.php" class="btn btn-success">Add Another Item</a>
        	</div>
        </div>
      </div>
    </div>

    <!-- Stuff -->
<!--
    <div id="stuff">
      <div class="container">
        <div class="row">
          <div id="left" class="col-sm-6 col-xs-12">
            <div id="left-content">
              <h2>Local <strong>F</strong> & <strong>V</strong> </h2>
              <p class="lead">Local fruits &amp; vegetables is an open source program to inform everybody about the natural way of eating in this specifical area.</p>
              <p>Want to contact us, you can mai us, we are always happy to read your opinion !</p>
            </div>
          </div>

          <div id="right" class="col-sm-6 col-xs-12">
            <img id="anywhere-img" src="img/fruits-and-vegetables.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
--> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>
  </body>
</html>