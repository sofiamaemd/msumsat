<?php require_once("../database.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($db,"SELECT* from featured_officials WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="featured-co/";
unlink($folder.$deleteimage);
$result=mysqli_query($db,"DELETE from featured_officials WHERE id=$id") ; 
if($result)
{
	 header("location:featured-co.php?action=deleted");
}
?> 
