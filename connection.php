<?php
    /* Database config */
    $conn_host		= 'localhost';
    $conn_user		= 'root';
    $conn_pass		= '';
    $conn_database	= 'orphanage_system'; 

    /* End config */

    // Initialize connection
    try {
        $conn = new PDO("mysql:host=$conn_host;dbname=$conn_database", $conn_user, $conn_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOExcepio $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    
?>