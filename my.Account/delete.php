<?php require_once("database.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($db,"SELECT* from items WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="uploads/";
unlink($folder.$deleteimage);
$result=mysqli_query($db,"DELETE from items WHERE id=$id") ; 
if($result)
{
	 header("location:admin.php?action=deleted");
}
?> 