<?php
include("database.php");


$welcomeMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    $queryCheck = "SELECT * FROM welcome_message WHERE id=1";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        $queryUpdate = "UPDATE welcome_message SET message='$message' WHERE id=1";

        if (mysqli_query($connection, $queryUpdate)) {
            header('Location: system_info.php');
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        $queryInsert = "INSERT INTO welcome_message (id, message) VALUES (1, '$message')";

        if (mysqli_query($connection, $queryInsert)) {
            header('Location: system_info.php');
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}

$query = "SELECT message FROM welcome_message WHERE id=1";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $welcomeMessage = $row['message'];
}

mysqli_close($connection);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="../includes/assets/css/app.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</head>

<body>

    <!------------------------------------------------------Head Navbar The Village-------------------------------------------------------------------------->

    <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">

            <div class="page-title"><span> Admin Panel </span></div>

            <div class="page-title"><span>Dashboard</span></div>
            <div class="be-right-navbar">
                <ul class="nav navbar-nav float-right be-user-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="../includes/profile/1.png" alt="Avatar"><span class="user-name"></span></a>
                        <div class="dropdown-menu" role="menu">
                            <div class="user-info">
                                <div class="user-name">The Village Admin</div>
                                <div class="user-position online">Available</div>
                            </div><a class="dropdown-item" href="../adminprofile.php"><span class="icon mdi mdi-face"></span>Account</a>
                            <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!--------------------------------------------------------Side Menu The Village-------------------------------------------------------------------->

            <div class="be-left-sidebar">
                <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
                    <div class="left-sidebar-spacer">
                        <div class="left-sidebar-scroll">
                            <div class="left-sidebar-content">

                                <ul class="sidebar-elements">

                                    <li class="active"><a href="../dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>
                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="divider">Important</li>

                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="parent"><a href="#"><i class="icon mdi mdi-notifications-active"></i><span>Notification</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../sendnotification.php">Send Notification</a>
                                            </li>
                                            <li><a href="../viewallnotification.php">Manage notifications</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="parent "><a href="#"><i class="icon mdi mdi-alert-triangle"></i><span> Breaking </span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../breaking.php">Breaking News</a>
                                            </li>
                                            <li><a href="../importantnotice.php">Important Notices</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="parent "><a href="#"><i class="icon mdi mdi-hospital"></i><span> Medical </span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../AddHospital.php">Add Hospital</a>
                                            </li>
                                            <li><a href="../HospitalInfo.php">HospitalInfo</a>
                                            </li>
                                            <li><a href="../AddPatient.php">Add Patient</a>
                                            </li>
                                            <li><a href="../ActivePatients.php">Active Patients</a>
                                            </li>
                                            <li><a href="../RecoveredPatients.php">Recovered Patients</a>
                                            </li>
                                            <li><a href="../DeadPatientlist.php">Dead Patients</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="divider">Village/Govermental</li>

                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Users</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../users.php">Users</a>
                                            </li>
                                            <li><a href="../Tax.php">Tax</a>
                                            </li>
                                            <li><a href="../email-inbox.php">Contact Us</a>
                                            </li>

                                            <li><a href="../userlog.php">User Access Log</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="parent"><a href=""><i class="icon mdi mdi-male-female"></i><span>Villagers</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../Addvillagers.php">Add Villager</a>
                                            </li>
                                            <li><a href="../villagers.php">All Villagers</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="parent "><a href="#"><i class="icon mdi mdi-google-maps"></i><span> Village Places </span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../addplacecat.php">Add Place category</a></li>
                                            <li><a href="../manageplacecat.php">Manage Place category </a></li>

                                            <li><a href="../place.php">Add Places</a></li>
                                            <li><a href="../manageplace.php">Manage Places</a></li>

                                        </ul>
                                    </li>

                                    <li class="parent"><a href=""><i class="icon mdi mdi-file-text"></i><span>Documentation</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../uploaddocs.php">Uplod Docs</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="parent"><a href=""><i class="icon mdi mdi-format-list-numbered"></i><span>Schemes</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../addschemes.php">Add Schemes</a> </li>
                                            <li><a href="../schemescat.php">Add Scheme Category</a> </li>
                                            <li><a href="../schemes.php">View Schemes</a> </li>

                                        </ul>
                                    </li>

                                    <li class="parent"><a href=""><i class="icon mdi mdi-local-post-office"></i><span>POST-BOX</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../uploadpostbox.php">Manage Posts Entries</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="parent"><a href=""><i class="icon mdi mdi-local-library"></i><span>JOB Portal</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="../jobdash.php">Job Dashboard</a>
                                            </li>
                                            <li><a href="../Totaljobs.php">Available Jobs</a>
                                            </li>
                                            <li><a href="../jobcatagory.php">Job Category</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="divider">Extras</li>

                                    <!------------------------------------------------------------------------------------------------------------------------------------->

                                    <li class="parent"><a href=""><i class="icon mdi mdi-odnoklassniki"></i><span>ChatBot</span></a>
                                        <ul class="sub-menu">
                                           
                                            <li class="active"><a href="system_info.php">ChatBot System info</a>
                                            </li>
                                            <li><a href="admin_questions.php">ChatBot Responces</a>
                                            </li>
                                            <li><a href="user_questions.php">Ununsered Responces</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                                </li>

                            </div>
                        </div>
                    </div>

                </div>

        </nav>

        <!---------------------------------------------  Main content start ------------------------------------------------------------------------------->

        <!-- Main content start -->

        <div class="be-content">
            <div class="page-head">
                <h2 class="page-head-title">ChatBot</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                        <li class="breadcrumb-item active">Village ChatBot System Information</li>
                        <li class="breadcrumb-item active">Edit Introduction Message</li>
                    </ol>
                </nav>
                <br><br>
                <!----------------------------------------------------------------------------------------------------------------------->


                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Introduction Message</h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="" id="response-form">


                            <div class="form-group">
                                <label for="question_field" class="control-label">Current Introduction Message</label>
                                <div class="input-group col-lg-6">

                                    <input type="text" class="form-control form-control-sm" id="new_question" name="new_question" value="<?php echo $welcomeMessage; ?>" disabled readonly>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="response_message" class="control-label">Update Introduction Message</label>
                                <textarea id="message" name="message" class="form-control" rows="4" cols="50"><?php echo $welcomeMessage; ?></textarea><br><br>

                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-flat btn-primary" type="submit" form="response-form">Save</button>


                        <a class="btn btn-flat btn-default" href="user_questions.php">Cancel</a>
                    </div>
                </div>
                <!---------------------------------------------  Main content End ------------------------------------------------------------------------------->

                <script type="text/javascript" src="../includes/assets/lib/jquery/jquery.min.js"></script>
                <script type="text/javascript" src="../includes/assets/js/highcharts.js"></script>
                <script type="text/javascript" src="../includes/assets/js/exporting.js"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $(".live-tile,.flip-list").liveTile();
                    });
                </script>

                <script src="../includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="../includes/assets/js/app.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        //-initialize the javascript
                        App.init();
                        App.dashboard();
                    });
                </script>