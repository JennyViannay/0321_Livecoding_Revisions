<?php
// ici traitement d'un formulaire

if (!empty($_GET['email'] && !empty($_GET['comment']))) {
    $email = $_GET['email'];
    $message = $_GET['comment'];
    header('Location: ../success.php?email='.$email.'&comment='.$message);
} else {
    $error = "Tous les champs sont obligatoires";
    header('Location: ../index.php?error='.$error);
}
