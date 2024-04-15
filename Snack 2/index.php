<!--  Snack 2
Con un form passare come parametri GET
name, mail e age 
verificare che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="age">Età:</label>
        <input type="number" name="age">
        <button type="submit">Invia</button>
    </form>

    <?php 
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if (strlen($name) > 3 && !filter_var($email, FILTER_VALIDATE_EMAIL && is_numeric($age))) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
    ?>

</body>

</html>