<div><h2><a href="index.php">Home</a></h2></div>
<hr />
<form method="post" action="insert.php" enctype="multipart/form-data">
<div>
    <table>
        <tr>
            <td>First Name</td>
            <td><input type = "text" name="FirstName" size="40%" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type = "text" name="LastName" size="40%" /></td>
        </tr>
        <tr>
            <td>Nick Name</td>
            <td><input type = "text" name="NickName" size="40%"/></td>
        </tr>
        <tr>
            <td>Profile Image</td>
            <td>
                <input type = "file" name="ProfileImage" size="40%"/>
            </td>
        </tr>
        <tr>
            <td>Cell Phone</td>
            <td>
                <input type = "text" name="CellPhone" size="40%"/>
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
                <input type = "submit" name="submit" value="Insert Contact" />
            </td>
            <td><a href="index.php"><input type="button" value = "Cancel"></a></td>
        </tr>
    </table>
</div>
</form>
<?php

if (isset($_POST['submit'])){
    require_once "connection.php";

    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $nickName = $_POST['NickName'];
    $profileImage = $_FILES['ProfileImage']['name'];
    $profileImageTmp = $_FILES['ProfileImage']['tmp_name'];
    $cellPhone = $_POST['CellPhone'];
    //print_r($_POST);
    move_uploaded_file($profileImageTmp, "img/$profileImage");

    $insertContactQuery = "insert into contacts (
                                FirstName,
                                LastName,
                                NickName,
                                CellPhone,
                                Profile
                            )
                            values (
                                '$firstName',
                                '$lastName',
                                '$nickName',
                                '$cellPhone',
                                '$profileImage'
                            )";
    $insertContact = $conn->query($insertContactQuery);

    if($insertContact == TRUE){
        header("Location: index.php");
    }
}
?>
