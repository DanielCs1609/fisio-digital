<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="css/dashboard.css" rel="stylesheet">
	</head>
<body>


<?php


if(isset($_POST['submit']))
	{
			include("header.php");
			include('db.php');
			include("protect.php");
			
			$doctorname=$_POST['name'];
			$phoneno=$_POST['phone_no'];
			$speciality=$_POST['special'];
			$experience=$_POST['exp'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];

			echo $id=$_SESSION['id'];

		
		$sql = "UPDATE `logind` SET `doctorname` = '$doctorname' ,`phoneno`='$phoneno' ,`speciality`='$speciality' , `experience`='$experience' ,`age`='$age' ,`sex`='$sex' WHERE `doctorid` = $id;";
		$execute1 = mysqli_query($con,$sql);
		if($execute1)
		{
			?>
			<script>
			alert("Atualizado com sucesso");
			window.open('updateprofile.php','_SELF');
			</script>
			<?php
			
			
		}
		else
		{
			?>
			<script>
		
			alert("Digite a informação do jeito certo");
			</script>
			
			<?php
		}
		
		
		
		
		
		$sql = "SELECT * FROM `logind` WHERE `doctorid`= $id;";
		$execute1 = mysqli_query($con,$sql);
		if($execute1)
		{
			$data = mysqli_fetch_assoc($execute1);
			?><pre><?php
			print_r($data);
			?>
			</pre><?php
			$doctorname=$data['doctorname'];
			$doctorname=$data['doctorname'];
			$phoneno=$data['phoneno'];
			$speciality=$data['speciality'];
			$degre=$data['degree'];
			$experience=$data['experience'];
			$age=$data['age'];
			$fee=$data['fee'];
}

		
		
	}

?>