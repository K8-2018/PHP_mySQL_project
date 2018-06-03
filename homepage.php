<?php
print_r($_GET) ;   
$id = 0;

    include 'connect.php';

    $name = '';
    $description = '';
    $image = '';

    $sql = "SELECT * FROM course";
    $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); 
    print_r(mysqli_fetch_assoc($result));

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D");  
    print_r(mysqli_fetch_assoc($result));
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style>
    .btn btn-warning{
        margin-right: 5px;
    }
    .courseImage {
        width: 25%;
        float: left;
        padding: 15px;
        border: 1px solid black;
    }
    .courseDetails {
        width: 75%;
        float: left;
        padding: 15px;
    }
</style>
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
<!--    user id should be here-->
  </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="courses col-lg-2" style="color:green;">
            <h6>Courses</h6>
            <i class="far fa-plus-square" onclick="addCourse();"></i>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <?=$row['name']; ?>
            <!--         onclick: course-->
            <?php } ?>
        </div>
        <div class="students col-lg-2" style="color:green;">
            <h6>Students</h6>
            <i class="far fa-plus-square" onclick="addStudent();"></i>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <?=$row['image']; ?>
                <?=$row['name']; ?>
            <!--         onclick: student-->
                <?=$row['phone']; ?>
            <?php } ?>
        </div>
        <div class="mainContainer col-lg-8">
            <div class="smallContainer" id="student"></div>
            <div class="smallContainer" id="addStudent"></div>
            <div class="smallContainer" id="course">
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <?=$row['name']; ?>
                        <?php } ?>  
                    </li>
                    <li class="nav-item">
                        <button type="submit" class="btn btn-warning" name="type" value="edit" action:'add_edit_course.php'>Edit</button>
                    </li>
                  </ul>
                </nav>
                <div class="container-fluid">  
                  <div class="courseImage">
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <?=$row['image']; ?>
                    <?php } ?>
                  </div>
                  <div class="courseDetails">
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                      <h1><?=$row['name']; ?></h1>
                      <p><?=$row['description']; ?></p> 
                    <?php } ?>  
                  </div>    
                </div>
            </div> 
            <div class="smallContainer" id="add_edit_course"></div>
        </div>
    </div>
</div>
<script>
    //check whether it's the right container; add functions for more divs
function addCourse() 
    {
        var x = document.getElementsByClassName("mainContainer");
        if (x.style.display === "none") 
        {
            x.style.display = "block";
        } 
        else 
        {
            x.style.display = "none";
        }
    }
    
function addStudent() 
    {
        var x = document.getElementsByClassName("mainContainer");
        if (x.style.display === "none") 
        {
            x.style.display = "block";
        } 
        else 
        {
        x.style.display = "none";
        }
    }
</script> 
</body>
</html>