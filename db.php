<?php

$conn=mysqli_connect('localhost','root','','music_db');
if(!$conn){
	echo"not established";
	
	}



?>

<?php

mysqli_select_db($conn,'music_db');//ye is waja sy kyun hamain table koi aaisy thori na dikhana ha



if(isset($_POST['btn'])){
	
	
	
	
$username=$_POST['username'];

$email=$_POST['email'];

$comment=$_POST['comment'];

$rate=$_POST['radiobtn'];


$query="insert into contact_tb (name, email, comment, rate) values('$username','$email','$comment',' $rate')";

$run=mysqli_query($conn,$query);









if($run){
		

echo"data insert";

echo"<br>";

	echo"<a href='index.php'>BACK to main page</a>";
 

	}	

else{



	}	}
    
    ?>




