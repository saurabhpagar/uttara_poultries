<?php
// Start PHP tag

// Include connect.php page for database connection
include('connection.php');

// Check if submit is not blank, i.e., it is clicked.
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] != '')
{
    // Check if any of the required fields are empty
    if($_REQUEST['f_name']=='' || $_REQUEST['p_name']=='' || $_REQUEST['p_number']=='' || $_REQUEST['p_capacity']=='' || $_REQUEST['v_name']=='' || $_REQUEST['a_date']=='' )
    {
        echo "Please fill in all the required fields.";
    }
    else
    {
        // Escape user inputs to prevent SQL injection
        $f_name = mysqli_real_escape_string($mysqli, $_REQUEST['f_name']);
        $p_name = mysqli_real_escape_string($mysqli, $_REQUEST['p_name']);
        $p_number = mysqli_real_escape_string($mysqli, $_REQUEST['p_number']);
        $p_capacity = mysqli_real_escape_string($mysqli, $_REQUEST['p_capacity']);
        $v_name = mysqli_real_escape_string($mysqli, $_REQUEST['v_name']);
        $a_date = mysqli_real_escape_string($mysqli, $_REQUEST['a_date']);
        
        
        // Insert data into the farmer_regi table
        $sql = "INSERT INTO farmer_regi (f_name, p_name, p_number, p_capacity, v_name, a_date) VALUES ('$f_name', '$p_name', '$p_number', '$p_capacity', '$v_name', '$a_date')";
        
        if(mysqli_query($mysqli, $sql))
        {
            echo "आपका अनुरोध जल्द ही स्वीकार किया जाएगा,";
        }
        else
        {
            echo "There is some problem in inserting the record: " . mysqli_error($mysqli);
        }
    }
}
?>
