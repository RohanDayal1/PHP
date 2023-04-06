<?php

include 'poll.php';
try {
    $db = new PDO("mysql:host=localhost;dbname=poll","root","");

    $ids = [1, 2, 3, 4];
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $query = $db->prepare("UPDATE optie SET stemmen = stemmen + 1 WHERE id IN ($placeholders)");

    if ($query->execute($ids)) {
        echo "Stemmen toegevoegd.";
    } else {
        echo "Er is een fout opgetreden.";
    }
} catch (PDOException $e) {
    die("ERROR!: " . $e->getMessage());
}

?>