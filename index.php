<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>Insert Product
    <form action="#" method="post">
    Pname:<input type="text" name="pname"><br>
    Price:<input type="text" name="price"><br>
    Qty:<input type="text" name="qty"><br>
    <input type="submit" name="submit" value="submit">
    </form>
     
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $qty=$_POST['qty'];

        include 'connection.php';

        $sql="insert into product(pname,price,qty)values('$pname','$price','$qty')";
       
        if(mysqli_query($con,$sql)!==null)
        {
            echo "insert success";

        }else
        {
            echo 'error insert'.  mysql_errno();
        }
}
?>