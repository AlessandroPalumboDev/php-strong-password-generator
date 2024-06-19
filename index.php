<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center p-3" >
                        PHP Strong Password Generator
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    
                    <form action="index.php" method="GET">
                        <div class="mb-3">
                            <label for="lunghezza" class="form-label">Lunghezza password: <?php echo $lunghezza ?></label>
                            <input type="range" class="form-range" min="4" max="20" id="lunghezza" name="lunghezza">
                        </div>

                        <button type="submit" class="btn btn-primary">Genera</button>
                    </form>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>La tua password è:</h1> 
                    <span><?php echo $passwordGenerata ?></span>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span>
                        Strong Password Generator by AP
                    </span>
                </div>
            </div>
        </div>

    </footer>
</body>
</html>