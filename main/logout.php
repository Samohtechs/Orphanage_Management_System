<?php

    // first start session
    session_start();
    // unset session
    session_unset();
    // destroy session
    session_destroy();

    // redirect user to login page
    header('Location: ../index.php');

?>