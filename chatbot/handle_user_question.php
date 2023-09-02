<?php
// Include database.php for database connection
include("database.php");

// Get the user's question from the request
$data = json_decode(file_get_contents('php://input'), true);
$userQuestion = $data['question'];

// Initialize variables to track the best match
$bestMatch = null;
$bestScore = 0;

// Query to fetch all questions from admin_questions
$query = "SELECT question, response FROM admin_questions";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $adminQuestion = $row['question'];

    // Calculate similarity score between user and admin questions
    $similarity = similar_text($userQuestion, $adminQuestion, $percent);

    // If the similarity score is higher than the best score, update the best match
    if ($percent > $bestScore) {
        $bestMatch = $row['response'];
        $bestScore = $percent;
    }
}

// If a good match is found, use its response
if ($bestMatch !== null && $bestScore > 50) {
    $response = $bestMatch;
} else {
    $response = "Sorry, we will get back to you with this question.";

    // Add the user's question to user_questions data table
    $insertQuery = "INSERT INTO user_questions (question) VALUES ('$userQuestion')";
    mysqli_query($connection, $insertQuery);
}

// Return the response to the client
header('Content-Type: application/json');
echo json_encode(['response' => $response]);
?>
