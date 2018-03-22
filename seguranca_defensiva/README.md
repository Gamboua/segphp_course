# Segurança defensiva

### [Camada OSI](https://pt.wikipedia.org/wiki/Modelo_OSI)
- O acesso físico aos servidores está seguro?
- Utilizo equipamentos modernos como switches com suporte a port mirroring e vlans?
- É possível sniffar e capturar o trafego de rede?
- É possível realizar arp poisoning
- A minha WAN possui Fail Over?
- Possuo sistema de antivirus endpoint com gerencia centralizada?
- Possuo firewall interno ou externo?

### [MVC](https://pt.wikipedia.org/wiki/MVC)
- Model
- View
- Controller

### Frameworks
- [Laravel](https://laravel.com/)
- [Symfony](https://symfony.com/)
- [ZendFramework 2](https://framework.zend.com/manual/2.4/en/index.html)
- [Silex](https://silex.symfony.com/)

### Depuração de código
- [Firebug](https://getfirebug.com/)
- [XDebug](https://xdebug.org/)
- tcpdump e wireshark

### Boas práticas
- Versionamento de código
- Extensões consistentes (.php, .inc.php, .phtml)
- Sempre garanta que a entrada do usuário esteja validada
- Filtre a saída também
- Sempre cheque o tipo do arquivo (MIME Type) em uploads
- Mudar o nome do arquivo quando salvá-lo
- Utilize HTTPS
- Altere o nome padrão do cookie de sessão
- Manha o CMS e os plugin sempre atualizados
- Não use chmod 777

### Gerenciamento de erros
- display_errors
- error_reporting
- log_errors
- error_log
- set_error_handler()

```php
function myErrorHandler() {
    # TRATAMENTO DO ERRO
}

$old_error_handler = set_error_handler("myErrorHandler");
```
- error_log()
```php
error_log("Failed to connect to database!", 0);
```

### Filtragem e validação de dados
- filter_var()
- FILTER_VALIDATE_*
- FILTER_SANITIZE_*
```php
filter_var('bob@example.com', FILTER_VALIDATE_EMAIL
```
- strip_tags()
```php
strip_tags($text, '<p><a>');
```
- escapeshellcmd()
```php
$cmd = escapeshellarg($cmd);
system($cmd);
```
- escapeshellarg()
```php
system('ls '.escapeshellarg($dir));
```
- preg_match()
```php
preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
```
- [exif_imagetype()](http://php.net/manual/pt_BR/function.exif-imagetype.php)
```php
if (exif_imagetype('image.gif') != IMAGETYPE_GIF) {
    echo 'The picture is not a gif';
}
```

### Funções perigosas para abertura e execução de comandos
- require()
- include()
- file_get_contents()
- fopen()
- fsockopen()
- system()
- exec()
- shell_exec()
- [serialize()](https://www.owasp.org/index.php/PHP_Object_Injection)
- [unserialize()](https://www.owasp.org/index.php/PHP_Object_Injection)
```php
class Example1
{
   public $cache_file;

   function __construct()
   {
      // some PHP code...
   }

   function __destruct()
   {
      $file = "/var/www/cache/tmp/{$this->cache_file}";
      if (file_exists($file)) @unlink($file);
   }
}

// some PHP code...

$user_data = unserialize($_GET['data']);

// some PHP code...
```

### Funções para ajudar na proteção em aberta e execução de comandos
- dirname()
- basename()
- realpath()
- pathinfo()

### Cuidado com banco de dados
- Criar usuário exclusivo para aplicação
- Liberar acesso ao banco apenas pela aplicação
- Utilizar VPN para acessar banco
- Não confie totalemten em mysql_real_escape_string() e pg_escape_string()
- Use Prepared Statement
- Utilize ORMs

### Formulários
- Exija um token (CSRF)
- Prefira POST em vez de GET
- Limite o tempo de sessão
- Force o uso dos seus formulários
- Verifique 'HTTP_REFERER'

### Captchas

### Senhas
- Utilize salt
- Utilize password_hash
- Define alguma politica de senha
- Restrinja o número máximo de tentativas
:wq

### Ambiente
- Mantenha ambiente atualizado
- expose_php
- Apache ServerTokens
- Desabilite tudo que não estiver sendo usado
- Dê a permissão correta aos arquivos e diretórios