<?php
       session_start();
		$post_id=$_GET['id'];
		$p_n= $_GET["name"];
		$db=mysqli_connect("localhost","root","","softlab");

		$sql="UPDATE product SET name ='$p_n' WHERE id =$post_id";
		$result=mysqli_query($db,$sql);
		if($result){
			
			
			echo "yes";
			
		}
			
			
		else {
			
			echo "no";
		}
		
			
			
			
		

?>