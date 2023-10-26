<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'uttara_db';

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $p_code = $_POST['p_code'];
    $oldPassword = $_POST['pass'];
    $newPassword = $_POST['changed_pass'];
    $confirmPassword = $_POST['confirmed_changed_pass'];

    // Validate input
    if (empty($p_code) || empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        $message = 'कृपया सभी फ़ील्ड भरें।';
    } elseif ($newPassword != $confirmPassword) {
        $message = 'नया पासवर्ड और पासवर्ड की पुष्टि मेल नहीं खाते।';
    } else {
        // Check if the provided username and old password match in the database
        $sql = "SELECT * FROM farmer_logi WHERE p_code = '$p_code' AND pass = '$oldPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Update the password
            $updateSql = "UPDATE farmer_logi SET changed_pass = '$newPassword' WHERE p_code = '$p_code'";
            if ($conn->query($updateSql) === TRUE) {
                $message = 'पासवर्ड सफलतापूर्वक अपडेट किया गया।';
            } else {
                $message = 'पासवर्ड अपडेट करने में त्रुटि: ' . $conn->error;
            }
        } else {
            $message = 'अमान्य उपयोगकर्ता नाम या पुराना पासवर्ड।';
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>पासवर्ड बदलें</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .message {
            color: #f00;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>पासवर्ड बदलें</h1>
    <?php if (isset($message)) : ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">पोल्ट्री कोड:</label>
        <input type="text" name="p_code" required><br>

        <label for="old_password">पुराना पासवर्ड:</label>
        <input type="password" name="pass" required><br>

        <label for="new_password">नया पासवर्ड:</label>
        <input type="password" name="changed_pass" required><br>

        <label for="confirm_password">पासवर्ड की पुष्टि करें:</label>
        <input type="password" name="confirmed_changed_pass" required><br>

        <input type="submit" name="submit" value="पासवर्ड बदलें">
    </form>
</body>
</html>
