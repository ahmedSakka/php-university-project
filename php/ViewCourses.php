<?php
include_once('../includes/DBconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/secound.css">
</head>


<body>
    <div id="left"></div>
    <div id="right"></div>
    <div id="top"></div>
    <div id="bottom"></div>
    <header>
        <nav>
             <div class="container">
                 <div class="contain">
                   <ul class="nav-links">
                       <li><a href="Home.php" >Personal Information</a></li>
                       <li><a href="#" class="active">Courses Information</a></li>
                       <li><a href="ViewExperience.php">Experience Information</a></li>
                       <li><a href="AddCourse.php">Add Course</a></li>
                       <li><a href="AddExperience.php">Add Experience</a></li>
                   </ul>
                   <div class="logo">
                       <img src="../images/Azhar_WHITE_LOGO.png" alt="Logo" width="80" height="80">
                   </div> 
                 </div>
             </div>
       </nav>
   </header>
    <h1>All Courses Informaiton</h1>
    <div class="courses-content">
                   
    <table  cellpadding="3" style="border-radius: 8px;" cellspacing="0">
        <tr class="c">
            <th rowspan="2" colspan="1" class="horo" id="b1">#</th>
            <th rowspan="2" colspan="2" width="200px">Course Name</th>
            <th rowspan="2" colspan="2" width="100px">Total Hours</th>
            <th colspan="2" width="200px">Date</th>
            <th rowspan="2" colspan="2" width="170">Institution</th>
            <th rowspan="2" colspan="2" width="100px">Attachment</th>
            <th rowspan="2" colspan="2" width="200px" id="b2">Notes</th>
        </tr>
        <tr class="c">
            
            <th width="100px">From</th>
            <th width="100px">To</th>
        </tr>
        
        <?php
 $result = mysqli_query($connection, "SELECT * FROM course");
 while ($row = mysqli_fetch_array($result)) { ?>
	<tr class="<?php if (isset($classname)) {
   echo $classname;
 } ?>
        
        <tr height="80px" >
            <th ><?php echo $row["id"]; ?></th>
            <td colspan="2"><?php echo $row["name"]; ?></td>
            <td colspan="2"><?php echo $row["hours"]; ?></td>
            <td><?php echo $row["datefrom"]; ?></td>
            <td><?php echo $row["dateto"]; ?></td>
            <td colspan="2"><?php echo $row["ins"]; ?></td>
            <td colspan="2"><a href="<?php echo $row["url"]; ?>" target="_blank">View</a></td>
            <td ><?php echo $row["note"]; ?></td>
        <tr    height="80px" >
        </tr>
        
    </table>
</div>

</body>

    <?php 
 
      }
 ?>
    
</html>
