<?php
    include connect.php
        
    $sql = "SELECT * FROM course";
    $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
    $resultLen = mysqli_num_rows($result);

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
    $resultLen = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>School Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="homepage.html">School</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Administration</a>
    </li>
    
  </ul>
</nav>

<div class="container-fluid">
  <div class="smallContainer"><h1>Courses | Students</h1>
    
    <div class="courses">
<!--       <?php if($type == "getCourses") { ?> -->
<!--// when the user clicks "homepage.html" ("School" in the navbar), the following tables should be displayed:   -->
     <table>
           <h1>Courses</h1> 
<!--         The title should be clickable-->
           <tr style="background-color: silver;">
                <td>Image</td>
                <td>ID</td> 
                <td>Name</td>
           </tr>
           
           <?php while($row = mysqli_fetch_assoc($result)){ ?>
               <tr style="background-color: pink;">
                    <td><?=$row['id']; ?></td>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['image']; ?></td>
               </tr>
           <?php } ?>
     </table>
        <?php } ?>
    </div>      
    
    <div class="students">
<!--       <?php if($type == "getStudents") { ?>-->
     <table>
           <h1>Students</h1>
         <!--         The title should be clickable-->

           <tr style="background-color: silver;">
                <td>Image</td>
                <td>Name</td>
                <td>Phone</td>
           </tr>
           
           <?php while($row = mysqli_fetch_assoc($result)){ ?>
               <tr style="background-color: pink;">
                    <td><?=$row['image']; ?></td>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['phone']; ?></td>
               </tr>
           <?php } ?>
     </table>
        <?php } ?>
   </div>    
    
  </div>
  <div class="mainContainer"><h1>Main Container</h1></div>    
</div>

</body>
</html>