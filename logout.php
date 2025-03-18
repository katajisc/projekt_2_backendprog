<?php
    include "handy_methods.php";
    session_destroy();
    header("Refresh:0; url=index.php");
?>
