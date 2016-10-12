
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>Update Product
    <form action="#" method="post">
    PID:<input type="text" name="id" value="<?php echo $_GET['id'];?>" readonly=""><br>    
    Pname:<input type="text" name="pname" ><br>
    Price:<input type="text" name="price"><br>
    Qty:<input type="text" name="qty"><br>
    <input type="submit" name="submit" value="submit">
    </form>
    </center>
    </body>
</html>
<?php

if(isset($_POST['submit']))
{

            $id=$_POST['id'];
            $pname=$_POST['pname'];
            $price=$_POST['price'];
            $qty=$_POST['qty'];

            echo $pname,$price,$qty;
            include 'connection.php';
            $sql="update product set pname='$pname' ,price='$price',qty='$qty' where id='$id'";

            if(mysqli_query($con,$sql)!==null)
            {
                echo "update success";
                  header('Location: display.php');
            }else
            {
                echo 'error update'.  mysql_errno();
            }
}
            
?>