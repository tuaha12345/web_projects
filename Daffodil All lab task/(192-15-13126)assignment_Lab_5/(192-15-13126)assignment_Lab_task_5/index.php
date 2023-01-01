<!DOCTYPE html>
<html>
<head>
<title>index php</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

          <h1 style="font-size: 30px;font-family: cursive; color:#7b74f7">PHP assignment (Insert,update ,delete and search)</h1>

     

     <!----------------------------------- Insert-------------------------------------->
     <div class="insert">
     <h1> Insert your information here:</h1>
     <form action="connect.php" method="POST" name="login" onsubmit="return valid()">
     	 Name : <input type="text" name="name"><br><br>
     	 Age : <input type="Number" name="age"><br><br>
     	 Email : <input type="email" name="email"><br><br>

     	 <input type="submit" name="submit" value="Submit" class="input"><br><br>




     </form>

     
      <script type="text/javascript">

            function valid(){
                var name=document.login.name.value;
                var age=document.login.age.value;

                if(age<33){
                    alert("must be over 33");
                }

            }
            


          </script>


</div>







 <!----------------------------------- Delete -------------------------------------->




<div class="delete">



             
     <br>

       <h1>Delete a record using name:</h1>

    <br>




  <form action="connect.php" method="POST">

     	 Name : <input type="text" name="name">
     	
          <input type="submit" name="del" value="Delete" class="input"><br><br>
     	 

    </form>


</div>

     <!----------------------------------- Update -------------------------------------->
<div class="update">

  <br>

       <h1>To Update the record insert the value here : </h1>

    <br>

  <form action="connect.php" method="POST">

     	 Previous name : <input type="text" name="old_name"><br><br>
         Previous Age : <input type="Number" name="old_age"><br><br>
         Previous Email : <input type="email" name="old_email"><br><br>
     	 

         <br><br>
         New name : <input type="text" name="new_name"><br><br>
         New Age : <input type="Number" name="new_age"><br><br>
         New Email : <input type="email" name="new_email"><br><br>

         

     	
          <input type="submit" name="up" value="Update" class="input"><br><br>
     	 

    </form>


<!--<form action="connect.php" method="POST">

         Old name : <input type="text" name="old_name"><br>
         new name : <input type="text" name="new_name">

        
          <input type="submit" name="up" value="Update">
         

    </form>
-->

</div>

     <!----------------------------------- Search -------------------------------------->

<div class="search">
    <h1>Search here by user name  : </h1>
  

    <form action="connect.php" method="POST">
     Name : <input type="text" name="name">
    <input type="submit" name="search" value="Search" class="input"><br><br>
         

    </form>








</div>




</body>
</html>