<?php
require('top.inc.php');


$sql = "SELECT * FROM payment";
$result = $con->query($sql);
$con->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>

        body{
            background-image: url(images/s2.jpg);
            background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
        }
        section{
            background-image: url(images/s2.jpg);
            background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            margin-top: 10%;
            color: ;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: white;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1> Payment Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
            	<th class="table-primary"> Card Holder Name </th>
                <th class="table-primary"> Card Number </th>
               
                 <th class="table-danger">Expiry-Date</th>
               
                <th class="table-info">Cvv</th>
                
                  
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows= mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['user'];?></td>
                <td><?php echo $rows['cardno'];?></td>
                  <td> <?php echo $rows['expirydate'];?> </a></td>
 <td><?php echo $rows['cvv'];?></td>

                
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>
