<?php
print_r($_GET) ;   
$id = 0;
    if($_GET)
    {
        include 'connect.php';
        
        $id = '';
        $name = '';
        $description = '';
        $total = '';
        $image = '';
 
        if(isset($_GET['id']))
        $id = $_GET['id'];
        
        if(isset($_GET['name']))
        $name = $_GET['name'];
        
        if(isset($_GET['description']))
        $description = $_GET['description'];
        
        if(isset($_GET['total']))
        $total = $_GET['total'];
        
        if(isset($_GET['image']))
        $image = $_GET['image'];
        
        if($type == "save")
            {
                $sql = "SELECT * FROM course WHERE id= '$id'";
                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
                $resultLen = mysqli_num_rows($result);
            
            if ($resultLen==0)
                {
                    $sql ="INSERT INTO course(id,name,description,image)VALUES('$id','$name','$description','$image')";
                    if (mysqli_query($conn, $sql)) 
                        {
                            echo "Course added successfully";
                        } 
                    else 
                        {
                            echo "Error adding course: " . mysqli_error($conn);
                        }

                    mysqli_query($conn,$sql);
                }
                else echo "Sorry, this ID already exists!";
            }
        else  if($type == "save")
            {
                $sql = 'SELECT * FROM course';
                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
                $resultLen = mysqli_num_rows($result);
                print_r(mysqli_fetch_assoc($result));
            }
        else  if($type == "save")
            {
                $sql ="UPDATE course SET id = '$id', name = '$name', description = '$description', image = '$image' WHERE id = '$id'";
                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D");
                if (mysqli_query($conn, $sql)) 
                    {
                        echo "Course updated successfully";
                    } 
                else 
                    {
                        echo "Error updating course: " . mysqli_error($conn);
                    }

                mysqli_query($conn,$sql); 
            }
        else  if($type == "delete")
            {
                $sql ="DELETE FROM course WHERE id = '$id'";
                if (mysqli_query($conn, $sql)) 
                    {
                        echo "Course deleted successfully";
                    } 
                else 
                    {
                        echo "Error deleting course: " . mysqli_error($conn);
                    }

                mysqli_query($conn,$sql); 
            }
        
        echo $name.":".$description.":".$email.":".$total.":";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add/Edit Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>  
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
            <p>Add Course / Edit Course Name</p>        
        </li>
      </ul>
    </nav>
    
    <div class="container" align="center";>
        <form method="get" id="add_edit_course" action="add_edit_course.php">
            <button type="submit" class="btn btn-success" name="type" value="save" onclick="saveFormData();">Save</button>
            <button type="submit" class="btn btn-danger" name="type" value="delete" onclick="deleteFormData();">Delete</button><br><br>
            <b>Name</b><input type="text" name="name" value="" placeholder="Enter name"><br><br>
            <b>Description</b><textarea rows="4" cols="23" placeholder="Course description"></textarea><br>
        </form>
    </div>
    
<script>
function saveFormData()
    {
        var frm_element = document.getElementById('add_edit_course').action;
        document.getElementById("demo").innerHTML = frm_element;
    }
</script>       
    <p id="demo"></p>

<!-- במסך עריכה יש לטעון את כל פרטי הקורס לטופס
   <div class="course">
       <?php if($type == "save") { ?>
     <table>
           <h1>Course</h1>
           <tr style="background-color: silver;">
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
           </tr>
           <?php while($row = mysqli_fetch_assoc($result)){ ?>
               <tr style="background-color: pink;">
                    <td><?=$row['id']; ?></td>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['description']; ?></td>
               </tr>
           <?php } ?>
     </table>
        <?php } ?>
   </div>    
-->
</body>
</html>