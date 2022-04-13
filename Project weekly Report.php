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


      $contract_name = $_POST['contract_name'];
      $project_loc = $_POST['project_loc'];
      $work_done = $_POST['work_done'];
      $contracts_name = $_POST['contracts_name'];
      $sign_date_contract = $_POST['sign_date_contract'];
      $client_rep = $_POST['client_rep'];
      $sign_date_client = $_POST['sign_date_client'];
      

      

    $sql = "INSERT INTO `project_weekly_report`(`contract_name`, `project_loc`, `work_done`, `contracts_name`, `sign_date_contract`, `client_rep`, `sign_date_client`) VALUES ('$contract_name','$project_loc','$work_done','$contracts_name','$sign_date_contract','$client_rep','$sign_date_client')";


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
    <title>PROJECT WEEKLY REPORT</title>
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
     </style>
 </head>
 <body>

   <!--===============header====================-->
   <br>
   <div class="container">
      
      <div class="row text-center">
         <div class="col-sm-8">
            <h3>TORCH ENERGY SERVICES</h3>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-8">
            <h5>PROJECT WEEKLY REPORT</h5>

         </div>
      </div>
   </div>

   <!---=====================body========================-->
   <form action="" method="post" role="form">

      <div class="container">
         <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="text" name="contract_name" class="form-control" placeholder="NAME OF CONTRACT" required />
             </div>
         </div>

         <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="text" name="project_loc" class="form-control" placeholder="PROJECT Location" required />
             </div>
         </div>

      <div class="row"> 
         <div class="form-group col-sm-8">
            <textarea class="form-control" name="work_done" rows="4" placeholder="WORK DONE(WEEKLY)" required></textarea>
         </div>
      </div>

      <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="text" name="contracts_name" class="form-control" placeholder="name of contract's" required />
             </div>
         </div>

         <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="date" name="sign_date_contract" class="form-control" placeholder="sign and  date" required />
             </div>
         </div>

         <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="text" name="client_rep" class="form-control" placeholder="Clinet's representative" required />
             </div>
         </div>

         <div class="row"> 
             <div class="form-group col-sm-8">
               <input type="date" name="sign_date_client" class="form-control" placeholder="sign and  date" required />
             </div>
         </div>

      <div class="row"> 
         <div class="col-sm-4"><button type="submit" name="submit" title="Send Message">Send Message</button></div>

      </div>
   
   </div>

  </form>
 </body>
 </html>

 
