# Conceitos importantes

## Protocolo HTTP

### Cliente x Servidor
- response
- request

### Cabeçalho
- header x payload
- stateless

### Request exemplo
```
GET / HTTP/1.1
Host: www.freebsd.org
User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3
Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5
Accept-Language: en-us,en;q=0.5
Accept-Encoding: gzip,deflate
Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7
Keep-Alive: 300
Connection: keep-alive
If-Modified-Since: Mon, 09 May 2005 21:01:30 GMT
If-None-Match: "26f731-8287-427fcfaa"
```

### Response exemplo
```
HTTP/1.1 200 OK
Date: Fri, 13 May 2005 05:51:12 GMT
Server: Apache/1.3.x LaHonda (Unix)
Last-Modified: Fri, 13 May 2005 05:25:02 GMT
ETag: "26f725-8286-42843a2e"
Accept-Ranges: bytes
Content-Length: 33414
Keep-Alive: timeout=15, max=100
Connection: Keep-Alive
Content-Type: text/html
```

### [Métodos](https://www.iana.org/assignments/http-methods/http-methods.xhtml)
- GET
- POST
- PUT
- DELETE
- HEAD
- TRACE
- OPTIONS

### [RESTfull](https://pt.wikipedia.org/wiki/REST)

### [Status da requisição](https://pt.wikipedia.org/wiki/Lista_de_c%C3%B3digos_de_estado_HTTP)
- 1xx - Códigos informativos
- 2xx - Operações realizadas com sucesso
- 3xx - Redirecionamento
- 4xx - Requisições errôneas por parte do cliente
- 5xx - Respostas errôeas por parte do servidor

## Criptografia

### Alguns tipos de criptografia
- Simétrica
- Assimétrica
- Criptografia x Hash
- [Raibow tables](https://pt.wikipedia.org/wiki/Rainbow_table)

### Criptografia e hash no PHP
- [base64](criptografia_hash_files/base64.php)
```php
$string = '123456';
base64_encode($string);
# MTIzNDU2
base64_decode($codificada);
# 123456

```

- [md5](criptografia_hash_files/md5.php)
```php
md5(123456);
# e10adc3949ba59abbe56e057f20f883e
```

- [sha1](criptografia_hash_files/sha1.php)
```php
sha1(123456)
# 7c4a8d09ca3762af61e59520943dc26494f8941b
```
- [openssl](criptografia_hash_files/openssl.php)
- [sodium](criptografia_hash_files/sodium.php)

### Autorização x Autenticação

### Autorização
- Whitelists
- Blacklists

### Autenticação
- [SGBD](autenticacao_files/SGBD.php)
```php
$pdo = new PDO('mysql:host=hostname;dbname=dbname', 'usuario', 'senha');

$query = "SELECT * FROM usuario WHERE nome=:nome";

$statement = $pdo->prepare($query);
$statement->bindValue(":nome",$nome);
$statement->execute();

$rows = $stm->fetch(\PDO::FETCH_ASSOC);

```

- [LDAP](autenticacao_files/LDAP.php)
```php
ldap_connect("ldaps://auth.seg4linux.com.br/", 636);

ldap_set_option($conexao, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($conexao, LDAP_OPT_REFERRALS, 0);

$dn = 'cn=admin,dc=treino,dc=org';
$senha = 'senhasecreta';

ldap_bind($conexao, $dn, $senha);

echo "Usuário autenticado!";

ldap_close($conexao);

```

- [Kerberos](autenticacao_files/kerberos.php)
```php
kadm5_init_with_password('auth.seg4linux', 'TREINO.ORG', 'admin/admin', 'senhasecreta');

kadm5_destroy($conexao);
```

### Outros tipos de autenticação

- [OTP](https://pt.wikipedia.org/wiki/Senha_descart%C3%A1vel) - Autenticação por token
- Duplo fator - Dois tipos de autenticação
- [Biométrica](https://pt.wikipedia.org/wiki/Biometria) - Autenticação pela digital
- [OpenID](https://pt.wikipedia.org/wiki/OpenID) - Cadastro de usuários compartilhados entre sites
- [Oauth](https://pt.wikipedia.org/wiki/OAuth) - Mesmo que OpenID, mas com a utilização de token
- [SAML](https://en.wikipedia.org/wiki/SAML_2.0) - Autenticação compartilhada utilizando tickets
