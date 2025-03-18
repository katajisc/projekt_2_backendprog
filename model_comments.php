<?php
    # Särdela på kommentarer enligt sändar och mottagarid

    $reply_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM comments WHERE reply_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['reply_id']);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

