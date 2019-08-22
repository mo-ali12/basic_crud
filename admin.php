<?php
include("connection.php");
require_once 'process.php';
?>
<?php
$view = "SELECT * FROM data";
$result=mysqli_query($conn,$view);
//pre_r($result);
//pre_r($result->fetch_assoc());
?>

<div class="row justifty-content-center">
<table class = "table">

  <thead>
    <tr>
      <th>Roll</th>
      <th>Course</th>
      <th colspan = "2">Action</th>
    </tr>
  </thead>
  <?php
   while($row = $result->fetch_assoc()): ?>
   <tr>
     <td><?php echo $row['roll'];?></td>
     <td><?php echo $row['course']; ?></td>
     <td></td>
   </tr>
 <?php endwhile; ?>
</table>
</div>


<?php
function pre_r($array)
{

  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
?>


<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meteor University</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="row justify-content-center">
  <form action="process.php" method="post">


      <div id="form-group">
          <h1> Sign In</h1>

            <input type="text" name="roll" placeholder="Roll#" required/>
            <input type="text" name="course" placeholder="Course" required/>
            <input type="submit" name="save" value="Save" required/>

      </div>
  </form>
  </div>
</body>
