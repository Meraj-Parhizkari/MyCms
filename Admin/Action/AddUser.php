<?php

use LDAP\Result;

require_once '../../Part/dbconfig.php';
?>

<?php

if (isset($_POST["SortOrder"])) {


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    try {

        $sql = "INSERT INTO `Menu`(`Title`, `IconClass`, `SortOrder`,`Link`)
        VALUES ('$Title','$IconClass',$SortOrder,'$Link')";

        $query = $conn->prepare($sql);
        $query->execute();

        // $conn->exec($sql);

        header("Location:/mycms/Admin/Menulist");
    } catch (PDOException $e) {
        header("Location:/mycms/Admin/Menulist");
    }
}

$conn = null;
?>   