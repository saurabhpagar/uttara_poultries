<?php

?>



<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=".\CSS\tours.CSS" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Uttara Foods</title>
</head>
<style>
    .card{
    margin-top: 40px;
    min-height: 300px;
     padding: 20px;
    color: white;
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu4kiLB9qLxx5QIRft4cnlaOVHppcIa8K1aw&usqp=CAU");
    background-size: cover;
    display: flex;
  position: relative;
    cursor: pointer;
}

.content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgba(31, 31, 31, 0.85);
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: all 0.3s ease;
}

.content *{
    transform: translateY(-70%);
    transition: all 0.3s ease;
    opacity: 0;
}

.content h2{
    font-size: 35px;
    margin: 15px;
    font-weight: 700;
}

.content h5{
    font-size: 18px;
    text-transform: uppercase;
}

.card:hover .content{
    opacity: 1;
}

.card:hover .content *{
    opacity: 1;
    transform: translateY(0);
}
</style>
<body>

    

        <!--===========Nav Bar=================-->
        <section class="nav-bar">
            <div class="logo">Uttara</div>
            <ul class="menu">
            <li><a href="index.php">होम</a></li>
                <li><a href="about_us.html">हमारे बारे में</a></li>
                <li><a href="breeder.html">ब्रीडर</a></li>
                <li><a href="hatcheries.html">हैचरी</a></li>
                <li><a href="farmer_regi.php">हमसे जुड़ें</a></li>
                
                <li><a href="farmer_login.php" class="login">लॉगिन</a></li>    
            </ul>
            </div>

        </section>
        <!--===============Banner================-->
        <section class="banner">
            <div class="banner-text-item">
                 
                
            </div>
        </section>

        <!--=========Services===============-->
        <!-- <h4 class="mt-3 mb-0 " style=" font-weight: 600; font-size: 60px;  text-align: center;">Local Favourite near Toronto</h4> -->
        
                <section class="container mb-5">
                    <div class="row">
                        <div class="places-text mt-5 mb-0">
                            <h2>उत्तरा में आपका स्वागत है</h2>
                        </div>
                     <div class="col-lg-5 col-12 mt-5 mb-3" >
                         
                            <img src="https://5.imimg.com/data5/ER/MW/RQ/ANDROID-52103179/product-jpeg-500x500.jpeg" style="height: 300px; width: 450px; " class="welcome-img " >
                             
                        
                     </div>
                     <div class="col-lg-7 col-12 mt-5 mb-3" >
                         <div class="">
                           <br>
                            <p>हम आपको हमारी कंपनी में स्वागत कर रहे हैं। प्योर्ट्री फार्म वाले किसान, आइए जुड़ें, पैसे लगाए बिना पैसे कमाएं। हम आपको सभी संसाधन प्रदान करेंगे, आपको सिर्फ 45 दिनों तक चूजों को बढ़ाएं और पैसे कमाएं। यह समझौता प्रक्रिया भी बहुत आसान है, आपके नजदीकी शाखा पर जाएं, शाखा प्रबंधक से संपर्क करें, दस्तावेजीकरण पूरा करें और उत्तरा परिवार का हिस्सा बनें। यदि आपकी प्योर्ट्री फार्म की क्षमता 5000 पक्षियों को संग्रहित करने की है, तो हम आपको न्यूनतम 50000 रुपये कमाने की गारंटी देते हैं। इसलिए दूसरों को क्यों चुनें, हमें चुनें...</p>
                         </div>
                     </div>
                     
                    
                    </div>
                 </section>
        
   
        <!--==============Places===================-->
        <div style=" background-color: rgba(0, 0, 0, 0.2); ">
        <section class=" mt-5 container mb-5" > 
              <h2 style="display: flex; justify-content: center; ">उत्तरा परिवार का हिस्सा बनें</h2>
                    <div class="row" >
                        <div class="col-lg-6" >
                            <div class="card ">
                                <div class="content" onclick="OnClick()" >
                                      <h2>उत्तरा किसान</h2>
                                      <h5 style="margin-left: 20px;" class="center">उत्तरा की वृद्धि की कहानी असाधारण किसानों के एकीकरण की स्थिति को प्रतिष्ठित करती है।</h5>
                                      <p style="margin-left: 20px; margin-top: 10px;">हमेशा से हमने किसानों को सबसे अच्छे व्यापार मॉडल प्रदान करने का प्रयास किया है और सतत लाभकारीता सुनिश्चित की है।</p>
                                      <p style="margin-left: 20px;">हमारे उत्तरा परिवार में शामिल होने और इस साझेदारी की मुख्यधारा में रहने के लिए।</p>
                                      <br><br>  
                                </div>
                            </div>
                            <script>
                                function OnClick(){
                                    window.open('https://www.spendlifetraveling.com/facts-about-dubai/', '_blank');
                                }
                            </script>
                        </div>
                        <div class="col-lg-6" >
                            <div class="card">
                                <div class="content" onclick="OnClick()" >
                                      <h2>उत्तरा वितरक</h2>
                                      <h5 style="margin-left: 20px;" class="center">क्या आप सफलता की इच्छा से प्रेरित हैं? हमारे साथ जुड़ें!</h5>
                                      <p style="margin-left: 20px; margin-top: 10px;">हमारे वितरक संपूर्ण उत्पाद जीवनचक्र में एक महत्वपूर्ण कड़ी हैं, जो किसानों, कंपनी और खुदरा विक्रेता, जो सभी अंतिम ग्राहकों को सर्वोत्तम गुणवत्ता और स्वच्छता वाले उत्पाद प्रदान करने के लिए जिम्मेदार हैं। उत्तरा आपका स्वागत करता है इस महान परिवार का एक सदस्य बनने के लिए जो विकास के इस चरण में है।</p>
                                      
                                      <br><br> 
                                </div>
                            </div>
                            <script>
                                function OnClick(){
                                    window.open('https://www.spendlifetraveling.com/facts-about-dubai/', '_blank');
                                }
                            </script>
                            <img src="" style=" width: 100%;border-radius: 15px; margin-top: 50px;">
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-6" >
                            <div class="card">
                                <div class="content" onclick="OnClick()" >
                                      <h2>उत्तरा आपूर्ति कर्ता</h2>
                                      <h5 style="margin-left: 20px;" class="center">क्या यह सिर्फ व्यापार करना है? देश के सबसे प्रतिष्ठित पोल्ट्री ब्रांड के साथ दीर्घकालिक साझेदारी के साथ एक सतत व्यापार करना।</h5>
                                      <p style="margin-left: 20px; margin-top: 10px;">40,000 किसानों का नेटवर्क, 3 मिलियन एमटी चारा आपूर्ति, 70 चारा मिल और मजबूत आर एंड डी प्रक्रिया नई आवश्यकता की पूर्ति करने के लिए संतुष्ट करते हैं। यदि आप महान गुणवत्ता और आकर्षक व्यापारिक साझेदारी को महत्व देते हैं, तो आगे बढ़ें, यहां उत्तरा होना चाहिए।
                                      </p>
                                      
                                      <br><br> 
                                </div>
                            </div>
                            <script>
                                function OnClick(){
                                    window.open('https://www.spendlifetraveling.com/facts-about-dubai/', '_blank');
                                }
                            </script>
                        </div>
                        <div class="col-lg-6" >
                            <div class="card">
                                <div class="content" onclick="OnClick()" >
                                      <h2>उत्तरा डेल्फ्रेज</h2>
                                      <h5 style="margin-left: 20px;"class="center">भविष्य में आपका स्वागत है। रिटेल क्रांति का हिस्सा बनें। उत्तरा डेल्फ्रेज का हिस्सा बनें!</h5>
                                      <p style="margin-left: 20px; margin-top: 10px;">उत्तरा डेल्फ्रेज एक उच्च गुणवत्ता, आधुनिक भविष्यवाणीय खुदरा स्टोर की एक श्रृंखला है, जो एक फ्रेंचाइजी मॉडल पर चल रही है।</p>
                                      <p style="margin-left: 20px;">यहां का स्टोर साफ़द और खाद्य सुरक्षा के सर्वोत्तम मानकों को पूरा करता है। यहां बेची जाने वाली मुर्गी उच्च गुणवत्ता मानकों की होती है।</p>
                                      <br><br> 
                                </div>
                            </div>
                            <script>
                                function OnClick(){
                                    window.open('https://www.spendlifetraveling.com/facts-about-dubai/', '_blank');
                                }
                            </script>
                            <img src="" style=" width: 100%;border-radius: 15px; margin-top: 50px;">
                        </div>
                    </div>
               
               
               
            </div>
        </section>
       
        <!--------------------------->

        <div class="places-text mt-5 mb-0">
            <h2>उत्तरा परिवार का हिस्सा बनें</h2>
        </div>
                <section class="services container mb-5">
                    <div class="row">
                     <div class="col-lg-3 col-12" >
                         <div class="service-item">
                         
                             <img src="https://5.imimg.com/data5/MG/FM/GK/SELLER-63869338/country-chicks-500x500.jpg" style=" height:auto; width: 100%; border-radius: 15px;">
                             <h2>फार्म</h2>
                         </div>
                     </div>
                     <div class="col-lg-3 col-12" >
                         <div class="service-item">
                             <img src="https://media.istockphoto.com/id/466234158/photo/hen-pecks.jpg?s=612x612&w=0&k=20&c=lpEWZkjXmnT4Cru_0fWUlVah0MdwiM-SJW0PSTniFXE=" style="height: auto; width: 100%; border-radius: 15px;">
                             <h2>चारा</h2>
                         </div>
                     </div>
                     <div class="col-lg-3 col-12" >
                         <div class="service-item">
                             <img src="https://www.barfieldsbutchers.co.uk/wp-content/uploads/2020/06/barfields33_chix_breast-1-600x399.jpg" style="height: 100%; width: 100%; border-radius: 15px;">
                             <h2>प्रोसेस्ड फ़ूड</h2>
                         </div>
                     </div>
                     <div class="col-lg-3 col-12" >
                         <div class="service-item">
                             <img src="https://animalcare-ng.com/wp-content/uploads/2022/05/soy-bean.webp" style="height: auto; width: 100%;border-radius: 15px;">
                             <h2>सोया</h2>
                         </div>
                     </div>
                    </div>
                 </section>

          <!--------------------------->
        <!--===========Footer=================-->
        <div class="footer container-fluid">
            <div class="logo mt-3" style="color: rgb(0, 0, 0);">उत्तरा फ़ूड्स</div>
            <div class="row ">
                <div class="col-lg-2">
                    <div class="links ">
                        
                       
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links ">
                        <h3 >होम</h3>
                       
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links ">
                        <h3 >हमारे बारे में</h3>
                        
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links ">
                        <h3 >ब्रीडर</h3>
                       
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links ">
                        <h3 >हैचरी</h3>
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            function openCity(cityName) {
              var i;
              var x = document.getElementsByClassName("city");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              document.getElementById(cityName).style.display = "block";  
            }
            </script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" ></script>

</body>

</html>
