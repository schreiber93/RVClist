<?php
include("config.php"); 
//http://www.example.com/update.php?add=$1.5,eggs&names=chuck
if(isset($_GET["add"]))
{
$add=$_GET["add"];
$name=$_GET["names"];
$InsertDB = "INSERT INTO tblshoppinglist (list,myname) VALUES ('". $add . "',
'". $name . "')";
$results = mysqli_query($db_con,$InsertDB);
header("location:index.html");
}
if(isset($_GET["delete"]))
{
$delete=$_GET["delete"];
$deleterow = "DELETE FROM shoppinglist WHERE myname ='". $delete . "')";
$results = mysqli_query($db_con,$deleterow);
header("location:index.html");
}
?>