<?php
#----Connection---#

$conn= new mysqli("localhost", "root", "", "mytest");

#----Connection End---#


#----Function for Insert ---#

function addData($name, $email, $dob, $about, $capcha, $date){
	
		try{
			global $conn;
			
			$query="INSERT INTO `php_test`(name, Email, date_of_birth, about_yourself, capcha, date)VALUES (?,?,?,?,?,?)";
			$sql= $conn->prepare($query);
			$sql->bind_param('ssssss', $name, $email, $dob, $about, $capcha, $date);
			$sql->execute();
			$sql->close();
					
			
		}
		catch(Exception $e){
			echo "Error:".$e;
		}
}
#----Function for Insert  End---#



#---Implemention code---#
$succMesg=$capErr="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$yurself=$_POST['yurself'];
	$capcha=$_POST['capcha_val'];
	$code=$_SESSION['capcha'];
	$date= date("Y/m/d");
	
	if ($code === $capcha){
		
		$data= addData($name, $email, $dob, $yurself, $capcha, $date);
		
			if($data){
				
				echo "<script>swal('OOPs....', 'Something went worng!!', 'error')</script>";
				
			}else{
				echo "<script>swal('Good Job!', 'Your Record successfully inserted!','success').then(function() {window.location = './index.php';});</script>";
			}
		
	}else{
		$capErr="Capcha Field";
	}
	
}
#---Implemention code End---#
?>