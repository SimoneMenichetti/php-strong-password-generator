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
        // var_dump($charactersLength);

        // inizializiamo un ciclo for per generare casualmente la password

        for($i = 0; $i < $length; $i++){
            // utilizziamo rand per dare un valore minimo ed un massimo x i caratteri casuali da selezionare
            $randomI=rand(0,$charactersLength-1);
            // controllo del valore var indice random
            // var_dump($randomI);

            $password .= $characters[$randomI];

            // controllo password
            // var_dump($password);
        }

        // ritorniamo la password generata
        return $password;
    }

    // Funzione per validare la lunghezza della password
    function validatePasswordLength($length) {
        return ($length >= 8 && $length <= 32);
    }

?>