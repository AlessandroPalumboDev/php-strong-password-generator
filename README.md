# PHP Strong Password Generator

## Descrizione:

```txt
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
```

### Milestone 1:

- Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
- Scriviamo tutto (logica e layout) in un unico file index.php

### Milestone 2:

- Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

### Milestone 3 (BONUS):

- Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.

### Milestone 4 (BONUS):

- Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
- Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

## Svolgimento

- Creo file index.php
- Importo Bootstrap tramite CDN

### Milestone 1:

- Creo un form con un input per la scelta della lunghezza della password
- Creo una variabile che prende il valore dell'input e lo trasforma in un numero intero
- Creo la funzione generaPassword richiamando la variabile della lunghezza
  - All'interno della funzione:
  - Creo una variabile di una stringa composta da tutti i caratteri possibili nella password
  - Creo una stringa vuota della password
  - Creo un ciclo FOR che pusha tanti caratteri casuali presi da $caratteri quanto è alto il valore di $lunghezza
  - La funzione restituisce la variabile password riempita
- Creo una variabile che richiama la funzione
- Richiamo la variabile della funzione in pagina
