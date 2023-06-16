<nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: var(--bs-secondary);">
        <div class="container"><a class="navbar-brand fs-3" href="home.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL MANAGEMENT SYSTEM</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.html" style="font-family: 'Abhaya Libre', serif;font-weight: bold;color: var(--bs-dark);">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="about%20us.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="log.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGIN</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">REGISTER</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="StudentRegistrationForm.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;">STUDENT</a><a class="dropdown-item" href="WardenRegistrationForm.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;">WARDEN</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "w") { ?>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link link-light" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp;Room</a>
                        <div class="dropdown-menu dropdown-menu-dark">
                            <a class="dropdown-item" href="#">Add Room</a>
                            <a class="dropdown-item" href="#">Room Details</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="applicantlist.php" style="font-family: 'Abhaya Libre', serif;font-weight: bold;color: var(--bs-dark);">APPLICANT LIST</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link link-light" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp;Allotment</a>
                        <div class="dropdown-menu dropdown-menu-dark">
                            <a class="dropdown-item" href="#">Allot Room</a>
                            <a class="dropdown-item" href="#">Allocated Room Details</a>
                        </div>
                    </li>
                <?php } ?>
                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "s") { ?>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link link-dark" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fa fa-male" aria-hidden="true"></i>My Profile</a>
                        <div class="dropdown-menu dropdown-menu-dark">
                            <a class="dropdown-item" href="#">First Item</a>
                            <a class="dropdown-item" href="#">Second Item</a>
                            <a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                <?php } ?>
           <form class="d-flex">
                <div class="input-group">                    
                    <input type="text" class="form-control border rounded-pill" placeholder="Search">
                    <button type="button" class="btn btn-secondary border rounded-pill">
                        <span class="form-label d-flex mb-0" for="search-field">
                            <i class="fa fa-search"></i></span>
                    </button>
                </div>
            </form>

