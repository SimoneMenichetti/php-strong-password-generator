<?php

// includiamo la pagina function.php
include 'function_bonus.php';

// miles bonus 3 
// logica
// inizializzare la sessione 
// memorizzare i dati della password generata


// inizializzo la sessione
    // open session
    session_start();

    // verifica della lunghezza della password settata

    $passwordLength=isset($_GET['length']) ? intval($_GET['length']) : 0;

    // utilizziamo un controllo della pass inserita per la lunghezza
        // var_dump($passwordLength);

        $generatedPassword='';
      
        // errore
        $error='';

        // creiamo una condizione di controllo se la password e maggiore uguale a 8 o minore uguale a 32 genera altrimenti errore

        if(isset($_GET['length'])){
            if(validatePasswordLength($passwordLength)){
                $generatedPassword = CreateRandomPassword($passwordLength);
                // memorizzare i dati della password generata
                $_SESSION['generated_password'] = $generatedPassword;
                header('location: password_page.php');
                exit();
            } else {
            $error = 'Per favore, inserisci un valore valido per la lunghezza della password.';
            // controllo su password generata
            // var_dump($generatedPassword);
        }
    }

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
                        <!-- Creazione form action con processo in GET -->
                        <form action="" method='GET'>
                            <div class='form-group'>
                                <label for="length">Inserisci il numero della lunghezza Password:</label>
                                <!-- Inserito un input minimo e max di lunghezza -->
                                <input type="number" class='form-control' id='length' name='length' min='8' max='32' required><br>
                                <div class="text-center">
                                    <!-- Inserimento input -->
                                    <input type="submit" class='btn btn-primary' value='Genera la password'>
                                    <!-- Input reset form -->
                                    <input type="reset" class='btn btn-warning' value='annulla'>
                                </div>
                            </div>
                        </form>

                        <?php if ($error): ?>
                            <div class="alert alert-danger mt-3 text-center">
                                <?php echo htmlspecialchars($error); ?>
                            </div>
                        <?php elseif ($generatedPassword): ?>
                            <div class="alert alert-success mt-3 text-center">
                                <strong>Password Generata:</strong> <?php echo htmlspecialchars($generatedPassword); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</html>