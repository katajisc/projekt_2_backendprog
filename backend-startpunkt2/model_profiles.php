<?php
    $sql = "SELECT * FROM profiles";
    # Instansierar ett objekt från klassen PDO som namnges $conn
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    print("Connected to DB <br>");
    # PDO::query -metoden returnerar en PDO-statement som vi sparar i $stmt
    $stmt = $conn->query($sql);
    # Kör fetch() -metoden på PDO-statement-objektet
    # $result = $stmt->fetch(PDO::FETCH_ASSOC);
   