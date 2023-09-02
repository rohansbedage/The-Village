<?php
include("database.php");

// Query to fetch user questions
$query = "SELECT id, question FROM user_questions";
$result = mysqli_query($connection, $query);

$userQuestions = [];

while ($row = mysqli_fetch_assoc($result)) {
    $userQuestion = [
        "id" => $row["id"],
        "question" => $row["question"],
    ];
    $userQuestions[] = $userQuestion;
}

mysqli_close($connection);

$response = ["userQuestions" => $userQuestions];
header('Content-Type: application/json');
echo json_encode($response);
?>
