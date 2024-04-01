<?php
include "function.php";

if (isset($_POST['loginEmail'], $_POST['loginPassword'])) {
    $loginEmail = sanitize_input($_POST['loginEmail']);  // Sanitize input
    $loginPassword = $_POST['loginPassword'];

    $checkUsernameSqlQuery = "SELECT * FROM users WHERE unique_email = ?";
    $stmt = $mysql->prepare($checkUsernameSqlQuery);
    $stmt->bind_param("s", $loginEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($loginPassword, $row['password'])) {
            $_SESSION['user'] = [
                'id' => $row["id"],
                'name' => $row["first_name"] . " " . $row['last_name'],
                'role' => $row["role"],
                'email' => $row["unique_email"],
                'phone' => $row["phone"],
            ];
            session_regenerate_id(true);
            header("location: " . getUrl("?login_success=true"));
        } else {
            header("location: " . getUrl("?error_login=true&error_message=Invalid credentials"));  // Generic error message
        }
    } else {
        header("location: " . getUrl("?error_login=true&error_message=Invalid email"));  // Generic error message
    }
} else {
    // Handle missing input (consider redirecting to login form with an error message)
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ... (