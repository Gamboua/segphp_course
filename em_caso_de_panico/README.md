# Em caso de pânico

### Motivos de invasão
- Puro defacement (desfiguração de um site com imagens e textos), normalmente feito por iniciantes que querem demonstrar a hackers mais experientes que têm as habilidades necessárias para entrar num grupo ou obter status;
- Beneficiar da reputação e relevância estabelecida de um site para alavancar a visibilidade de outros sites hackeados;
- Beneficiar da reputação e relevância estabelecida de um site para distribuição de adware, de modo a injectar anúncios em qualquer site que o usuário visite;
- Beneficiar da reputação e relevância estabelecida de um site para distribuição de malware de modo a infectar o maior número possível de sites, servidores e outros computadores para roubo de credenciais de acesso a contas bancárias ou informações pessoais que depois podem ser usadas ou vendidas.
- Mineração de Bitcoins

### O que fazer
- Retirar o site do ar;
- Se for uma VM, salvar um snapshot do cenário comprometido;
- Realizar uma copia fiel do disco físico, em sistemas GNU/Linux o comando [dd](https://linux.die.net/man/1/dd) pode ser utilizado;
- Buscar e salvar os logs de acessos e tráfego, para análise futura;
- Corrigir as falhas encontradas, aplicar patches, atualizar softwares;
- Restaurar backup sadio.

### O que não fazer
- Manter o serviço no ar;
- Restaurar um backup imediatamente;
- Monitorar o ataque.

### Sequência de análise
- Logs da aplicação;
- Logs do servidor web, banco de dados e demais ativos envolvidos;
- Logs do sistema;
- Captura de pacotes (se houver) [tcpdump](https://www.tcpdump.org/tcpdump_man.html);
- Últimos arquivos e diretórios alterados [find](http://man7.org/linux/man-pages/man1/find.1.html);
- Procurar por rootkits com utilitários como [chkrootkit](http://www.chkrootkit.org/) e [rkhunter](http://rkhunter.sourceforge.net/);
- Analisar os processos em execução com [ps aux](https://www.petefreitag.com/tools/man-pages/ps.html) e [unhide](http://www.unhide-forensics.info/);
- Analisar as conexões abertas com [netstat](https://linux.die.net/man/8/netstat) e [unhide-tcp](https://www.systutorials.com/docs/linux/man/8-unhide-tcp/);
- Analisar os módulos carregados pelo kernel com [lsmod](https://linux.die.net/man/8/lsmod);
- Analisar arquivos abertos com [lsof](https://linux.die.net/man/8/lsof).

### Links
- [Motivos de invasão](https://www.pedrodias.net/how-to/meu-site-foi-hackeado-e-agora)