<?php
session_start();
include("../dbconnection.php");
include("../checklogin.php");
check_login();
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Age = $_POST['Age'];
    $mobile = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $a = mysqli_query($con, "update user set name='$name',firstname='$firstname',lastname='$lastname',Age='$Age',mobile='$mobile',gender='$gender',address='$address', Paymentstatus='paid'  where email='" . $_SESSION['login'] . "'");
    if ($a) {
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="../includes/assets/css/app.css" type="text/css" />
</head>
<style>
    body {
        background-color: #f0f0f0;

        justify-content: center;
        align-items: center;

    }

    .message-box {
        font-size: 16px;
        /* Adjust the font size as needed */
    }

    .chat-container {
        width: 100%;
        /* Adjust this width as needed */
        background-color: #fff;
        border-radius: 5px;
        font-size: 16px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .welcome-message-box {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        /* Add any other styles you need */
    }

    .chat-header {
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        padding: 20px;
        text-align: center;
    }

    .chat-messages {
        height: 400px;
        font-size: 16px;
        /* Fixed height for the chat-messages container */
        overflow-y: scroll;
        /* Enable vertical scrolling when content exceeds the height */
        padding: 20px;
    }

    .chat-input {
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .user-avatar,
    .chatbot-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .user-message {
        display: flex;
        justify-content: flex-end;
        margin: 10px 0;
        align-self: flex-end;
    }

    .chatbot-message {
        display: flex;
        justify-content: flex-start;
        margin: 10px 0;
        align-self: flex-start;
    }

    .message-box {
        max-width: 70%;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .user-message .message-box {
        background-color: #007bff;
        color: #fff;
        text-align: right;
    }

    .chatbot-message .message-box {
        background-color: #e0e0e0;
        color: #333;
        text-align: left;
    }

    .chat-input input[type="text"] {
        flex: 1;
        padding: 10px;
        border: none;
        border-radius: 5px;
        outline: none;
    }

    .chat-input button {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-left: 10px;
        cursor: pointer;
    }

    .message-wrapper {

        display: flex;
        align-items: center;
        /* Vertically center the avatar and message content */
    }
</style>

<body class="">
    <?php include 'navslider.php'; ?>

    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <div class="main-content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="../uside.php" class="btn btn-sm btn-primary mr-4">My Account</a>
                                <a href="../cmail.php" class="btn btn-sm btn-default float-right">Message</a>
                            </div>
                        </div>

                        <!--------------------------------------------------------------------------------->

                        <?php
                        $query = mysqli_query($con, "select * from user where email='" . $_SESSION['login'] . "'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <div class="card-body pt-0 pt-md-4">

                                <div class="text-center">

                                    <!--------------------------------------------------------------------------------->

                                    <div class="jumbotron bg-white shadow-lg">
                                        <div class="container ">
                                            <h1 class="display-4">Village ChatBot</h1>
                                            <p class="font-italic">This is a most Advanced System. The Purpose of system is to Solve Your Issues Very Quickly !</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!--------------------------------------------------------------------------------->

                                    <div class="row align-items-md-stretch">

                                        <div class="col-md-6 ">
                                            <div class="text-dark  shadow border rounded-3 bg-light">
                                                <br>
                                                <a type="button" class="btn btn-primary btn-lg " href="../tax.php">Pay Your Tax</a>
                                                <br><br>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="text-dark  shadow border rounded-3 bg-light">
                                                <br>
                                                <a type="button" class="btn btn-primary  btn-lg " href="../mail.php">Complaint Mail</a>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-md-stretch mx-2">

                                <div class="col-md-6">
                                    <div class="text-dark  shadow border rounded-3 bg-light">
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a type="button" class="btn btn-primary btn-lg " href="../userdocs.php">Documentation</a>
                                        <br><br>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-dark  shadow border rounded-3 bg-light">
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a type="button" class="btn  btn-primary btn-lg " href="chat.php">Village ChatBot</a>
                                        <br><br>
                                    </div>
                                </div>
                            </div><br>

                        <?php } ?>
                    </div>
                </div>
                <!---------------------------------------------------------------------------------------->
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-light shadow">
                        <br>

                        <!---------------------------------------------------------------------------------------->

                        <!---------------------------------------------------------------------------------------->
                        <div class="container ">
                            <div class="chat-container shadow-lg">
                                <div class="chat-header Shadow-lg ">
                                    Chat with Chatbot



                                    <h5> This is the Village ChatbBot System , Here You can ask Village related Queries Only. </h5>

                                </div>
                                <div class="chat-messages" id="chat-messages">
                                    <!-- Display the welcome message here -->
                                    <div id="welcome-message" class="message-wrapper">
                                        <div class="avatar user-avatar">
                                            <img src="../images/avatar/1.png" alt="User Avatar" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">

                                        </div>
                                        <!-- Your PHP code for displaying the welcome message here -->
                                        <?php
                                        // Include database.php and fetch the welcome message as you did before
                                        include("database.php");

                                        $query = "SELECT message FROM welcome_message WHERE id=1";
                                        $result = mysqli_query($connection, $query);
                                        $row = mysqli_fetch_assoc($result);

                                        if ($row) {
                                            $welcomeMessage = $row['message'];
                                        } else {
                                            $welcomeMessage = "Welcome to ChatBot!";
                                        }

                                        mysqli_close($connection);
                                        echo '<div class="welcome-message-box">' . $welcomeMessage . '</div>';
                                        ?>
                                    </div>
                                </div>

                                <div class="chat-input">
                                    <input type="text" id="user-message" placeholder="Type your message...">
                                    <button onclick="sendMessage()">Send</button>
                                </div>
                            </div>

                            <script>
                                // Function to display a message in the chat
                                function displayMessage(sender, message) {
                                    const chatMessages = document.getElementById("chat-messages");
                                    const messageElement = document.createElement("div");
                                    messageElement.classList.add(sender === "User" ? "user-message" : "chatbot-message");

                                    // Define separate image paths for the user and chatbot
                                    const userImage = sender === "User" ? "../images/avatar/avatar1.png" : "../images/avatar/1.png";

                                    messageElement.innerHTML = `
            <img class="${sender.toLowerCase()}-avatar" src="${userImage}" alt="${sender}">
            <div class="message-box">${message}</div>`;
                                    chatMessages.appendChild(messageElement);

                                    // Scroll to the bottom of the chat
                                    chatMessages.scrollTop = chatMessages.scrollHeight;
                                }

                                // Function to send a message and receive a response
                                function sendMessage() {
                                    const userMessage = document.getElementById("user-message").value;
                                    if (userMessage.trim() !== "") {
                                        // Display the user's message
                                        displayMessage("User", userMessage);

                                        // Send the user's message to the server for processing (handle_user_question.php)
                                        fetch('handle_user_question.php', {
                                                method: 'POST',
                                                body: JSON.stringify({
                                                    question: userMessage
                                                }),
                                                headers: {
                                                    'Content-Type': 'application/json'
                                                }
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                // Display the response from the server
                                                displayMessage("Chatbot", data.response);
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });

                                        // Clear the input field
                                        document.getElementById("user-message").value = "";
                                    }
                                }

                                // Add an event listener for the Enter key
                                document.getElementById("user-message").addEventListener("keyup", function(event) {
                                    if (event.key === "Enter") {
                                        sendMessage();
                                    }
                                });
                            </script>

                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6 m-auto text-center">

                </div>
            </div>
        </footer>

</body>
<script type="text/javascript">
</script>
</body>

</html>

<script src="../includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="../includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../includes/assets/js/app.js" type="text/javascript"></script>
<script src="../includes/assets/lib/prettify/prettify.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();

        prettyPrint();
    });
</script>
</body>

</html>