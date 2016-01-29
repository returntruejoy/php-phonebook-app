<?php

if (isset($_GET['ID'])){
    require "connection.php";

    $id = $_GET['ID'];
    $query = "select * from contacts where ID = '$id'";
    $contactInfo = $conn->query($query);

    $contacts = array();

    while($row = mysqli_fetch_assoc($contactInfo)){
        $contacts[] = $row;
    }
    foreach ($contacts as $person);
}

?>
<html>
    <body>
        <div><h2><a href="index.php">home</a></h2></div>
        <div><h2><a href="insert.php">New Contact</a></h2></div>
        <div><h2><?php echo $person['FirstName'] .' '. $person['LastName']; ?></h2></div>
        <?php //if($person['Profile'] == TRUE){ ?>
            <div style="float: left;">
                <img src="<?php echo "./img/".$person['Profile']; ?>" style="width: 300px; height: 300px" />
            </div>
        <?php //} else{ ?>
            <?php
                if ($person['Profile'] == False){
                    echo "<p>Insert an image!</p>";
                }
            ?>
        <?php //} ?>
        <div  style="float: left;">
        <?php //var_dump($contacts); ?>
            <p>Nick Name : <?php echo $person['NickName'] ?></p>
            <p>Cell Phone : <?php echo $person['CellPhone'] ?></p>
            <p>Home Phone : <?php echo $person['HomePhone'] ?></p>
            <p>Work Phone : <?php echo $person['WorkPhone'] ?></p>
            <p>Address : <a href="http://maps.google.com/?q=<?php echo $person['Address'] ?>" target="_blank"><?php echo $person['Address'] ?></a></p>
            <p>City : <?php echo $person['City'] ?></p>
            <p>State : <?php echo $person['State'] ?></p>
            <p>ZipCode : <?php echo $person['ZipCode'] ?></p>
            <p>Bio : <?php echo $person['Notes'] ?></p>
            <p>Status : <?php //echo $person['Status'] ?></p>
        </div>
    </body>
</html>
