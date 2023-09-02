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
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="../includes/assets/css/app.css" type="text/css" />
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

                                    <li ><a href="../dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>
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
        <!---------------------------------------------  Main content  ------------------------------------------------------------------------------->

        <div class="be-content">
            <div class="page-head">
                <h2 class="page-head-title">ChatBot</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                        <li class="breadcrumb-item active">Village ChatBot System Information</li>
                       
                    </ol>
                </nav>
                <br><br>
                <!----------------------------------------------------------------------------------------------------------------------->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">Village ChatBot System Information
                                <div class="tools dropdown">
                                
                                   
                                </div>


                                <div class="card-body">
                                    <form action="" id="system-frm">
                                        <div id="msg" class="form-group">
                                            <?php
                                            // Include your database connection code here
                                            include("database.php");

                                            // Query to fetch the current welcome message
                                            $query = "SELECT message FROM welcome_message WHERE id=1";
                                            $result = mysqli_query($connection, $query);

                                            // Check if a row was returned
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                                $welcomeMessage = $row['message'];
                                            }

                                            // Close the database connection
                                            mysqli_close($connection);
                                            ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="control-label">Introduction Message</label>
                                            <input class="form-control"  id="staticEmail"  readonly class="form-control-plaintext"  type="text" value="     <?php
                                                                                                        if (isset($welcomeMessage)) {
                                                                                                            echo $welcomeMessage;
                                                                                                        }
                                                                                                        ?>" aria-label="Disabled input example" value="" disabled >

                                            </input>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <!-- "Update" button -->
                                                <button class="btn btn-sm btn-primary" id="updateButton" type="button">
                                                    <?php
                                                    if (isset($welcomeMessage)) {
                                                        echo 'Update Welcome Message';
                                                    } else {
                                                        echo 'Add Welcome Message';
                                                    }
                                                    ?>
                                                </button>
                                            </div>

                                            <!-- JavaScript code to handle the "Update" button -->
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const updateButton = document.getElementById("updateButton");

                                                    updateButton.addEventListener("click", function() {
                                                        // Always navigate to edit_welcome_message.php
                                                        window.location.href = "edit_welcome_message.php";
                                                    });
                                                });
                                            </script>

                                    </form>
                                </div>
                                <div class="card-footer">
                                    <!-- Additional card footer content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript code to handle the "Update" button -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const introTextarea = document.getElementById("introTextarea");
                        const updateButton = document.getElementById("updateButton");

                        updateButton.addEventListener("click", function() {
                            // Get the content of the textarea
                            const updatedMessage = introTextarea.value;

                            // Send the updated message to the server (you'll need to implement this part)
                            // For now, you can use an alert to display the updated message
                            alert("Updated Message: " + updatedMessage);
                        });
                    });
                </script>
                <!---------------------------------------------  Main content End ------------------------------------------------------------------------------->

                <!---------------------------------------------  Main content End ------------------------------------------------------------------------------->
                <script src="../includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="../includes/assets/js/app.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
                <script src="../includes/assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        //-initialize the javascript
                        App.init();
                        App.dataTables();
                    });
                </script>

</body>

</html>