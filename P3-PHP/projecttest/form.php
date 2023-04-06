<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="function.php" method="POST">
            <label for="naam">Naam:</label> <br>
            <input type="text" name="naam" id="naam"><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="onderwerp">Onderwerp:</label><br>
            <input type="text" name="onderwerp" id="onderwerp"><br>
            <label for="bericht">Bericht:</label><br>
            <textarea name="bericht" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Send"><br>
        </form>
    </div>
</body>
</html>