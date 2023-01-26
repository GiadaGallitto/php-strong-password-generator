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
        <title>Response</title>
    </head>

    <body>
        <main class="container text-center">
            <h2>
            <?php
            $randomPassword = '';

            if(!empty($_SESSION['password'])) {
                echo "<h5> La tua password è: {$_SESSION['password']} </h5>";
            }
            ?>
            </h2>
        </main>
    </body>

</html>