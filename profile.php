





<?php



include('config/db_connect.php');


  session_start();


   $email=$_SESSION['email'];
 $sql = "SELECT first_name,middle_name,last_name,gender,contact,password FROM user_signup WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
             $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
             $first_name=$final[0]['first_name'];
             $middle_name=$final[0]['middle_name'];
             $last_name=$final[0]['last_name'];
              $gender=$final[0]['gender'];
             $contact=$final[0]['contact'];
             $password=$final[0]['password'];
             //    $sql = "SELECT reg_no FROM book_hostel WHERE email='$email'";
             // $result = mysqli_query($conn, $sql);
             // $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
             // $reg_no=$final[0]['reg_no'];
             
             if(isset($_POST['submit']))

           { $contact = mysqli_real_escape_string($conn, $_POST['contact']); 
       $sql="UPDATE user_signup SET contact = '$contact' WHERE user_signup.email = '$email'";


                         if(mysqli_query($conn, $sql)){
               echo "<script type='text/javascript'>window.location = 'profile.php'; history.go(-1);</script>";
                
            } else {
                echo 'query error: '. mysqli_error($conn);
            }

        }
           //   $email='ggg@ll.nnn';
           //   $sql = "INSERT INTO user_signup(first_name,middle_name,last_name,gender,contact,email,password) VALUES('$first_name','$middle_name','$last_name','$gender','$contact','$email','$password')";
           // // print_r($final);

	// mysqli_close($conn);

    
// //     include('config/db_connect.php');


// //   session_start();


// //    $email=$_SESSION['email'];
// //                  $sql="UPDATE user_signup SET contact='7897897897' WHERE email='$email'";
// //    $sql="UPDATE user_signup SET contact='7897897897' WHERE email='$email'";
// //     $sql="UPDATE user_signup SET contact = '9999999900' WHERE 'user_signup.email' = 'qqq@qqq.qq'";
// //    $sql = "SELECT first_name,middle_name,last_name,gender,contact,password FROM user_signup WHERE email='$email'";
// //              $result = mysqli_query($conn, $sql);
// //              $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
// //              $first_name=$final[0]['first_name'];
// //              $middle_name=$final[0]['middle_name'];
// //              $last_name=$final[0]['last_name'];
// //              $gender=$final[0]['gender'];
// //              $contact=$final[0]['contact'];
// //              $password=$final[0]['password'];
// //    $sql = "SELECT reg_no FROM book_hostel WHERE email='$email'";
// //              $result = mysqli_query($conn, $sql);
// //              $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
// //              $reg_no=$final[0]['reg_no'];
// // echo $contact;
  

// // if(isset($_POST['submit']))
// //            { $contact = mysqli_real_escape_string($conn, $_POST['contact']);
// //                 echo $contact;
                
//         	 // $sql="UPDATE user_signup SET contact='7897897897' WHERE email='qqq@qqq.qq'";
//         	 // $sql = "INSERT INTO user_signup(first_name,middle_name,last_name,gender,contact,email,password) VALUES('$first_name','$middle_name','$last_name','$gender','$contact','ddd@dd.dd','$password')";
         


   
// mysqli_close($conn);

 

// include('config/db_connect.php');
// if(isset($_POST['submit']))
//            { $contact = mysqli_real_escape_string($conn, $_POST['contact']);
//                 echo $contact;
//                 echo $first_name;
//         	 // $sql="UPDATE user_signup SET contact='7897897897' WHERE user_signup.email='qqq@qqq.qq'";
//         	 $sql = "INSERT INTO user_signup(first_name,middle_name,last_name,gender,contact,email,password) VALUES('$first_name','$middle_name','$last_name','$gender','$contact','ddd@dd.dd','$password')";
// }
mysqli_close($conn);
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">
    <style type="text/css">
    	
    	  .pop1
      {           
        font-size: 15px;
      text-align: center;
        color:red;
                  
      font-family: sans-serif;
    /*  letter-spacing: 3px;*/


      }
  </style>

  </head>


