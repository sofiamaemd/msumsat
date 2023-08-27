<?php require_once("../database.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($db,"SELECT* from news WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="news/";
unlink($folder.$deleteimage);
$result=mysqli_query($db,"DELETE from news WHERE id=$id") ; 
if($result)
{
	 header("location:news.php?action=deleted");
}
?> 