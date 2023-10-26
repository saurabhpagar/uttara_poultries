<?php
include "connection.php";
?>

<!DOCTYPE html>

<html lang="hi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>रजिस्ट्रेशन फॉर्म</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/farmer_regi.css" />
  </head>
  <style>
    a{
      text-decoration:none;
      color:#fff;
    }
  </style>
  <body>

    <section class="container">
      <header>रजिस्ट्रेशन फॉर्म</header>
      <form action="farmer_regi_action.php" class="form" method="POST">
        <div class="input-box">
          <label>किसान का नाम</label>
          <input type="text" placeholder="पूरा नाम दर्ज करें" name="f_name" required />
        </div>

        <div class="input-box">
          <label>पोल्ट्री का नाम</label>
          <input type="text" placeholder="पोल्ट्री फार्म का नाम दर्ज करें" name="p_name" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>फ़ोन नंबर</label>
            <input type="tel"  placeholder="फ़ोन नंबर दर्ज करें" name="p_number" required pattern=[0-9]{3}-[0-9]{3}-[0-9]{4}/>
          </div>

          <div class="input-box">
            <label>पोल्ट्री क्षमता</label>
            <input type="text" placeholder="पोल्ट्री क्षमता दर्ज करें" name="p_capacity" required />
          </div>
        </div>

        <div class="input-box address">
          <label>गांव का नाम</label>
          <input type="text" placeholder="गांव का नाम दर्ज करें" name="v_name" required />
        </div>

        <div class="input-box">
          <label>मिलने की तारीख</label>
          <input type="date" placeholder="तारीख का चयन करें" name="a_date" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required />
        </div>

        <input type="submit" name="submit" value="Submit">
        <button type="submit" name="submit" class="btn btn-primary"><a href="index.php">वापस जाएं</a></button>


      </form>
    </section>
  </body>
</html>
