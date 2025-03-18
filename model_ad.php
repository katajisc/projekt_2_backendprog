<?php
    $username = test_input($_REQUEST['profile']);
    $sql = "SELECT * FROM profiles WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty(test_input($_REQUEST['ad_kommentar']))) {
        print("2DO: Send comment to database");
    }