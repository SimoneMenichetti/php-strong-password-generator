<?php

// includiamo la pagina function.php

include 'function.php';

    // // inizializzo una funzione per generare automaticamente una password
    // function CreateRandomPassword($length){
    //     // caratteri/simboli possibili ammessi nelle password
    //     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    //     // password campo da popolare
    //     $password= '';
    //     // lunghezza della password 
    //     $charactersLength = strlen($characters);

    //     // inseriamo un controllo della lunghezza dei caratteri 
    //     // var_dump($charactersLength);

    //     // inizializiamo un ciclo for per generare casualmente la password

    //     for($i = 0; $i < $length; $i++){
    //         // utilizziamo rand per dare un valore minimo ed un massimo x i caratteri casuali da selezionare
    //         $randomI=rand(0,$charactersLength-1);
    //         // controllo del valore var indice random
    //         // var_dump($randomI);

    //         $password .= $characters[$randomI];

    //         // controllo password
    //         // var_dump($password);
    //     }

    //     // ritorniamo la password generata
    //     return $password;
    // }

    // verifica della lunghezza della password settata

    $passwordLength=isset($_GET['length']) ? intval($_GET['length']) : 0;

    // utilizziamo un controllo della pass inserita per la lunghezza
        // var_dump($passwordLength);

        $generatedPassword='';
      
        // errore
        $error='';

        // creiamo una condizione di controllo se la password e maggiore uguale a 8 o minore uguale a 32 genera altrimenti errore

        if($passwordLength> 0){
            if($passwordLength >= 8 && $passwordLength <=32){
                $generatedPassword =  CreateRandomPassword($passwordLength);
                // altrimenti text errore
            } else{
                $error='La lunghezza della password deve avere tot caratteri compresi fra 8 e 32';

            }

        } else {
            $error = 'Per favore, inserisci un valore valido per la lunghezza della password.';
            // controllo su password generata
            // var_dump($generatedPassword);
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