<?php

$id=$_GET['id'];

echo $id;
include 'connection.php';

$sql="delete from product where id='$id'";

if(mysqli_query($con,$sql)!==null)
{
    echo "Delete success";
    
}else
{
    echo 'error Delete'.  mysql_errno();
}