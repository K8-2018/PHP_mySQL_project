<?php
print_r($_GET) ;   
$id = 0;
//    if($_GET)
//    {
//        include 'connect.php';
//        
//        $id = '';
//        $name = '';
//        $phone = '';
//        $email = '';
//        $image = '';
// 
//        if(isset($_GET['id']))
//        $id = $_GET['id'];
//        
//        if(isset($_GET['name']))
//        $name = $_GET['name'];
//        
//        if(isset($_GET['phone']))
//        $phone = $_GET['phone'];
//        
//        if(isset($_GET['email']))
//        $email = $_GET['email'];
//        
//        if(isset($_GET['image']))
//        $image = $_GET['image'];
//        
//        if($type == "save")
//            {
//                $sql = "SELECT * FROM student WHERE id= '$id'";
//                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
//                $resultLen = mysqli_num_rows($result);
//            
//            if ($resultLen==0)
//                {
//                    $sql ="INSERT INTO student(id,name,phone,email,image)VALUES('$id','$name','$phone','$email','$image')";
//                    if (mysqli_query($conn, $sql)) 
//                        {
//                            echo "Student added successfully";
//                        } 
//                    else 
//                        {
//                            echo "Error adding student: " . mysqli_error($conn);
//                        }
//
//                    mysqli_query($conn,$sql);
//                }
//                else echo "Sorry, this ID already exists!";
//            }
//        else  if($type == "save")
//            {
//                $sql = 'SELECT * FROM student';
//                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D"); //or 
//                $resultLen = mysqli_num_rows($result);
//                print_r(mysqli_fetch_assoc($result));
//            }
//        else  if($type == "save")
//            {
//                $sql ="UPDATE student SET id = '$id', name = '$name', phone = '$phone', email = '$email', image = '$image' WHERE id = '$id'";
//                $result = mysqli_query($conn,$sql) or die("Unable to Connect, sorry :D");
//                if (mysqli_query($conn, $sql)) 
//                    {
//                        echo "Student updated successfully";
//                    } 
//                else 
//                    {
//                        echo "Error updating student: " . mysqli_error($conn);
//                    }
//
//                mysqli_query($conn,$sql); 
//            }
//        else  if($type == "delete")
//            {
//                $sql ="DELETE FROM student WHERE id = '$id'";
//                if (mysqli_query($conn, $sql)) 
//                    {
//                        echo "Student deleted successfully";
//                    } 
//                else 
//                    {
//                        echo "Error deleting student: " . mysqli_error($conn);
//                    }
//
//                mysqli_query($conn,$sql); 
//            }
//        
//        echo $id.":".$name.":".$phone.":".$email.":";
//    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add/Edit Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>  
   <div class="container" align="left";>
       <h1>Add Student / Edit Student Name</h1>
        <form method="get" action="#.php">
            <button type="submit" class="btn btn-success" name="type" value="save">Save</button>
            <button type="submit" class="btn btn-danger" name="type" value="delete">Delete</button><br>
            <input type="text" name="id" value="" placeholder="Enter ID"><br>
            <input type="text" name="name" value="" placeholder="Enter name"><br>
            <input type="text" name="phone" value="" placeholder="Enter phone number"><br>
            <input type="text" name="email" value="" placeholder="Enter e-mail"><br>
        </form>
   </div>
   
   <div class="studentsList">
       <?php if($type == "save") { ?>
     <table>
           <h1>Students</h1>
           <tr style="background-color: silver;">
                <td>ID</td>
                <td>Name</td>
                <td>Phone</td>
                <td>E-mail</td>
                <td>Image</td>
                <td>Courses</td>
           </tr>
<!--
           <?php while($row = mysqli_fetch_assoc($result)){ ?>
               <tr style="background-color: pink;">
                    <td><?=$row['id']; ?></td>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['phone']; ?></td>
                    <td><?=$row['email']; ?></td>
                    <td><?=$row['image']; ?></td>
                    <td><?=$row['courses']; ?></td>
               </tr>
           <?php } ?>
-->
     </table>
        <?php } ?>
   </div>    
    
</body>
</html>