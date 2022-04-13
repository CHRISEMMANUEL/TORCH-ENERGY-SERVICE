<?php 
   error_reporting(E_ALL);

  

   if (isset($_POST['submit'])) {



       $server = 'localhost';
      $user = 'root';
      $password = '';
      $dbname = 'emma_work';

      $conn = new mysqli($server, $user, $password, $dbname);
      if ($conn->connect_error) {
         die("please contact your admin" . $conn->connect_error);
      }




      $mydate = $_POST['mydate'];
      $ptitle = $_POST['ptitle'];
      $client = $_POST['client'];
      $noofdays = $_POST['noofdays'];
      $noofpersonnel = $_POST['noofpersonnel'];
      $act = $_POST['act'];
      $nextplan = $_POST['nextplan'];
      $tools = $_POST['tools'];
      $observations = $_POST['observations'];


    $sql = "INSERT INTO daily_site_report(`report_date`, `title`, `client`, `nosof_days_onsite`, `nosof_personnel`, `activities`, `next_plan`, `listof_tools`, `observation`) VALUES ('$mydate','$ptitle','$client','$noofdays','$noofpersonnel','$act','$nextplan','$tools','$observations')";


      //  var_dump($sql);
      // exit();

      if ($conn->query($sql) === TRUE) {
         echo "
         <script>
            alert('data successfully submitted');
         </script>";

      }else{
      echo "
      <script>
         alert('please re-submit your details');
      </script>
      ";
   }
   
      
     
   }
?>



 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAILY SITE REPORT</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
     <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
     <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="assets/vendor/aos/aos.css" rel="stylesheet">

     <style type="text/css">
        .form-control{
         border: 2px solid #000;
        }

        body{
         background-image: url('assets/img/contract.jpg');
         background-repeat: no-repeat;
        }
     </style>
 </head>
 <body>

   <div class="container">
      
      <div class="row text-center">
         <div class="col-sm-8">
            <h3>TORCH ENERGY SERVICES</h3>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-8">
            <h5>DAILY SITE REPORT</h5>

         </div>
      </div>
   </div>
   <form action="" method="post" role="form">

      <div class="container">
      <br>
      <div class="row"> 
          <div class="form-group col-sm-4">
            <input type="date" name="mydate" class="form-control" required />
          </div>

          <div class="form-group col-sm-4">
            <input type="text" name="ptitle" class="form-control" placeholder="Project title" required />
          </div>
      </div>

      <div class="row">
         <div class="form-group col-sm-4">
            <input type="text" class="form-control" name="client" placeholder="Client" required />
         </div>

         <div class="form-group col-sm-4">
            <input type="number" class="form-control" name="noofdays" placeholder="Number of days on Site" required />
         </div>
      </div>

      <div class="row">
          <div class="form-group col-sm-4">
            <input type="number" class="form-control" name="noofpersonnel" placeholder="Number of personnel" required />
         </div>
      </div>
      <div class="row"> 
         <div class="form-group col-sm-8">
            <textarea class="form-control" name="act" rows="4" cols="8" placeholder="Activities Performed" required></textarea>
         </div>
      </div>

      <div class="row">
         <div class="form-group col-sm-4">
            <textarea class="form-control" name="nextplan" rows="2" placeholder="Next Plan" required></textarea>
          </div>

          <div class="form-group col-sm-4">
            <textarea class="form-control" name="tools" rows="2" placeholder="List of equipment/Tools" required></textarea>
          </div>
      </div>

      <div class="row"> 
         <div class="form-group col-sm-8">
            <textarea class="form-control" name="observations" rows="2" placeholder="Observation Challenges/Challenges On site" required></textarea>
         </div>
      </div>
      <div class="row"> 
         <div class="col-sm-4">
            <button type="submit" name="submit">Submit data</button>
         </div>

      </div>
   
   </div>


   
    


  </form>
 </body>
 </html>

 
