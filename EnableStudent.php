<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>project1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-2.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean fs-10" style="background: var(--bs-gray-400);">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
           &nbsp;&nbsp; <div class="collapse navbar-collapse" id="navcol-1">
                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="roomdesign.php">ADD ROOM</a><a class="dropdown-item" href="roomdisplay.php">ROOM DETAILS</a></div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="applicantlist.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">APPLICANT LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="allotmentdesign.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM ALLOTMENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="hostelstudents.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL STUDENTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedbackdisplay.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">VIEWFEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <?php
        session_start();
        $currentUser = "student";
        $db = new mysqli("localhost", "root", "", "hostelmng");
        if ($db->connect_errno) {
            echo "Failed to connect to database : " . $db->connect_error;
        } else {
            $rs = $db->query("SELECT * from login");
            ?>
            <br><form action="applicantlist.php" method="POST">
    <input type="submit" name="back" class="btn btn-primary" value="GO BACK">
    </form><br>
            <table class="table table-bordered" style="background-color:white;">
        <thead class="table-dark">
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
                                <td><a href="ProcessStudentActivation.php?aid=<?= $row[0] ?>">Activate</a></td>
                            </tr>

                        
                        <!-- else ($row[0] != $currentUser) {  -->
                            <!-- <tr> -->
                                <!-- <td><?= $row[0] ?></td> -->
                                <!-- <td><?= $row[1] ?></td> -->
                                <!-- <td><?= $row[3] ?></td> -->
                                <!-- <td><?= $row[5] ?></td> -->
                                <!-- <td><a href="ProcessStudentdeactivation.php?aid=<?= $row[0] ?>">deactivate</a></td> -->
                            <!-- </tr> -->
                            <?php

                        }
                    }
                }
                ?>
            </tbody>
        </table> 
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    </body>
</html>

