<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);   # På live sajt rekommenderas: log_errors true, display_errors false

// Start the session
session_start();
// Allt möjligt viktigt som vi använder ofta, sessionshantering, form validation etc.

// Sanitering av användarinmatning
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Databaskonfiguration
$servername = "localhost";
$dbname = "katajisc";
$username = "katajisc";
include "hemlis.php";


    # Instansierar ett objekt från klassen PDO som namnges $conn
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    # print("Connected to DB <br>");
?>