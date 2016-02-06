<?php
session_start();

if(isset($_GET['code'])){
    $code = $_GET['code'];
}
else{
    $code = "";
}

if(isset($_GET['region'])){
    $region = $_GET['region'];    
}
else{
    $region = "";
}

$_SESSION['areaCode'] = $code;

$con = mysqli_connect('localfanjbxavier.mysql.db','localfanjbxavier','123Fruit','localfanjbxavier');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

/////////** Check if Location Already Exists in the Database **////////////

$checkLocation_query = "SELECT * from location where location_code = '".$code."'";

$checkLocation_result = mysqli_query($con, $checkLocation_query);
$checkLocation_rows = $checkLocation_result->num_rows;

if($checkLocation_rows > 0){

    //////** If location exists, show the items **///////
    $sql="Select i.item_name,li.january,li.february,li.march,li.aprail,li.may,li.june,li.july,li.august,li.september,li.october,li.november,li.december from local_item li inner join location l
    on li.location_id=l.location_id
    inner join items i on li.item_id = i.item_id
    where l.location_code = '".$code."'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) < 1){
        echo "<div id='participateText'>
                  <h3>We do not have data from your region !</h3>
                  <h4>Would you like to Participate???</h4>
                  <br/>
                  <a class='btn btn-success' href='participate.php'>Participate</a>
                </div>";
        //mysqli_close($con);
    }
    else{
        echo "<table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Jan</th>
                        <th class='even-item'>Feb</th>
                        <th>Mar</th>
                        <th class='even-item'>Apr</th>
                        <th>May</th>
                        <th class='even-item'>Jun</th>
                        <th>Jul</th>
                        <th class='even-item'>Aug</th>
                        <th>Sep</th>
                        <th class='even-item'>Oct</th>
                        <th>Nov</th>
                        <th class='even-item'>Dec</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td><img class='icon' src='img/Apple.png'></td>";
            echo "<td class='item-name'>" . $row['item_name'] . "</td>";
            echo ($row['january'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['february'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo ($row['march'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['aprail'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo ($row['may'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['june'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo ($row['july'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['august'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo ($row['september'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['october'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo ($row['november'] == 1 ? "<td><img src='img/tick.png'></td>" : "<td></td>");
            echo ($row['december'] == 1 ? "<td class='even-item'><img src='img/tick.png'></td>" : "<td class='even-item'></td>");
            echo "</tr>";
        }
        echo "</table>";
        echo "<div class='row' id='add-items-btn'>
                <div class='col-md-12 text-center'>
                  <a class='btn btn-success' href='participate.php'>Add More Items</a>
                </div>
              </div>";
    }

    mysqli_close($con);
}
else{
    ///////** Insert new location **//////

    $addLocation_query = "INSERT INTO location(location_name,location_code,location_country) VALUES ('".$region."','".$code."','".$code."')";
    
    mysqli_query($con,$addLocation_query);

    echo "<div id='participateText'>
              <h3>We do not have data from your region !</h3>
              <h4>Would you like to Participate?</h4>
              <br/>
              <a class='btn btn-success' href='participate.php'>Participate</a>
            </div>";

    mysqli_close($con); 
}

?>