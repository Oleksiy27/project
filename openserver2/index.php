<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабка</title>
    <style>
        body {
            background-color: lightsalmon;
        }
        form {
            text-align: center;
            font-size: 22px;
            font-family: "Times New Roman", Georgia, Serif;
        }
        select,
        input {
            font-size: 140%;
            font-family: "Times New Roman", Georgia, Serif;
            color: dodgerblue;
            background-color: white;
        }
    </style>
</head>
<body>
<form action="script.php" method="post">
    <p>Введіть ім'я : <br>
        <input type="text" id="firstname" name="firstname"><br>
    <p>Введіть прізвище : <br>
        <input type="text" id="family_name" name="family_name"><br>
        <input type="submit">
</form>
</body>
</html>
