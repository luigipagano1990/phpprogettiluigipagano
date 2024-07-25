<?php
function checkPassword($password) {
    $errors = [];

    // Controllo della lunghezza
    if (strlen($password) < 8) {
        $errors[] = "La password deve avere almeno 8 caratteri.";
    }

    // Controllo della presenza di una lettera maiuscola
    $hasUppercase = false;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] >= 'A' && $password[$i] <= 'Z') {
            $hasUppercase = true;
            break;
        }
    }
    if (!$hasUppercase) {
        $errors[] = "La password deve contenere almeno una lettera maiuscola.";
    }

    // Controllo della presenza di una lettera minuscola
    $hasLowercase = false;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] >= 'a' && $password[$i] <= 'z') {
            $hasLowercase = true;
            break;
        }
    }
    if (!$hasLowercase) {
        $errors[] = "La password deve contenere almeno una lettera minuscola.";
    }

    // Controllo della presenza di un numero
    $hasNumber = false;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] >= '0' && $password[$i] <= '9') {
            $hasNumber = true;
            break;
        }
    }
    if (!$hasNumber) {
        $errors[] = "La password deve contenere almeno un numero.";
    }

    // Controllo della presenza di un carattere speciale
    $specialChars = "!@#$%^&*()-_=+[]{}|;:'\",.<>?/";
    $hasSpecialChar = false;
    for ($i = 0; $i < strlen($password); $i++) {
        for ($j = 0; $j < strlen($specialChars); $j++) {
            if ($password[$i] == $specialChars[$j]) {
                $hasSpecialChar = true;
                break;
            }
        }
        if ($hasSpecialChar) {
            break;
        }
    }
    if (!$hasSpecialChar) {
        $errors[] = "La password deve contenere almeno un carattere speciale.";
    }

    return $errors;
}

$attempts = 0;
$maxAttempts = 3;
//QUI HO CERCATO UN PO' SUL WEB COME MIGLIORARE 
while ($attempts < $maxAttempts) {
    echo "Inserisci la tua password: ";
    $password = fgets(STDIN); // Legge l'input dell'utente(Prende una riga da un puntatore a file)STDIN È una costante predefinita in PHP che rappresenta il flusso di input standard (Standard Input), tipicamente utilizzato per leggere dati inseriti dall'utente tramite la console.
    $password = rtrim($password, "\n"); // Rimuove il newline alla fine della password(Rimuove gli spazi (ed altri caratteri) dalla fine della stringa)

    $errors = checkPassword($password);

    if (count($errors) > 0) {
        echo "La password non è accettata per i seguenti motivi:\n";
        foreach ($errors as $error) {
            echo "- $error\n";
        }
        $attempts++;
        if ($attempts < $maxAttempts) {
            echo "Riprova. Tentativi rimanenti: " . ($maxAttempts - $attempts) . "\n";
        }
    } else {
        echo "Password accettata.\n";
        break;
    }
}

if ($attempts == $maxAttempts) {
    echo "Hai raggiunto il numero massimo di tentativi.\n";
}
