<?php

# http://localhost/xss_residente.php?variavel=<script>alert('XSS');</script>

session_start();

if (isset($_GET['variavel'])) {
    $_SESSION['variavel'] = $_GET['variavel'];
}

echo isset($_SESSION['variavel']) ? $_SESSION['variavel'] : "" ;
