<?php
session_start();

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
        <header class="container text-center mb-5">
            <h1>Generatore di Password</h1>
        </header>

        <main class="container text-center">
            <form class="mb-3" action="./index.php" method="GET">
                <label for="length">Lunghezza Password:</label>
                <input type="text" name="length" id="length">
                <button type="submit">Invia</button>
            </form>

            <?php
                include __DIR__ . '/partials/function.php';

                $randomPassword = '';

                if(isset($_GET['length']) && $_GET['length'] != null){
                    $password_length = $_GET['length'];

                    $randomPassword = getUserPassword($password_length);

                    header("location: ./response.php");
                } else {
                    echo "<h5> Si prega di inserire un valore </h5>";
                }

                $_SESSION['password'] = $randomPassword;
            ?>
        </main>
    </body>
</html>