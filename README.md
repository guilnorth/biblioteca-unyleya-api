# Desafio Técnico Unyleya

> O desafio consiste em desenvolver um sistema para gerenciamento de biblioteca através de uma aplicação REST backend em PHP e consumir através de um frontend.

## Aplicação

Documentação da Api disponível em:

> https://documenter.getpostman.com/view/10246660/SzYbzHkB

![](/screen.png)

## Instalação Local

### Pré requisitos
- Docker e Docker Compose

Siga os passos de acordo com o seu sistema operacional
> https://docs.docker.com/compose/install/

Após clonar o repositório, dentro da pasta do projeto execute:
Talvez seja necessário executar os comandos "docker" com "sudo", dependendo da sua configuração de ambiente.

```sh
docker-compose run --build
```

Em um novo terminal, para criar e popular o banco de dados, execute:

```sh
docker exec -it php /var/www/html/artisan migrate:fresh --seed
```

A api e os endpoints estarão disponíveis em 
> http://localhost:80/api/v1

**Atenção:** Certifique-se que a porta 80 não está sendo utilizada.


Você também pode utilizar seu ambiente padrão para rodar o projeto, mas para isso precisará ter configurado:

- PHP 7^
- MySQL
- Servidor como nginx

Sem o Docker você precisará verificar as configurações do banco de dados em
```sh
.env
#e também dentro de
/src/.env
```

## Arquitetura

- **Lumen:** Lumen é um micro framework PHP para contrução de ApiRestfull leve e rápido.


- **[Docker][docker]** Docker é uma implementação de virtualização de containers que facilita o desenvolvimento ágil e mantém todos ambientes uniformes.

**Observação:** Utilizei o SoftDelete para as operações de Delete, o qual cria um campo "deleted_at" com o timestamp. Também utilizei o campo "year" do Eloquente para representaçõs dos anos no banco. Porém o mysql possui um limite de 1901 to 2155 a este tipo de campo, o que deixa claro não ser viável. Este foi mantido, porém, para simpificar a implementação.

<!-- Markdown link & img dfn's -->

[docker]: https://www.docker.com/why-docker