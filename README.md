<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Service!</title>
    <style>

      body {
            background-color:antiquewhite; /* We chose this very specefic color (it's a light beige) */
            margin: 0; 
            height: 100vh; 
        }

        .mainAd {
            position: fixed;
            font-weight: bolder;
            font-size: 7.0vh;
            font-family:Georgia;

            top: 12%;
            left: 10%;
            z-index: 2;
        }

        .mainBuy {
            position: fixed;
            font-weight: bolder;
            font-size: 7.0vh;
            font-family:Georgia;
            top: 12%;
            left: 57.5%;
            z-index: 2;
        }


        .mainLine{

          position: fixed;
          width: 1vw; 
            height: 80vh; 
            background-color: black; 
            top: 10.45%;
            left: 51%;
            z-index: 2;
            border-radius: 50px; 
        }

        .homeSquare{

          position: fixed;
            width: 90vw;  
            height: 87vh; 
            top: 7%;
            left: 5%;
            background-color: rgb(158, 118, 69); 
            border-radius: 50px; 
            z-index: 1;

        }




        

       
    </style>
</head>
<body>
    
  <div class="mainAd">Advertise Buisness</div>
  <div class="mainBuy">Search Service</div>
  <div class="homeSquare"></div>
  <div class="mainLine"></div>

</body>
</html>
