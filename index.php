<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section form {
            width: 400px;
            height: 300px;
            border: 1px solid #ececec;
            border-radius: 16px;
            padding: 32px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            background-color: #fafafa;
            box-shadow: 0px 0px 8px #ececec;
        }

        label {
            width: 100%;
            text-align: center;
        }

        input[type="text"] {
            width: 200px;
            height: 40px;
            font-size: 24px;
            padding: 8px;
            margin: 0 67px;
        }

        button {
            width: 80px;
        }

        @keyframes fade{
            from{ opacity: 0; transform: translateY(20px)}
            to{ opacity: 1; transform: translateY(0);}
        }

        .fade-in{
            animation: fade 1s ease-out;
        }
    </style>
</head>

<body>
    <section class="fade-in">    
    <form method="post" action="">
        <h1>Tabajara Converter</h1>
        <label for="temp">Insira o valor da temperatura:</label>
        <input type="text" name="temp" id="temp" required>
        <button type="submit" name="convertTo" value="celsius">Para °C</button>
        <button type="submit" name="convertTo" value="fahrenheit">Para °F</button>
        <?php
        if(isset($_POST['temp']) && isset($_POST['convertTo'])){
            $temp = $_POST['temp'];
            $option = $_POST['convertTo'];
            if($option == "celsius"){
                FtoC($temp);
            } else {
                CtoF($temp);
            }
        } else {
            echo "<h2>35ºC é equivalente a 95ºF</h2>";
        }
        ?>
    </form>
    </section>
</body>

</html>