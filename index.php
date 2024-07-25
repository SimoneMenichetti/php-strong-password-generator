<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-password-generator</title>
    <!-- bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class='card mt-5'>
                    <div class='card-body'>
                        <h1 class='card-title text-center'>Generatore di Password casuali PHP</h1>
                        <!-- creazione form  action  con processo in GET -->
                        <form action="" method='GET'>
                            <div class='form-group'>
                                <label for="length">Lunghezza della password:</label>
                                <!-- inserimento input -->
                                <input type="submit" class='btn btn-primary' value='Genera la password'>
                                <!-- input reset form -->
                                 <input type="reset" class='btn btn-warning' value='annulla'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>