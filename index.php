<?php

function getUserPassword($strlength){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&=?@';
    return substr(str_shuffle($chars), 0, $strlength);
};

if(isset($_GET['length'])){
    $password_length = $_GET['length'];

    $randomPassword = getUserPassword($password_length);

    echo $randomPassword;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Password Generator</title>
    </head>

    <body>
        <header>
            <h1>Generatore di Password</h1>
        </header>

        <main>
            <form action="./index.php" method="GET">
                <label for="length">Lunghezza Password:</label>
                <input type="text" name="length" id="length">
                <button type="submit">Invia</button>
            </form>
        </main>
    </body>
</html>