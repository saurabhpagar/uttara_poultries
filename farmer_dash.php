<!DOCTYPE html>
<html lang="hi" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Farmer Dash</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css">
  <!-- Add custom CSS -->
  <style>
    /* Custom CSS for the page */
    body {
      padding-top: 60px; /* Add padding for the fixed header */
    }

    .navbar {
      background-color: orange;
    }

    .navbar-brand {
      color: #fff;
    }

    .container {
      margin-top: 30px;
    }

    .card-container {
      margin-top: 20px;
    }

    .sidebar {
      background-color: orange;
      color: #fff;
      width: 200px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 60px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      margin-bottom: 20px;
      font-size: 18px;
    }

    .content-container {
      margin-left: 220px;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
    }

    .card img {
      width: 200px;
      height: 200px;
      border-radius: 5px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .card-body {
      margin-top: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: orange;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ff8c00;
    }
    
    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
      
      .content-container {
        margin-left: 0;
        padding-top: 80px;
      }
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <span class="navbar-brand"></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <h1>उत्तरा में आपका स्वागत है, हम हमेशा आपके साथ हैं</h1>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="sidebar">
    
    <h1><a href="help.php">मदद लें</a></h1>
    <h1><a href="view_uploaded_data.php">अपना डेटा देखें</a></h1>
    <h1><a href="upload_data.php">डेटा अपलोड करें</a></h1>
    <h1><a href="https://www.abplive.com/agriculture/do-bio-security-work-in-the-poultry-farm-for-better-health-of-chickens-2157503">पोल्ट्री फार्म की सफाई कैसे करें</a></h1>
    
    
  </div>

  <div class="content-container">
    <div>
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

      // Retrieve the p_code from the URL parameter
      $p_code = $_POST['p_code'];

      // Retrieve the user's information from the database
      $sql = "SELECT poultry_name, p_code FROM farmer_logi WHERE p_code = '$p_code'";
      $result = $conn->query($sql);

      if ($result->num_rows == 1) {
          $data = $result->fetch_assoc();
          // Display poultry_name and poultry_code
          echo "<h3>Poultry Name: " . $data['poultry_name'] . "</h3>";
          echo "<h3>Poultry Code: " . $data['p_code'] . "</h3>";
      }

      // Close the database connection
      $conn->close();
      ?>
    </div>

    <h1>Welcome</h1>

    <div class="card-container">
      <div class="card">
        <img class="card-img-top" src="https://global-uploads.webflow.com/5e157548d6f7910beea4e2d6/633c06edb0cae7f3622fe57a_Data-logo-maker.jpg" alt="Card image cap">
        <div class="card-body">
          <a class="btn btn-primary" href="upload_data.php">डेटा अपलोड करें</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://dcassetcdn.com/design_img/3845649/912830/24241590/9mzj9fnaevmskhx3fn9pdb8cgc_image.jpg" alt="Card image cap">
        <div class="card-body">
          <a class="btn btn-primary" href="help.php">मदद लें</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://dcassetcdn.com/design_img/3845649/912830/24241590/9mzj9fnaevmskhx3fn9pdb8cgc_image.jpg" alt="Card image cap">
        <div class="card-body">
          <a class="btn btn-primary" href="view_uploaded_data.php">अपना डेटा देखें</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="fixed-bottom bg-orange py-2">
      <div class="container text-center text-white">
        &copy; <?php echo date("Y"); ?> My Web Page. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Add Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
