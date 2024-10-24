# Web Weather Forecast

## Getting Started

Rode o serviços do PHP, Nginx e Mysql

```bash
make run
```

Rode as configurações iniciais necessárias da aplicação

```bash
make prepare
```

Caso for necessário, crie uma tabela mysql para a aplicação

```bash
docker-compose exec mysql sh
create database laravel;
```

Acesso o servidor de desenvolvimento na url `localhost:60`
