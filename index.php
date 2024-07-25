<?php

    // inizializzo una funzione per generare automaticamente una password
    function CreateRandomPassword($length){
        // caratteri/simboli possibili ammessi nelle password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        // password campo da popolare
        $password= '';
        // lunghezza della password 
        $charactersLength = strlen($characters);

        // inseriamo un controllo della lunghezza dei caratteri 
        var_dump($charactersLength);

        // inizializiamo un ciclo for per generare casualmente la password

        for($i = 0; $i < $length; $i++){
            // utilizziamo rand per dare un valore minimo ed un massimo x i caratteri casuali da selezionare
            $randomI=rand(0,$charactersLength-1);
            // controllo del valore var indice random
            var_dumb($randomI);

            $password.= $characters[$randomI];

            // controllo password
            var_dump($password);
        }

        // ritorniamo la password generata
        return $password;
    }

    // verifica della lunghezza della password settata
    
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
                               <label for="length">Lunghezza Password:</label>
                                <!-- inserito un input minimo e max di lughezza -->
                                <input type="number" class='form-control' id='lenght' name='lenght' min='8' max='32' required><br>
                                <div class="text-center">
                                    <!-- inserimento input -->
                                    <input type="submit" class='btn btn-primary' value='Genera la password'>
                                    <!-- input reset form -->
                                    <input type="reset" class='btn btn-warning' value='annulla'>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>