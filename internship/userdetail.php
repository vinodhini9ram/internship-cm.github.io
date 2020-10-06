<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    <style>
    table, th, td {
      border: 4px solid black;
      border-collapse: collapse;
      padding: 15px;
       background-color:#e7fac3;

    }
    table.center {
      margin-left:auto;
      margin-right:auto;

    }
    </style>


</head>
    <body>
    <div class="view">
        <h2>Candidate Information</h2>
       <table class="flat-table flat-table-1" border="1">

           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


           </tr>


        </table>

        </div>
        <br>
<table class="center">
  <tr>
    <td><a href="viewuser.php">TRANSFER TO</a> </td>
  </tr>
</table>
<br>
<table class="center">
  <tr>
    <td><a href="selectuser.php">BACK </a> </td>
  </tr>
</table>

    </body>
</html>
