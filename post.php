<?php 

include("includes/db.php");
if(isset($_POST['submit'])){


	$fname = $_POST['fname'];
	$lastname=$_POST['lname'];
	//$user_name = $_POST['u_name'];
	$dob = $_POST['dob'];
	$fatherfirst = $_POST['fafname'];
	$fatherlast = $_POST['falname'];
	$motherfirst =$_POST['mofname'];
	$motherlast =$_POST['molname'];
	$email = $_POST['uemail'];
	$type =$_POST['type'];
	$nationality= $_POST['nationality'];
	$homeaddress=$_POST['address'];
	$city = $_POST['city'];
	$country=$_POST['country'];
	$mobile = $_POST['mob'];
	$telephone=$_POST['tnumber'];
	$institution=$_POST['inst'];
	$board=$_POST['board'];
	$hscper=$_POST['per'];
	$sscinst=$_POST['sscinst'];
	$sscboard=$_POST['sscboard'];
	$sscper=$_POST['sscper'];
	$curpursuing=$_POST['curpursuing'];
	$currentinstitute=$_POST['cei'];
	$overallpercentage=$_POST['op'];
	$currentbacklogs=$_POST['cb'];
	//$file1= $_POST['file1'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	//$file1_name = $_FILES['file1']['name'];
	//$file1_type = $_FILES['file1']['type'];
	//$file1_size = $_FILES['file1']['size'];
	//$file1_tmp  = $_FILES['file1']['tmp_name'];
	

	if($image_type=="image/jpeg" or $image_type=="image/png" or
	$image_type=="image/gif"){
		
		if($image_size<=4194304){
		move_uploaded_file($image_tmp,"images/$image_name");
		}
		else{
		echo "<script>alert('Image size is larger, only 4MB size is allowed ')</script>";
		}	
		if(isset($_FILES['file'])){
			$errors= array();
			$file_name = $_FILES['file']['name'];
			$file_size =$_FILES['file']['size'];
			$file_tmp =$_FILES['file']['tmp_name'];
			$file_type=$_FILES['file']['type'];
			//$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
			$tmp = explode('.', $_FILES['file']['name']);
			$file_ext = end($tmp);
			
			$extensions= array("pdf","doc","jpeg","jpg","png");
			
			if(in_array($file_ext,$extensions)=== false){
				$errors[]="extension not allowed, please choose a PDF, DOC, JPEG, JPG or PNG file.";
			}
			
			if($file_size > 4194304){
				$errors[]='File size must be less than 4 MB';
				echo "<script>alert('file must be less than 4mb')</script>";
			}
			
			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"upload/".$file_name);
				echo "";
			}else{
				print_r($errors);
				echo "<script>alert('file type is invalid')</script>";
			}
		}
		if(isset($_FILES['file2'])){
			$errors= array();
			$file_name2 = $_FILES['file2']['name'];
			$file_size2 =$_FILES['file2']['size'];
			$file_tmp2 =$_FILES['file2']['tmp_name'];
			$file_type2=$_FILES['file2']['type'];
			//$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
			$tmp = explode('.', $_FILES['file2']['name']);
			$file_ext2 = end($tmp);
			
			$extensions= array("pdf","doc","jpeg","jpg","png");
			
			if(in_array($file_ext2,$extensions)=== false){
				$errors[]="extension not allowed, please choose a PDF, DOC, JPEG, JPG or PNG file.";
			}
			
			if($file_size2 > 4194304){
				$errors[]='File size must be less than 4 MB';
				echo "<script>alert('file must be less than 4mb')</script>";
			}
			
			if(empty($errors)==true){
				move_uploaded_file($file_tmp2,"upload/".$file_name2);
				echo "";
			}else{
				print_r($errors);
				echo "<script>alert('file type is invalid')</script>";
			}
		}
		if(isset($_FILES['file3'])){
			$errors= array();
			$file_name3 = $_FILES['file3']['name'];
			$file_size3 =$_FILES['file3']['size'];
			$file_tmp3 =$_FILES['file3']['tmp_name'];
			$file_type3=$_FILES['file3']['type'];
			//$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
			$tmp = explode('.', $_FILES['file3']['name']);
			$file_ext3 = end($tmp);
			
			$extensions= array("pdf","doc","jpeg","jpg","png");
			
			if(in_array($file_ext3,$extensions)=== false){
				$errors[]="extension not allowed, please choose a PDF, DOC, JPEG, JPG or PNG file.";
			}
			
			if($file_size3 > 10485760){
				$errors[]='File size must be less than 10 MB';
				echo "<script>alert('file must be less than 10mb')</script>";
			}
			
			if(empty($errors)==true){
				move_uploaded_file($file_tmp3,"upload/".$file_name3);
				echo "";
			}else{
				print_r($errors);
				echo "<script>alert('file type is invalid')</script>";
			}
		}
	}
	else{
	echo "<script>alert('file type is invalid')</script>";
	}
	

	
	
	//if($file1_type=="file1/jpeg" or $image_type=="file1/png" or
	//$file1_type=="file1/pdf"){
		
	//	if($file1_size<=404800000){
	//	move_uploaded_file($file1_tmp,"file1/$file1_name");
	//	}
	//	else{
	//	echo "<script>alert('File size is larger, only 4mb size is allowed ')</script>";
	//	}	
	//	
	
	//}
	//else{
	//echo "<script>alert('file type is invalid')</script>";
	//}
	
	$query= "insert into post(fname,lname,fafname,falname,mofname,molname,mnumber,tnumber,dob,email,type,nationality,address,city,country,hscinstitute,hscboard,hscpercentage,sscinstitution,sscboard,sscpercentage,currentpursuing,currentinstitute,overallpercentage,currentbacklogs,image,file1,file2,file3) 
			values('$fname','$lastname','$fatherfirst','$fatherlast','$motherfirst','$motherlast','$mobile','$telephone','$dob','$email','$type','$nationality','$homeaddress','$city','$country','$institution','$board','$hscper','$sscinst','$sscboard','$sscper','$curpursuing','$currentinstitute','$overallpercentage','$currentbacklogs','$image_name','$file_name','$file_name2','$file_name3')";
	
	if(mysqli_query($con,$query)){
	
		echo "<script>alert('Registration Done')</script>";
	
	}}
?>