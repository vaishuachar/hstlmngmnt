<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $currentUser = "warden";
        $db = new mysqli("localhost", "root", "", "hostelmng");
        if ($db->connect_errno) {
            echo "Failed to connect to database : " . $db->connect_error;
        } else {
            $rs = $db->query("SELECT * from login");
            ?>

            <table border="1">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Role</th>
                        <th>Activated</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = $rs->fetch_row()) {
                        if ($row[0] != $currentUser) {
                            ?>
                            <tr>
                                <td><?= $row[0] ?></td>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><a href="ProcessWardenActivation.php?aid=<?= $row[0] ?>">Activate</a></td>
                            </tr>
                            <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>   
    </body>
</html>
