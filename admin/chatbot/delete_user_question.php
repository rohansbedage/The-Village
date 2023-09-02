<?php
// Include database.php for database connection
include("database.php");

$id = $_GET['id'] ?? null;

if ($id) {
    // Delete the user question from the database
    $query = "DELETE FROM user_questions WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        // Deletion successful
        echo json_encode(['success' => true]);
    } else {
        // Error during deletion
        echo json_encode(['success' => false]);
    }
} else {
    // Invalid or missing ID
    echo json_encode(['success' => false]);
}
?>
