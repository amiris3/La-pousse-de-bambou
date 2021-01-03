<?php

function insertMessage($connexion, $message) {
    $requete = "INSERT INTO `Messages` (`email`, `object`, `message`, `date`) VALUES (:email, :subject, 
:message, NOW());";
    $quete = $connexion->prepare($requete);
    $quete->bindValue(':email', $message['email']);
    $quete->bindValue(':subject', $message['subject']);
    $quete->bindValue(':message', $message['message']);
    return $quete->execute();
}