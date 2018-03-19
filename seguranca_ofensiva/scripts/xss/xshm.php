<?php
/*
http://vitima.segphp4linux/xss_xshm.php?mensagem=<script>alert(history.length);</script>
*/

echo isset($_GET['mensagem']) ? $_GET['mensagem'] : '';