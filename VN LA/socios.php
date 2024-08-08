<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #D2D2D2;
            background-image:
            repeating-linear-gradient(
                to right, transparent 0 100px,
                #25283b22 100px 101px
            ),
            repeating-linear-gradient(
                to bottom, transparent 0 100px,
                #25283b22 100px 101px
            );
        }
        
        body::before{
            position: absolute;
            width: min(1400px, 90vw);
            top: 10%;
            left: 50%;
            height: 90%;
            transform: translateX(-50%);
            content: '';
            background-image: url(sc/images/bg.png);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: top center;
            pointer-events: none;
        }
    </style>
    <link rel="stylesheet" href="estilos/socios.css">
</head>
<body>

    <div class="banner">
        <div class="slider" style="--quantity: 10">
            <div class="item" style="--position: 1"><img src="sc/images/dragon_1.jpg" alt=""></div>
            <div class="item" style="--position: 2"><img src="sc/images/dragon_2.jpg" alt=""></div>
            <div class="item" style="--position: 3"><img src="sc/images/dragon_3.jpg" alt=""></div>
            <div class="item" style="--position: 4"><img src="sc/images/dragon_4.jpg" alt=""></div>
            <div class="item" style="--position: 5"><img src="sc/images/dragon_5.jpg" alt=""></div>
            <div class="item" style="--position: 6"><img src="sc/images/dragon_6.jpg" alt=""></div>
            <div class="item" style="--position: 7"><img src="sc/images/dragon_7.jpg" alt=""></div>
            <div class="item" style="--position: 8"><img src="sc/images/dragon_8.jpg" alt=""></div>
            <div class="item" style="--position: 9"><img src="sc/images/dragon_9.jpg" alt=""></div>
            <div class="item" style="--position: 10"><img src="sc/images/dragon_10.jpg" alt=""></div>
        </div>
        <div class="content">
            <h1 data-content="TRABAJAMOS">
                TRABAJAMOS
            </h1>
            <h2>SERVICIOS CON VIENA INGENIEROS</h2>
                
         
                    
                
            </div>
            <div class="model"></div>
        </div>
    </div>
    
</body>
</html>