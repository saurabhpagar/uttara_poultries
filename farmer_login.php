<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="hi" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Uttaras Food</title>
    <link rel="stylesheet" href="css/farmer_login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://images.wallpaperscraft.com/image/single/rooster_bird_poultry_122464_300x188.jpg" alt="">
        <div class="text">
          <span class="text-1">हर नया किसान एक <br> नया अवसर है</span>
          <span class="text-2">चलो जुड़ते हैं</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="https://images.wallpaperscraft.com/image/single/rooster_bird_poultry_122464_300x188.jpg" alt=""  style="image:norepeat">
        <div class="text">
          <span class="text-1">एक कदम के साथ <br> माइलों का सफर पूरा करें</span>
          <span class="text-2">शुरू करें</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">लॉगिन</div>
          <form action="farmer_login_action.php" method="POST">
            <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input class="names" type="text" placeholder="फार्म का नाम दर्ज करें" name="poultry_name" required>
            </div>

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input  class="names"   type="text" placeholder="फार्म कोड दर्ज करें" name="p_code" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input class="names" type="password" placeholder="अपना पासवर्ड दर्ज करें" name="changed_pass" required>
              </div>
              <div class="text"><a href="change_password.php">पासवर्ड बदलें?</a></div>
              <div class="button input-box">
              <input type="submit" name="submit" value="सबमिट करें">
              </div>
              <!-- <div class="text sign-up-text">अकाउंट नहीं है? <label for="flip"><a href="farmer_regi.php">अभी साइन अप करें</a></label></div> -->
            </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>