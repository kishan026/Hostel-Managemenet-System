

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <style type="text/css">

.mmm{
  margin-right:0%;
  margin-left: 20%; 
}
.nnn{
  margin-right:20%;
  margin-left:0%; 
}



</style>

  </head>


<body>


<div class="all"> 
           <nav class="navbar fixed-top">
           <div class="header">
                 <h2 class="text_style">Hostel Managemant System</h2>
<!--                  <a href="admin.html"><button id="button" class="logbtn">Admin Login</button> </a> -->
                </div> 

              </nav>

  
              <div class="vishal">
                <h2 class="page-title">All Student Info. </h2>
               </div>
            

<br><br>


  <div class="">
     <div class="">
               
             <div class="table-responsive">
        <table class="table table-striped table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">Delete</th>
              <th scope="col">Edit</th>
              <th scope="col">First_name</th>
              <th scope="col">Middle_name</th>
              <th scope="col">Last_name</th>
              <th scope="col">Gender</th> 
              <th scope="col">Contact</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>                                                      
            </tr>
        
           <?php
           include('config/db_connect.php');
                       session_start();
             $email=$_SESSION['email'];

           $q = "SELECT * FROM user_signup WHERE email='$email'";

           $query = mysqli_query($conn,$q);

           while($res = mysqli_fetch_array($query)){
           ?>
           <tr class="text-center">
           <td> <button class="btn-danger btn"> <a href="2delete.php?email=<?php echo $res['email']; ?>" class="text-white"> Delete </a> </button> </td>
           <td> <button class="btn-primary btn"> <a href="2update.php?email=<?php echo $res['email']; ?>" class="text-white"> Update </a></button> </td>

           <td> <?php echo $res['first_name'];  ?> </td>
           <td> <?php echo $res['middle_name'];  ?> </td>
           <td> <?php echo $res['last_name'];  ?> </td>
           <td> <?php echo $res['gender'];  ?> </td>
           <td> <?php echo $res['contact'];  ?> </td>
           <td> <?php echo $res['email'];  ?> </td>
           <td> <?php echo $res['password'];  ?> </td>
           </tr>
                    
           <?php 
           }
            ?>
        </table>










     </div>
    </div>
       </div>
   </div>
<!-- <script scr="test.js"></script> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>