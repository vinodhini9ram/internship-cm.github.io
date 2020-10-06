<?php
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
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
        <h1>DETAILS OF THE CANDIDATES</h1>
        <table class="flat-table flat-table-1">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>

	</thead>
	<tbody>
		<tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


		</tr>
		<tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>

	</tbody>
</table>




        <br><br>
        <div class="gb">

      <table border="1"&ensp; >
        <tr>
          <td><a href="index.php">&ensp; GO BACK</a> </td>
        </tr>
      </table>
    </div>

    </body>
</html>
