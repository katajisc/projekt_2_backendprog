<?php
    $sql = "SELECT * FROM profiles";

    # PDO::query -metoden returnerar en PDO-statement som vi sparar i $stmt
    $stmt = $conn->query($sql);
    # Kör fetch() -metoden på PDO-statement-objektet
    # $result = $stmt->fetch(PDO::FETCH_ASSOC);
   