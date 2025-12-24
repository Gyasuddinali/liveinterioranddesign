<html>
 <head>

 </head>   

<?php
   
       use PHPMailer\PHPMailer\PHPMailer;
       use PHPMailer\PHPMailer\SMTP;
       use PHPMailer\PHPMailer\Exception;
         
         
	    if(isset($_POST['sendMessageButton']))
	    {   
	        session_start();
            $name=$_POST['name'];
			$mobile=$_POST['phone'];
			$email=$_POST['email'];
			$message=$_POST['message'];
            //echo $name;
			//echo $mobile;
			//echo $email;
			//echo $budget;
			//echo $project;
			//echo $message;
			$_SESSION['sname']="dhirendra";
            $servername="localhost";
                $username="live123";
                $password="w6Sq{!4@DF6#";
                $dbname="live";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql = "INSERT INTO `interior`(`name`, `mobile`, `email`,`message`) VALUES ('$name','$mobile','$email','$message')";
              $result = $conn->query($sql);
			  if($result)
			  {
		           header("Location: index.html");
			  }else
			  {
				  echo"error";
			  }

            
           

          
        }
		?>
		
		</html>