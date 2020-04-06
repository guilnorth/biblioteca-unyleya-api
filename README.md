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

```sh
docker-compose run --build
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

<!-- Markdown link & img dfn's -->

[docker]: https://www.docker.com/why-docker