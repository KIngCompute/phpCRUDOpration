
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center><h1>Product Information</h1>
        <hr>
        <a href="index.php">Insert Product</a>|
        <hr>   
    <?php 
    include 'connection.php';
    $sql="select * from product";
    $result=mysqli_query($con,$sql);
    ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>PName</th>
                <th>Price</th>
                <th>Qty</th>
                <th>opration</th>
            </tr> 
            <?php 
             while($row=$result->fetch_assoc())
                 { 
             ?>
            <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['qty']; ?></td>
                    <td>
                        <a href="http://localhost/phpCRUDOpration/update.php?id=<?php echo $row['id']; ?> ">Update</a>|
                        <a href="http://localhost/phpCRUDOpration/deleteDB.php?id=<?php echo $row['id']; ?> ">Delete</a>|

                    </td>
            </tr>
                 <?php } ?>
        </table>
        
    </center>    
    </body>
</html>
