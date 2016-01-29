<?php
    if(isset($_GET['ID'])){
        require_once "connection.php";
        $id = $_GET['ID'];

        $selectContactQuery = "select * from contacts where ID = '$id'";
        $getContact = $conn->query($selectContactQuery);
        $row = mysqli_fetch_assoc($getContact);
        //print_r($row);
    }
?>
<?php
if (isset($_POST['submit'])){
    $id = $_POST['ID'];
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $nickName = $_POST['NickName'];
    $profileImage = $_FILES['ProfileImage']['name'];
    $profileImageTmp = $_FILES['ProfileImage']['tmp_name'];
    $cellPhone = $_POST['CellPhone'];
    move_uploaded_file($profileImageTmp, "img/$profileImage");

    $updateContactQuery = "update contacts set
                        FirstName = '$firstName',
                        LastName = '$lastName',
                        NickName = '$nickName',
                        CellPhone = '$cellPhone',
                        Profile = '$profileImage'
                        where ID = '$id'";

    $updateContact = $conn->query($updateContactQuery);
}
if($updateContact){
    header("Location: index.php");
}
?>
<div><h2><a href="index.php">Home</a></h2></div>
<hr />
<form method="post" action="update.php?ID=<?php echo $row['ID']?>" enctype="multipart/form-data">
<div>
    <table>
        <tr>
            <td><input type="text" name = "ID" value="<?php echo $row['ID']?>"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type = "text" name="FirstName" size="40%" value="<?php echo $row['FirstName']?>" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type = "text" name="LastName" size="40%" value="<?php echo $row['LastName']?>" /></td>
        </tr>
        <tr>
            <td>Nick Name</td>
            <td><input type = "text" name="NickName" value="<?php echo $row['NickName']?>" size="40%"/></td>
        </tr>
        <tr>
            <td>Profile Image</td>
            <td>
                <input type = "file" name="ProfileImage" value="<?php echo $row['Profile']?>" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>Cell Phone</td>
            <td>
                <input type = "text" name="CellPhone" value="<?php echo $row['CellPhone']?>" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>Home Phone</td>
            <td>
                <input type = "text" name="HomePhone" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>Work Phone</td>
            <td>
                <input type = "text" name="WorkPhone" size="40%" />
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <input type = "text" name="Address" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td>
                <input type = "text" name="City" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>State</td>
            <td>
                <input type = "text" name="State" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>
                <input type = "text" name="ZipCode" size="40%" />
            </td>
        </tr>
        <tr>
            <td>Bio</td>
            <td><textarea name="bio" cols="40" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>
                <input type = "submit" name="submit" value="Update Contact" />
            </td>
            <td><a href="index.php"><input type="button" value = "Cancel"></a></td>
        </tr>
    </table>
</div>
</form>
<?php

?>
