<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paina</title>

    <!--LINK BOOTSTRAP-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--LINK CSS-->

    <link rel="stylesheet" href="style.css">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/a97229ce96.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Roboto:ital@1&display=swap" rel="stylesheet">

</head>
<body>

    <?php
    include 'vars.php';
        /*
        Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
        L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
        Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
        Scriviamo tutto (logica e layout) in un unico file index.php
        Milestone 2
        Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
        */
    ?>

    <div class="">
        Eccoti la password. 
        <?php
            echo $_SESSION['password'];
        ?>
    </div>

    <!--AXIOS-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--VUE-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--JS-->
    <script type="text/javascript" src="./js/scripts.js"></script>
    
</body>
</html>
