<?php
session_start();
if(isset($_POST['lunghezza'])){
    $_SESSION['password'] = getPassword($_POST['lunghezza']);
    header('Location: pagina.php');
}else{
    header('Location: index.php');
}
?>