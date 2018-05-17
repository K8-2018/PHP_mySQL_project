<?php
print_r($_GET) ;   
$id = 0;
        include 'connect.php';

        $name = '';
        $description = '';
        $image = '';
        
        $sql = 'SELECT * FROM course';
        $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
        $resultLen = mysqli_num_rows($result);
        print_r(mysqli_fetch_assoc($result));

        echo $image.":".$name.":".$description.":";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Course Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
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
      <ul class="navbar-nav">
        <li class="nav-item">
            <p>Course A</p>        
        </li>
        <li class="nav-item">
            <button type="submit" class="btn btn-warning" name="type" value="edit" action:'add_edit_course.php'>Edit</button>
        </li>
      </ul>
    </nav>
    
    <div class="container-fluid">
      <div class="courseImage"><p>Course image will be here</p></div>
      <div class="courseDetails"><h1>Course Title</h1><p>Course description</p></div>    
    </div>

</body>
</html>