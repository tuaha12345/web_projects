
 <?php

include_once 'db.php';

/////////////////////////////////// insert  /////////////////////////////////////////////////////

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $age=$_POST['age'];
     $email = $_POST['email'];
     
     $sql = "INSERT INTO lab_5 (name,age,email)
     VALUES ('$name','$age','$email')";
     if (mysqli_query($conn, $sql)) {
        echo "<h1>New record has been added successfully !</h1>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}



///////////////////////////////////////// Delete///////////////////////////

if(isset($_POST['del']))
{    
     $name = $_POST['name'];
   
     
     $sql = "DELETE FROM lab_5 WHERE name='$name'";
     if (mysqli_query($conn, $sql)) {
        echo "<h1>Deleted is successfully !</h1>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

/////////////////////////////////// update  /////////////////////////////////////////////////////
/*
if(isset($_POST['up']))
{    
     $old_name = $_POST['old_name'];
     $new_name = $_POST['new_name'];
     $old_age = $_POST['old_age'];
     $new_age = $_POST['new_age'];
     $old_email = $_POST['old_email'];
     $new_email = $_POST['new_email'];
     
     
     $sql = "UPDATE lab_5 SET name='$new_name'  WHERE name='$old_name' ";
      $sql = "UPDATE lab_5 SET age='$new_age'  WHERE age='$old_age' ";
      $sql = "UPDATE lab_5 SET email='$new_email'  WHERE age='$old_email' ";
     if (mysqli_query($conn, $sql)) {
        echo "<h1>Updated  successfully !</h1>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
*/

if(isset($_POST['up']))
{    
     $old_name = $_POST['old_name'];
     $new_name = $_POST['new_name'];
     $old_age = $_POST['old_age'];
     $new_age = $_POST['new_age'];

     $old_email = $_POST['old_email'];
     $new_email = $_POST['new_email'];

   
     
     $sql = "UPDATE lab_5 SET name='$new_name'  WHERE name='$old_name' ";
     $sql = "UPDATE lab_5 SET age='$new_age'  WHERE age='$old_age' ";
     $sql = "UPDATE lab_5 SET email='$new_email'  WHERE email='$old_email' ";
     if (mysqli_query($conn, $sql)) {
        echo "Updated  successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}



/////////////////////////////////// search  /////////////////////////////////////////////////////
//SELECT * FROM `padu` WHERE name="ggg";

if(isset($_POST['search']))
{    
     $name = $_POST['name'];
   
     
   
      $sql = "SELECT * FROM lab_5 WHERE name='$name'";
      $res=$conn->query($sql);
      $row=$res->fetch_assoc();
      $id=$row['id'];
      $name=$row['name'];
      $age=$row['age'];
      $email=$row['email'];
      
     if (mysqli_query($conn, $sql)) {
        //echo "<h1>  Thanks for searching</h1>";
      echo "<h1>Your id no is: $id</h1>"."<h1>Name: $name</h1>"."<h1>Age: $age</h1>"."<h1>Email: $email</h1>";
      
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


?>
    
 
