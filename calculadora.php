<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }
    // No me da tiempo a hacerlo
    if($_POST["suma"]) {

    } else if($_POST["resta"]) {

    } else {
        echo "No implementado";
    }
?>