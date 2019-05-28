<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if($_REQUEST["fn"] == "")
{
	echo("<script>alert('Please Enter First Name')</script>");
}
else
{

if(isset($_REQUEST["ln"])=="")
{
	echo("<script>alert('Please Enter Last Name')</script>");
}
else
{

//if($_REQUEST["phone"] != "" & strlen($_REQUEST["phone"]) != 10)
if(!empty($_REQUEST["phone"]) & strlen($_REQUEST["phone"]) != 10)
{
	echo("<script>alert('Invalid Phone Number')</script>");
}
else
{
	if(!empty($_REQUEST["mobile"]) & strlen($_REQUEST["mobile"]) != 11)
	{
		echo("<script>alert('Invalid Mobile Number')</script>");
	}
	else
	{
		if(!empty($_REQUEST["NID"]) & strlen($_REQUEST["NID"]) != 14)
	{
		echo("<script>alert('Invalid National ID')</script>");
	}
	else
	{
		if($_REQUEST["special"] == 0)
		{
			echo("<script>alert('Invalid Special')</script>");
		}
		else
		{
			
			
			//insert
			
			
			
			include("Conection.php");
			
			/*
			$gender=0;
			if($_REQUEST["gender"]=="f")
			{
				$gender=1;
			}
			*/
			
			
			
			//check for data exist
			
			$sqlSelect="select * from doctors where Dmobile='".$_REQUEST["mobile"]."' or NationalID='".$_REQUEST["NID"]."'";
			$resSelect=mysqli_query($con,$sqlSelect);
			
			if($row=mysqli_fetch_array($resSelect))
			{
				echo("<script>alert('Data exist')</script>");
			}
			else
			{
			
			$DOB=$_REQUEST["year"]."-".$_REQUEST["month"]."-".$_REQUEST["day"];
			
			
			
			if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
|| ($_FILES["photo"]["type"] == "image/pjpeg"))
&& ($_FILES["photo"]["size"] < 100000))//size in byte 20KB
  {
	if ($_FILES["photo"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["photo"]["error"] . "<br />";
		}
		
		
       elseif (file_exists("C:/xampp/htdocs/PHP3-1/Hospital/Upload/" . $_FILES["photo"]["name"]))
		
		
		  {
		  echo $_FILES["photo"]["name"] . " already exists. ";
		  
		  $sql="insert into         doctors(DFName,DLName,DAddress,DPhone,DMobile,DateOfBirth,DActivation,email,SID,Photo,NationalID,gender)                        
                 values('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["address"]."','".$_REQUEST["phone"]."','".$_REQUEST["mobile"]."','".$DOB."',0,'".$_REQUEST["email"]."',".$_REQUEST["special"].",'NULL','".$_REQUEST["NID"]."',".($_REQUEST["gender"]=="m"?0:1).")";
		  
		  
		   //echo($sql);
				 
				 $res=mysqli_query($con,$sql);
				 echo("<script>alert('Data Inserted')</script>");
				 mysqli_close($con);
		  
		  }
		else
		  {
			 $photo=$_FILES['photo']['name'];
							
		$mime=substr($photo,strpos($photo,"."));
							
							
		//$newImagNAme=rand(1,1000000).chr(rand(97,122)).$mime;
$newImagNAme=rand(1,1000000)."_".@$_FILES['photo']['name'];
							
			  
	  
		move_uploaded_file(@$_FILES["photo"]["tmp_name"], "C:/xampp/htdocs/PHP3-1/Hospital/Uplaod/".@$newImagNAme);
		
		
		//echo "Stored in: " . "C:/xampp/htdocs/PHP3-1/Hospital/Upload/" . $newImagNAme;
		
		
		
		
		$sql="insert into         doctors(DFName,DLName,DAddress,DPhone,DMobile,DateOfBirth,DActivation,email,SID,Photo,NationalID,gender)                        
                 values('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["address"]."','".$_REQUEST["phone"]."','".$_REQUEST["mobile"]."','".$DOB."',0,'".$_REQUEST["email"]."',".$_REQUEST["special"].",'".$newImagNAme."','".$_REQUEST["NID"]."',".($_REQUEST["gender"]=="m"?0:1).")";
				 
				 
		// echo($sql);
				 
				 $res=mysqli_query($con,$sql);
				 echo("<script>alert('Data Inserted')</script>");
				 mysqli_close($con);
		
		
		  }  
		  
		  
		 
	  
	  
  }
  else
  {
  echo "Invalid file type or size";
  }
			
			
			
			
			}
		}
		
	}
	}
	
	
	
}
	
}
	
}


?>
</body>
</html>