<?php
  
  session_start();


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

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">

      <!-- Google Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

      <! -- Favicon -->
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">

      <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

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
          <a class="navbar-brand" href="index.php"><img id="logo" src="img/fv-white.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="first-item" href="#">participate</a></li>
            <li><a href="#">print</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Home Section -->

    <div id="home">
      <div class="container text-center" id="locationWrapper">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Add a new item?</h1>
          </div>
        </div>

        <form method="POST" action="serverCode/additem.php">

          <div class="row">
            <div id="data-row" class="col-md-12 text-center">
              <table class="table text-center">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Fruit / Vegetable name</th>
                        <th>Type</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="location-col">
                      <div class="form-group">
                        <input onkeyup="changeVal()" type="text" class="form-control" id="location" name="location" value="<?php echo $_SESSION['areaCode']; ?>">
                      </div>
                    </td>
                    <td id="fv-col">
                      <div class="form-group">
                        <input type="text" class="form-control" id="item" name="item" placeholder="Fruit/Vegetable" required>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" id="item-type" name="item-type">
                            <option value="fruit">Fruit</option>
                            <option value="vegetable">Vegetable</option>
                          </select>
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="january" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="february" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="march" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="aprail" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="may" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="june" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="july" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="august" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="september" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="october" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="november" value="1">
                      </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <input type="checkbox" name="december" value="1">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <input type="submit" id="submitBtn" class="btn btn-success" value="Add Item" >
            </div>
          </div>

        </form>

        <div class="row">
          <div class="col-md-12 text-center">
          </div>
          <div id="relatedItems" class="col-md-4 col-md-offset-4 text-center">
            
          </div>
        </div>

      </div>
    </div>


    <!-- Stuff -->

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
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script type="text/javascript">
      function changeVal(){
        var text_val = document.getElementById("location").value;
        //console.log(text_val);

        //AJAX Request to Server | To Fetch items related to input location

        var xmlhttp;

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("relatedItems").innerHTML = xmlhttp.responseText;
          }
        };

        xmlhttp.open("GET","serverCode/getRelateditems.php?location="+text_val,true);
        xmlhttp.send();

      }
    </script>

    <script src="js/main.js"></script>
  </body>
</html>