<body>

    <script type="text/javascript">
      function validation()
      {
          

        


          var a = document.getElementById("contact").value;
          if(a=="")
          {
          document.getElementById("phone_x").innerHTML = "** Please Enter Your Name **";
          return false;
          }
          if(isNaN(a))
          {
          document.getElementById("phone_x").innerHTML = "** Only numbers allowed **";
          return false;
          }
          if (a.length!=10)
          {
            document.getElementById("phone_x").innerHTML = "** Enter valid numbers **";
          return false;
          }  
          if((a.charAt(0)!=9)&&(a.charAt(0)!=8)&&(a.charAt(0)!=7))
          {
            document.getElementById("phone_x").innerHTML = "** Number start from 7/8/9/ **";
          return false;
          }                   
          else
          {document.getElementById("phone_x").innerHTML = "";}








      
}




    </script>










<div class="all"> 
	         <nav class="navbar fixed-top">
			     <div class="header">
		             <h2 class="text_style">Hostel Managemant System</h2> 
		   			<!--  <a href="admin.html"><button id="button" class="logbtn">Admin Login</button></a> --> 
		       	 </div> 
             </nav>
   
			   		  <div class="vishal">
			   		  	<h2 class="page-title"> User Info </h2>
			   		    <h5 class="page-title">You can update your phone no. only</h5>
			   		  </div>

	<div class="login-box">
		 <div class="kishan">
			
			<form action="profile.php" method="POST" onsubmit="return validation()">
		    	<!-- <form> -->

<!--  id="my-form" name="myform" action="profile.php" method="POST" -->


<!-- 					<div class="form-group">
					<label class="col-sm-2 control-label">Registration No : </label>
					<div class="col-sm-8">
					<input type="text" name="reg_no" id="reg_no"  class="form-control" value="<?php echo htmlspecialchars($reg_no)?>" readonly/>
					</div>
					</div> -->

                     
					<div class="form-group">
					<label class="col-sm-2 control-label">First Name : </label>
					<div class="col-md-8">
					<input type="text" name="first_name" id="first_name"  class="form-control" value="<?php echo htmlspecialchars($first_name)?>"   readonly />



                    </div>
					</div>





                    

					<div class="form-group">
					<label class="col-sm-2 control-label">Middle Name : </label>
					<div class="col-sm-8">
					<input type="text" name="middle_name" id="middle_name"  class="form-control" value="<?php echo htmlspecialchars($middle_name)?>"  readonly>
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Last Name : </label>
					<div class="col-sm-8">
					<input type="text" name="last_name" id="last_name"  class="form-control" value="<?php echo htmlspecialchars($last_name)?>" readonly>
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Gender : </label>
					<div class="col-sm-8">
					<input type="text" name="gender" value="<?php echo htmlspecialchars($gender)?>" class="form-control" readonly>
					</div>
					</div>





					<div class="form-group">
					<label class="col-sm-2 control-label">Contact No : </label>
					<div class="form-row">
					<div class="col-md-6">
					<input type="text" name="contact" id="contact" value="<?php echo htmlspecialchars($contact)?>"  class="form-control" style="margin-left: 15px">
                    <div class="pop1" id="phone_x"></div>
					</div>
					<div class="col-md-1">
                    <input id="submit" name="submit" class="btn btn-light" type="submit" value="update" style="margin-left:40px;" />
                    <!-- <button id="submit" type="submit" name="submit" value="submit" class="btn btn-light" style="margin-left:40px;">Sign in</button> -->
                    </div>

                    </div>
					</div>







					<div class="form-group">
					<label class="col-sm-2 control-label">Email id : </label>
					<div class="col-sm-8">
					<input type="email" name="email" id="email"  class="form-control" value="<?php echo htmlspecialchars($email)?>" readonly/>
					
					</div>
					</div>


			   </form>

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