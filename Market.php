<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>

<head>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Market Prices</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />

  </head>

<body>

  <div class="noprint"><?php include 'navslider.php'; ?> </div>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <?php
      error_reporting(0);
      $da = date("d/m/y");
      ?>

      </head>
      <!-- body -->

      <body class="main-layout">
        <style type="text/css">
          @media print {
            .noprint {
              display: none;
            }
          }

          @media screen {}
        </style>

        <div class="jumbotron jumbotron-fluid bg-white text-center">
          <div class="container">
            <h1 class="display-4">Market Prices</h1>
            <p class="lead">Date : (<?php echo $da; ?>)</p><a class="btn btn-dark mx-8" href="javascript:window.print()" role="button">Get Print</a>
          </div>
        </div>



        <!------------------------------------Additional Changes------------------------------------------------->

        <style>
          tr {
            background-color: lightGrey;
          }

          tr:nth-child(2n) {
            background-color: grey;
          }

          thead th {
            padding-bottom: 20px;
            /* Adjust the padding as needed */
          }
        </style>

        <table class="table table-bordered table-striped table-hover bg-white">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">शेतीमाल</th>
              <th scope="col">आवक</th>
              <th scope="col">किमान</th>
              <th scope="col">कमाल</th>
            </tr>
            <!-- Add empty rows for space -->
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

          </thead>
          <tbody></tbody>
        </table>

        <script>
          fetch('https://script.google.com/macros/s/AKfycbzFnlSqF3yJHvQlc7P-8MbRVNRhqRg_otCzKltQxeZeyVRyzwqTSGBkxBGGNwItK8gl3g/exec')
            .then(res => res.json())
            .then(data => {
              let tr = data.content.reduce((prev, cur) => {
                let td = cur.map(e => `<td>${e}</td>`)
                return prev + `<tr>${td.join("")}</tr>`
              }, "\r")
              document.querySelector("table tbody").innerHTML = tr;
            });
        </script>

      </body>

</html>

</div>
</div>

<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="includes/assets/js/app.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
<script src="includes/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    //-initialize the javascript
    App.init();
    App.dashboard();
  });
</script>
</body>

</html>