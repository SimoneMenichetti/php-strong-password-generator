<?php

// start sessione
session_start();
// recupero della password generata e memorizzata in index

$generatedPassword =isset($_SESSION['generated_password']) ? $_SESSION['generated_password'] : '';

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza Password Generata</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class='card mt-5'>
                    <div class='card-body'>
                        <h1 class='card-title text-center'>Password Generata</h1>
                        <?php if ($generatedPassword): ?>
                            <div class="alert alert-success mt-3 text-center">
                                <strong>Password Generata:</strong> <?php echo htmlspecialchars($generatedPassword); ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger mt-3 text-center">
                                Nessuna password generata. Per favore, torna alla pagina principale e genera una nuova password.
                            </div>
                        <?php endif; ?>
                        <div class="text-center">
                            <!-- aggiunto btn che ritorna all index principale -->
                            <a href="index_bonus.php" class='btn btn-primary mt-3'>Torna alla Pagina Principale</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

