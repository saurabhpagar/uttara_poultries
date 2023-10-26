<?php

include('connection.php');

function insertData($p_code, $division, $p_name, $t_date, $b_day, $r_chicks, $d_chicks, $feed, $live_chicks_img, $dead_chicks_img, $b_name, $v_name, $mysqli) {
    $p_code = mysqli_real_escape_string($mysqli, $p_code);
    $division = mysqli_real_escape_string($mysqli, $division);
    $p_name = mysqli_real_escape_string($mysqli, $p_name);
    $t_date = mysqli_real_escape_string($mysqli, $t_date);
    $b_day = mysqli_real_escape_string($mysqli, $b_day);
    $r_chicks = mysqli_real_escape_string($mysqli, $r_chicks);
    $d_chicks = mysqli_real_escape_string($mysqli, $d_chicks);
    $feed = mysqli_real_escape_string($mysqli, $feed);
    $b_name = mysqli_real_escape_string($mysqli, $b_name);
    $v_name = mysqli_real_escape_string($mysqli, $v_name);

    // Check if the live_chicks_img is set and a file is uploaded
    if (isset($live_chicks_img['tmp_name']) && is_uploaded_file($live_chicks_img['tmp_name'])) {
        // Retrieve the actual image data
        $live_chicks_data = file_get_contents($live_chicks_img['tmp_name']);

        // Escape special characters in the image data
        $escaped_live_chicks_data = mysqli_real_escape_string($mysqli, $live_chicks_data);
    } else {
        // Set a default or handle the absence of a file
        $escaped_live_chicks_data = "";
    }

    // Check if the dead_chicks_img is set and a file is uploaded
    if (isset($dead_chicks_img['tmp_name']) && is_uploaded_file($dead_chicks_img['tmp_name'])) {
        // Retrieve the actual image data
        $dead_chicks_data = file_get_contents($dead_chicks_img['tmp_name']);

        // Escape special characters in the image data
        $escaped_dead_chicks_data = mysqli_real_escape_string($mysqli, $dead_chicks_data);
    } else {
        // Set a default or handle the absence of a file
        $escaped_dead_chicks_data = "";
    }

    $sql = "INSERT INTO daily_data_for_div_a (poultry_code, division, poultry_name, date, batch_day, remaining_chicks, dead_chicks, feed_consumed, live_chicks_images, dead_chicks_images, branch_name, village_name) VALUES ('$p_code', '$division', '$p_name', '$t_date', '$b_day', '$r_chicks', '$d_chicks', '$feed', '$escaped_live_chicks_data', '$escaped_dead_chicks_data', '$b_name', '$v_name')";

    if(mysqli_query($mysqli, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "There is some problem in inserting the record: " . mysqli_error($mysqli);
    }
}

function displayDataByPoultryCode($p_code, $mysqli) {
    $p_code = mysqli_real_escape_string($mysqli, $p_code);

    $sql = "SELECT * FROM daily_data_for_div_a WHERE poultry_code = '$p_code'";
    $result = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // Display the data here
            echo "Poultry Code: " . $row['poultry_code'] . "<br>";
            echo "Division: " . $row['division'] . "<br>";
            echo "Poultry Name: " . $row['poultry_name'] . "<br>";
            echo "Date: " . $row['date'] . "<br>";
            echo "Batch Day: " . $row['batch_day'] . "<br>";
            echo "Remaining Chicks: " . $row['remaining_chicks'] . "<br>";
            echo "Dead Chicks: " . $row['dead_chicks'] . "<br>";
            echo "Feed Consumed: " . $row['feed_consumed'] . "<br>";
            echo "Live Chicks Images: <img src='data:image/jpeg;base64," . base64_encode($row['live_chicks_images']) . "'><br>";
            echo "Dead Chicks Images: <img src='data:image/jpeg;base64," . base64_encode($row['dead_chicks_images']) . "'><br>";
            echo "Branch Name: " . $row['branch_name'] . "<br>";
            echo "Village Name: " . $row['village_name'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No data found for the given poultry code.";
    }
}

if(isset($_POST['submit']) && $_POST['submit'] != '') {
    if($_POST['p_code']=='' || $_POST['division']=='' || $_POST['p_name']=='' || $_POST['t_date']==''  || $_POST['b_day']=='' || $_POST['r_chicks']=='' || $_POST['d_chicks']=='' || $_POST['feed']=='' || $_POST['b_name']=='' || $_POST['v_name']=='') {
        echo "Please fill all the inputs";
    } else {
        $p_code = $_POST['p_code'];
        $division = $_POST['division'];
        $p_name = $_POST['p_name'];
        $t_date = $_POST['t_date'];
        $b_day = $_POST['b_day'];
        $r_chicks = $_POST['r_chicks'];
        $d_chicks = $_POST['d_chicks'];
        $feed = $_POST['feed'];
        $b_name = $_POST['b_name'];
        $v_name = $_POST['v_name'];

        insertData($p_code, $division, $p_name, $t_date, $b_day, $r_chicks, $d_chicks, $feed, $_FILES['live_chicks_img'], $_FILES['dead_chicks_img'], $b_name, $v_name, $mysqli);
    }
}
?>
