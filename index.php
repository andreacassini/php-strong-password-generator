<?php

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 bg-primary-subtle p-3">
                <h1 class="text-center">Strong Password Generator</h1>
                <h2 class="text-center">Genera una password sicura</h2>
                <form action="/index.php" method="GET" class="bg-light d-flex justify-content-between p-3">
                    <label for="pass_length">Lunghezza password</label>
                    <input type="text" name="pass_length" class="me-5">
                </form>
            </div>
        </div>
    </div>

</body>

</html>