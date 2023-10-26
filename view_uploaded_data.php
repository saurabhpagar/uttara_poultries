<!DOCTYPE html>
<html lang="hi" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Poultry Data</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css">
  <!-- Add custom CSS -->
  <style>
    /* Main container */
    .container {
      display: flex;
    }

    /* Side menu */
    .side-menu {
      width: 200px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    /* Content area */
    .content {
      flex: 1;
      padding: 20px;
    }

    /* Table styling */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Button styling */
    .button {
      display: block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="side-menu">
      <h2>Welcome Superwiser</h2>
      <button class="menu-toggle" onclick="toggleMenu()">Go To</button>
      <ul id="menu-list">
        <li>
          <a href="farmer_dash.php" class="button">Home</a>
        </li>
        <li>
          <a href="upload_data.php" class="button">डेटा अपलोड करें</a>
        </li>
        <li>
          <a href="help.php" class="button">मदद लें</a>
        </li>
        <li>
          <a href="farmer_login.php.php" class="button">Logout</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "uttara_db";

      // Create a connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Fetch data from the database table
      $sql = "SELECT * FROM daily_data_for_div_a WHERE poultry_name='tarak plf' ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr>";
          echo "<th>Division</th>";
          echo "<th>Poultry Name</th>";
          echo "<th>Date</th>";
          echo "<th>Batch Day</th>";
          echo "<th>Remaining Chicks</th>";
          echo "<th>Dead Chicks</th>";
          echo "<th>Feed Consumed</th>";
          echo "<th>All Chicks Images</th>";
          echo "<th>Dead Chicks Images</th>";
          echo "<th>Branch Name</th>";
          echo "<th>Village Name</th>";
          echo "<th>Poultry Code</th>";

          echo "</tr>";

          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["division"] . "</td>";
              echo "<td>" . $row["poultry_name"] . "</td>";
              echo "<td>" . $row["date"] . "</td>";
              echo "<td>" . $row["batch_day"] . "</td>";
              echo "<td>" . $row["remaining_chicks"] . "</td>";
              echo "<td>" . $row["dead_chicks"] . "</td>";
              echo "<td>" . $row["feed_consumed"] . "</td>";
              echo "<td>" . $row["live_chicks_images"] . "</td>";
              echo "<td>" . $row["dead_chicks_images"] . "</td>";
              echo "<td>" . $row["branch_name"] . "</td>";
              echo "<td>" . $row["village_name"] . "</td>";
              echo "<td>" . $row["poultry_code"] . "</td>";
              echo "<td>";

              echo "</td>";
              echo "</tr>";
          }

          echo "</table>";
      } else {
          echo "No data found.";
      }

      // Close the database connection
      $conn->close();
      ?>

      <script>
          function toggleMenu() {
              var menuList = document.getElementById("menu-list");
              menuList.style.display = (menuList.style.display === "none") ? "block" : "none";
          }
      </script>
    </div>
  </div>
  <!-- Add Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
