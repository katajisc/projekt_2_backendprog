<?php

    # print($_SESSION['user_id']);
    $sql = "SELECT * FROM comments";

    # PDO::query -metoden returnerar en PDO-statement som vi sparar i $stmt
    $stmt = $conn->query($sql);
    # Kör fetch() -metoden på PDO-statement-objektet
    $row = $stmt->fetch(PDO::FETCH_ASSOC);