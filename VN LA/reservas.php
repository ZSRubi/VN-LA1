<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./image/VIENA LOGO 1.png" rel="icon">
    <link href="./image/VIENA LOGO 1.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Reservas</title>
    <header>
        <div class="header-content">
            <div class="logo">
                <h1>VIENA INGENIEROS<b>.</b></h1>
            </div>
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li class="menu-selected"><a href="index.php" class="text-menu-selected"> 
                        <i class="fas fa-file-alt"></i>INICIO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cornsilk;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: black;
            color: white;
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            display: inline;
            margin-right: 20px;
        }

        .menu ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .menu ul li.menu-selected a {
            font-weight: bold;
        }

        .container {
            width: 60%;
            margin: 100px auto 20px auto; /* 100px margin-top for space between header and form */
            background-color: darkslategray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .time-slots {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .time-slot {
            margin: 5px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .time-slot:hover {
            background-color: #eee;
        }

        .time-slot.selected {
            background-color: steelblue;
            color: #fff;
        }

        .button {
            background-color: steelblue;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .button:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reservas</h2>
        <form>
            <div class="form-group">
                <label for="service">Seleccionar un servicio:</label>
                <select id="service">
                    <option value="topografia">Topografía</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Fecha:</label>
                <input type="text" id="date" value="agosto 16°" readonly>
            </div>
            <div class="form-group">
                <label for="time">Hora:</label>
                <select id="time">
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="10:45 AM">10:45 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:15 AM">11:15 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="11:45 AM">11:45 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:15 PM">12:15 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                </select>
            </div>
            <div class="time-slots">
                <button type="button" class="time-slot" value="10:30 AM">10:30 AM</button>
                <button type="button" class="time-slot" value="10:45 AM">10:45 AM</button>
                <button type="button" class="time-slot" value="11:00 AM">11:00 AM</button>
                <button type="button" class="time-slot" value="11:15 AM">11:15 AM</button>
                <button type="button" class="time-slot" value="11:30 AM">11:30 AM</button>
                <button type="button" class="time-slot" value="11:45 AM">11:45 AM</button>
                <button type="button" class="time-slot" value="12:00 PM">12:00 PM</button>
                <button type="button" class="time-slot" value="12:15 PM">12:15 PM</button>
                <button type="button" class="time-slot" value="12:30 PM">12:30 PM</button>
            </div>
            <button type="submit" class="button">Continuar</button>
        </form>
    </div>
    <script>
        // Selecciona todos los botones de hora
        const timeSlots = document.querySelectorAll('.time-slot');
        // Selecciona el elemento select para la hora
        const selectedTime = document.getElementById('time');

        // Añade un evento de clic a cada botón de hora
        timeSlots.forEach(slot => {
            slot.addEventListener('click', () => {
                // Remueve la clase 'selected' de todos los botones de hora
                timeSlots.forEach(s => s.classList.remove('selected'));
                
                // Añade la clase 'selected' al botón de hora clicado
                slot.classList.add('selected');
                
                // Actualiza el valor del select de hora con el valor del botón clicado
                selectedTime.value = slot.value;
            });
        });
    </script>
</body>
</html>
