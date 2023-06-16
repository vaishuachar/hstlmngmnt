<?php

$db = new mysqli("localhost", "root", "", "hostelmng");
if ($db->connect_errno) {
    echo "Failed to connect to database : " . $db->connect_error;
} else {
    if (isset($_GET["aid"])) {
        $qry = "UPDATE `login` SET Accstatus = 1 WHERE  Userid ='" . $_GET["aid"] . "'";
        if ($db->query($qry)) {
            header("Location: EnableStudent.php");
        } else {
            $_SESSION["msg"] = $db->error;
            header("Location: ShowMessages.php");
        }
    }
}