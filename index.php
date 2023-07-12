<?php
function createPassword($length)
{
    $result = '';
    $password = '';
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';
}

if (isset($_GET['pass_length'])) {
    $response = createPassword($_GET['pass_length']);
}
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
                <form action="index.php" method="GET" class="bg-light p-3">
                    <div class="d-flex justify-content-between">
                        <label for="pass_length">Lunghezza password</label>
                        <input type="number" name="pass_length" id="pass-length" class="me-5 form-control" placeholder="Lunghezza">
                    </div>
                    <input type="submit" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    </div>

</body>

</html>