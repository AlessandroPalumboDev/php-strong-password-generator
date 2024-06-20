<?php
// variabile che prende il valore dell'input e lo trasforma in un numero intero, se utente simpatico genera numero casuale
    $lunghezza = intval($_GET['lunghezza']) ? intval($_GET['lunghezza']) : rand(4, 20);

    // funzione genera password
    function generaPassword($lunghezza) {
        // stringa caratteri possibili presenti nella password
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%&/*-=_+?';
        $password = '';
        // ciclo che pusha caretteri in $password fino a raggiungere il valore di lunghezza
        for ($i = 0; $i < $lunghezza; $i++) {
            // prendo un carattere casuale all'interno della stringa
            $carattere = $caratteri[rand(0, strlen($caratteri) -1)];
            // pusho quel carattere all'interno della stringa inizialmente vuota
            $password .= $carattere;
        }
        return $password;
    }

    // variabile che richiama la funzione
    $passwordGenerata = generaPassword($lunghezza);


?>