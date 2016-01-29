<?php
    require_once 'connection.php';

    $query = "select * from contacts";
    $result = $conn->query($query);
    $numOfRows = $result->num_rows;
?>
<html>
<body>
    <div><h2><a href="insert.php">New Contact</a></h2></div>
    <div><h2><?php echo 'Number of contact(s) is: '. $numOfRows; ?></h2></div>
    <table border=1>
        <tr>
            <th>Full Name</th>
            <th>Nick Name</th>
            <th>Profile</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) {
            //var_dump($row);
        ?>
        <tr>
            <td><a href="contact.php?ID=<?php echo $row['ID']?>"><?php echo $row['FirstName'] . ' ' . $row['LastName']; ?></a></td>
            <td><?php echo $row['NickName']; ?></td>
            <td><a href="update.php?ID= <?php echo $row['ID']?>">Edit</a></td>
            <td><a href="delete.php?ID= <?php echo $row['ID']?>" onclick="return confirm('Sure to delete?');">delete</a></td>
        </tr>
        <?php  } ?>
    </table>

</body>
</html>
