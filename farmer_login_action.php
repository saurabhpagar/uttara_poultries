<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uttara_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_code = $_POST["p_code"];
    $changed_pass = $_POST["changed_pass"];
    $poultry_name = $_POST["poultry_name"];

    // SQL query to check if the username and password exist in the table
    $sql = "SELECT * FROM farmer_logi WHERE p_code = '$p_code' AND changed_pass = '$changed_pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        echo "Login successful!";
        // Redirect to the dashboard page with the p_code parameter
        header("Location: farmer_dash.php?p_code=$p_code");
        exit();
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}

// After verifying the poultry name and code, store them in the local storage
echo '<script>
  localStorage.setItem("poultry_name", "' . $data['poultry_name'] . '");
  localStorage.setItem("p_code", "' . $data['p_code'] . '");
</script>';


// Close the database connection
$conn->close();
?>
