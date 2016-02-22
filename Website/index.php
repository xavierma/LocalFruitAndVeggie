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

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48105193-2', 'auto');
  ga('send', 'pageview');

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
          <a class="navbar-brand" href="#"><img id="logo" src="img/fv-white.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="participate.php">participate</a></li>
            <li><a href="#">print</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Home Section -->

    <div id="home">
      <div class="container">
        
      </div>
      <div id="table-wrapper" class="container">
        <div class="row text-center">
          
          <div id="locationsDropdown">
            <form>
            <select name="users" onchange="showItems(this.value)">
              <option value="">Select a Location:</option>
              <option value="PK">PK</option>
              <option value="FR">FR</option>
              <option value="EN">EN</option>
              <option value="US">US</option>
              <option value="AK">AK</option>
              <option value="DE">DE</option>
              <option value="HK">HK</option>
              <option value="RO">RO</option>
              </select>
            </form>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center" id="manualLocation">
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center"><h2 id="location" style="margin-bottom:50px;"></h2></div>
        </div>
        <div class="row">
          <div id="items-data" class="col-12">
            
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


<!--
      <div id="bottom-footer" class="row">
        <div id="footer-links">
          <ul class="pull-left">
            <li><a href="#">Local F &amp; V</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
          </ul>

          <div id="language" class="pull-right">
            <img src="" alt="">
          </div>
        </div>
      </div>
-->
    </div> <!-- /container -->        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script type="text/javascript">

      $.get("http://ipinfo.io", function (response) {

        //console.log(JSON.stringify(response, null, 4));

        $("#location").html("Location: " + response.country);

        var code = response.country;
        var region = response.region;

        var xmlhttp;

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("items-data").innerHTML = xmlhttp.responseText;
          }
        };

        xmlhttp.open("GET","serverCode/getdata.php?code="+code+"&region="+region,true);
        xmlhttp.send();

      }, "jsonp");

      

      function showItems(str){
        if(str == ""){

        }
        else{

          $("#location").html("Location: " + str);

          var xmlhttp;

          xmlhttp = new XMLHttpRequest();

          xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              document.getElementById("items-data").innerHTML = xmlhttp.responseText;
              }
            };

            xmlhttp.open("GET","serverCode/getdata.php?code="+str,true);
            xmlhttp.send();
          };

      }

  </script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
