<?php
include './include/db.php';

?>
<!doctype html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="docsupport/style.css">
  <link rel="stylesheet" href="docsupport/prism.css">
  <link rel="stylesheet" href="chosen.css">

  <meta http-equiv="Content-Security-Policy" content="default-src &apos;self&apos;; script-src &apos;self&apos; https://ajax.googleapis.com; style-src &apos;self&apos;; img-src &apos;self&apos; data:">

</head>
<body>
  <form>
    
      
        
        <div>
         
          <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="2">
            <option value=""></option>
             <?php

                $stmt2=$db->prepare("SELECT * from exam");
          
          $stmt2->execute();
          if($stmt2->rowCount()>0){

            while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){

              echo "<option value='". $row['ename'] ."'>" .$row['ename'] ."</option>";
            }
          }

                ?>

          </select>
        </div>
      

     
  
  <script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
  </form>
  </body>
</html>
