# Em caso de pânico

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