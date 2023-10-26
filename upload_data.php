<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>पंजीकरण फॉर्म</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 500px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    .form {
      display: grid;
      grid-gap: 20px;
    }

    .input-box {
      display: grid;
      grid-template-columns: 1fr;
      grid-gap: 5px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .sidebar {
      background-color: orange;
      padding: 20px;
      width: 200px;
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      display: block;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      text-decoration: none;
      font-weight: bold;
    }

    .sidebar a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-orange">
      <span class="navbar-brand mb-0 h1">Menu</span>
    </nav>
  </header>

  <div class="sidebar">
    <ul>
      <li><a href="#" class="button">Home</a></li>
      <li><a href="#" class="button">About</a></li>
      <li><a href="#" class="button">Services</a></li>
      <li><a href="#" class="button">Contact</a></li>
    </ul>
  </div>

  <section class="container">
    <header>डेटा अपलोड करें</header>
    <form action="upload_data_action.php" class="form" method="POST">
      <div class="input-box">
        <label>मुर्गे कोड</label>
        <input type="number" placeholder="मुर्गे कोड दर्ज करें" name="p_code" required />
      </div>

      <div class="input-box">
        <label>विभाजन</label>
        <input type="text" placeholder="विभाजन दर्ज करें" name="division" required />
      </div>

      <div class="input-box">
        <label>फार्म का नाम</label>
        <input type="text" placeholder="मुर्गे का नाम दर्ज करें" name="p_name" required />
      </div>

      <div class="input-box">
        <label>तारीख</label>
        <input type="date" placeholder="तारीख दर्ज करें" name="t_date" required />
      </div>

      <div class="input-box">
        <label>बैच दिन संख्या</label>
        <input type="number" placeholder="बैच दिन संख्या दर्ज करें" name="b_day" required />
      </div>

      <div class="input-box">
        <label>शेष चूजे</label>
        <input type="number" placeholder="शेष चूजे दर्ज करें" name="r_chicks" required />
      </div>

      <div class="input-box">
        <label>मरे हुए चूजे</label>
        <input type="number" placeholder="मरे हुए चूजे दर्ज करें" name="d_chicks" required />
      </div>

      <div class="input-box">
        <label>बैग में खाद खपत</label>
        <input type="number" placeholder="बैग में खाद खपत दर्ज करें" name="feed" required />
      </div>

      <div class="input-box">
        <label>लाइव चूजों को अपलोड करने के लिए छवि का चयन करें:</label>
        <input type="file" name="live_chicks_img" id="fileToUpload">
      </div>

      <div class="input-box">
        <label>मरे हुए चूजों को अपलोड करने के लिए छवि का चयन करें:</label>
        <input type="file" name="dead_chicks_img" id="fileToUpload">
      </div>

      <div class="input-box">
        <label>शाखा का नाम</label>
        <input type="text" placeholder="शाखा का नाम दर्ज करें" name="b_name" required />
      </div>

      <div class="input-box">
        <label>गांव का नाम</label>
        <input type="text" placeholder="गांव का नाम दर्ज करें" name="v_name" required />
      </div>

      <input type="submit" name="submit" value="Submit">
    </form>
  </section>

  <footer class="fixed-bottom">
    &copy; <?php echo date("Y"); ?> My Web Page. All rights reserved.
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
